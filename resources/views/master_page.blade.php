<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session()->has('status'))
    <h3 style="color: green">{{ session()->get('status') }}</h3>
    @endif
    <ul>
        {{-- <li><a href="{{ route('home') }}">home page</a></li> --}}
        <li><a href="{{ route('posts.create') }}">new post</a></li>
    </ul>
    @yield('content')
    {{-- <script src="{{ mix('resources/js/app.js') }}"></script> --}}
</body>
</html>