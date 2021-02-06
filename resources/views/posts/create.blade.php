@extends('master_page')
@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
       @include('posts.form')
        <button type="submit"> add post</button>
    </form>
@endsection