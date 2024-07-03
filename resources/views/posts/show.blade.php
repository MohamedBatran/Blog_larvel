@extends('layouts.nav')

@section('title')
   Post
@endsection

@section('content')

<h3 class="text-center">All Posts</h3><br><br>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <a  class="btn btn-danger btn-create" role="button" href="{{ route('posts.truncate')}}">Delete all</a>

<style>

    
    .table-container {
        margin: 0 auto;
        max-width: 80%;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .btn-create {
        display: block;
        margin: 0 auto 20px auto;
        width: fit-content;
    }
</style>

<div class="table-container">
    <a class="btn btn-success btn-create" role="button" href="{{ route('posts.create') }}">Create New Post</a><br><br>
    <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
              <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->category }}</td>
                <td>
                    <a class="btn btn-success" role="button" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <a class="btn btn-danger" role="button" href="{{ route('posts.delete', $post->id) }}">Delete</a>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
