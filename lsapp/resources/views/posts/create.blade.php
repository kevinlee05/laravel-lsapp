@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>
    {{-- enctype multipart/data for file uploads --}}
     {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title')}}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body')}}
            {{ Form::textarea('body', '', ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Body Text']) }}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{ Form::submit('Submit', ['class' =>'btn btn-primary'])}}
     {!! Form::close() !!}
@endsection

