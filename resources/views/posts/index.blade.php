@extends('master_page')
@section('content')
    <h1>List of posts</h1>
    <ul>
        @forelse($posts as $post)
        <li>
            <a href="{{ route('posts.show',['post'=>$post->id]) }}"><h2>{{ $post->title }}</h2></a>
            <p>{{ $post->content }}</p>
            <em>{{ $post->created_at}}</em>
            <a href="{{route('posts.edit',['post'=>$post->id])}}">edit</a>
            <form action="{{ route('posts.destroy',['post'=>$post->id]) }}" method="Post">
                @csrf
                @method('DELETE')
                <button type="submit"> delete post</button>
            </form>
        </li>
        @empty
        <h5>not post found</h5>
        @endforelse
    </ul>
@endsection