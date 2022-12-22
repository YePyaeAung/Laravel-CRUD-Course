@extends('layouts.master')

@section('title', "All Lists")

@section('content')
<div class="container">
    <div class="d-flex justify-content-between m-3">
        <h3>All Lists</h3>
        <a href="{{url('/admin/create')}}" class="btn btn-success">+ Create Movie</a>
    </div>
    <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Type</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($movies as $movie)
          <tr>
            <td>{{$movie->title}}</td>
            <td>{{$movie->type}}</td>
            <td>{{$movie->description}}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection

