@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn"><< Back to Posts</a>
    <h1>{{ $post->title }}</h1>
    <div class="col-md-4 col-sm-4">
        <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%" alt="">
    </div>
    <div class="col-md-8 col-sm-8">
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}} </small>
    <hr>
    @if (!Auth::guest())
        @if(Auth::user()->id == $post->user_id )
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit Post</a>
            {!!Form::open(['action' =>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete Post', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection 