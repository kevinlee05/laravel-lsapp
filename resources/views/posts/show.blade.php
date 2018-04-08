@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn"><< Back to Posts</a>
    <h1>{{ $post->title }}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit Post</a>
    {!!Form::open(['action' =>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete Post', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection 