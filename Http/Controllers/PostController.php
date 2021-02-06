<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class PostController extends Controller
{
    public function index()
    {
            // DB::enableQueryLog();
            // $post=Post::all();
            // foreach($post as $pos)
            // {
            //     foreach($pos->comment as $c)
            //     {
            //         dump($c);
            //     }
            // }
            // dd(DB::getQueryLog());

        return view('posts.index',[
            'posts'=>Post::all()
        ]);
    }
    public function create()
   {
    return view('posts.create');
   } 
//    public function store(Request $req)
//    {
//        $data=$req->validate();
//        $post=new Post();
//     $post->title=$req->input('title');
//     $post->content=$req->input('content');
//     $post->slug=str::slug($post->title,'-');
//     $post->active=true;
//     $post->save();
//     $req->session()->flash('status','post was created!!');
//     return redirect('/posts');
//    }

// public function store(StorePost $req)
// {
//     $post=new Post();
//  $post->title=$req->input('title');
//  $post->content=$req->input('content');
//  $post->slug=str::slug($post->title,'-');
//  $post->active=true;
//  $post->save();
//  $req->session()->flash('status','post was created!!');
//  return redirect('/posts');
// }

public function store(StorePost $req)
{
    $data=$req->only(['title','content']);
    $data['slug']=str::slug($data['title'],'_');
    $data['active']=true;
    $post=Post::create($data);
 $req->session()->flash('status','post was created!!');
 return redirect('/posts');
}

   public function show($id)
   {
    return view('posts.show',[
        'post'=>Post::find($id)
    ]);
   } 

   public function edit($id)
   {
    return view('posts.edit',[
        'post'=>Post::findorfail($id)
    ]);
   }   
   
   public function update(StorePost $req,$id)
   {
    $post=Post::findorfail($id);
    $post->title=$req->input('title');
    $post->content=$req->input('content');
    $post->save();
    $req->session()->flash('status','post was updated!!');
    return redirect('/posts');
   } 

   public function destroy(Request $req,$id)
   {
       $post=Post::findOrFail($id);
       $post->delete();
       $req->session()->flash('status','post was deleted!!');
    return redirect('/posts');
   }
}
