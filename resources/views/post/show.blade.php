@extends('layouts.app')
@section('content')
@section('title')
Show Page
@endsection('title')
<a href="/posts" class="btn btn-danger">Back</a>
<ul class="list-group">
    <li class="list-group-item">{{$post->id}}</li>
    <li class="list-group-item">{{$post->title}}</li>
    <li class="list-group-item">{{$post->description}}</li>
</ul>
@endsection('content')