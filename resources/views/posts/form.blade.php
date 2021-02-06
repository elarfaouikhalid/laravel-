<div>
    <label for="title">title</label><br>
    <input type="text" name="title" id="title" value="{{old('title',$post->title ?? null)}}"><br>
    <label for="content">content</label><br>
    <input type="text" name="content" id="content" value="{{old('content',$post->content ?? null)}}"><br>
</div>
<div>
    @if($errors->any())
    <div>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    </div>
    @endif
</div>