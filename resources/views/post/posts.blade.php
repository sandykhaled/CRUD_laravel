@extends('layouts.app')
@section('content')
@section('title')
Main Page
@endsection('title')
        <table class="table table-bordered table-striped">
            <a href="posts\create" class="btn btn-success">Add</a>
        <tr>
            <th>ID</th>
            <th>title</th>
            <th>Description</th>
            <th>Posted By</th>
            <th colspan="3">Actions</th>
        </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->user->name}}</td>
                    <td><a href="posts\{{$post['id']}}" class="btn btn-success">View</a></td>
                    <td><a href="posts\{{$post['id']}}/edit" class="btn btn-primary">Edit</a></td>
                   <td><form method="post" action="posts/{{$post->id}}">
                    @csrf
                    @method('delete')
                    <input type="submit" name="Delete" value="Delete" class="btn btn-danger">
                   </form>
                   </td>
                </tr>
            @endforeach
        
    </table>
@endsection('content')
