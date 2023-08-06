@extends('layouts.app')
@section('content')
@section('title')
ADD Page
@endsection('title')
<a href="/posts" class="btn btn-danger">Back</a>
<form action="/posts" method="post">
@csrf
Title <input type="text"  class="form-control"  name="title" placeholder="title"><br>
Decription<input type="text" class="form-control"  name="description" placeholder="Decription"><br>
<!-- User_id<input type="text"  class="form-control" name="user_id" placeholder="user_id"><br> -->
<input type="submit" class="btn btn-primary">
</form>
</body>
</html>
@if($errors->any())
@foreach($errors->all() as $error)
{{$error}}
@endforeach
@endif
@endsection('content')