@extends('layouts.nav')

@section('title')
   Profile
@endsection

@section('content')

<h3 class="text-center">All Profiles</h3><br><br>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<a  class="btn btn-danger btn-create" role="button" href="{{ route('profiles.truncate')}}">Delete all</a>

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
    <a class="btn btn-success btn-create" role="button" href="{{ route('profiles.create') }}">Create New Profile</a><br><br>
    <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Body</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($profiles as $profile)
              <tr>
                <th scope="row">{{ $profile->id }}</th>
                <td>{{ $profile->name }}</td>
                <td>{{ $profile->body }}</td>
                <td>
                    <a class="btn btn-success" role="button" href="{{ route('profiles.edit', $profile->id) }}">Edit</a>
                    <a class="btn btn-danger" role="button" href="{{ route('profiles.delete', $profile->id) }}">Delete</a>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection