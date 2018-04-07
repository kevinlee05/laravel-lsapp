@extends('layouts.app')

@section('content')
<h1>{{ $title }} </h1>
<p>This is the Services Page</p>
@if(count($services) > 0)
    <p>These are our services:</p>
    <ul class="list-group">
    @foreach($services as $service)
        <li class="list-group-item">{{ $service }}</li>
    @endforeach
    </ul>
@else
<p>We have no services</p>
@endif
@endsection