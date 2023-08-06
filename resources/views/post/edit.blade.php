@extends('layouts.app')
@section('content')
@section('title')
Edit Page
@endsection('title')
<a href="/posts" class="btn btn-danger">Back</a>
<form method="post" action="/posts/{{$post['id']}}">
<div class="form-group">
@csrf
@method('put')
Title <input type="text"  class="form-control" name="title" placeholder="Title" value="{{$post->title}}"><br>
Description<input type="text" name="description"  class="form-control" value="{{$post->description}}" placeholder="Description"><br>
<input type="submit" class="btn btn-primary">
</div>
</form>
@endsection('content')