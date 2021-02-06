@extends('master_page')
@section('content')
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
<em>{{ $post->created_at}}</em>
@endsection