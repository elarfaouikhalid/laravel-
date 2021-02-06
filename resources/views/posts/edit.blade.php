@extends('master_page')
@section('content')
    <form action="{{ route('posts.update',['post'=>$post->id]) }}" method="Post">
        @csrf
        @method('PUT')
        @include('posts.form')
        <button type="submit"> update post</button>
    </form>
@endsection