@extends('layouts.master')

@section('title', "Create")

@section('content')
<div class="container">
    <div class="col-8 offset-2">
        <div class="card">
            <h1 class="card-header text-center text-primary">Create Movie Form</h1>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input class="form-control" type="text" id="title" name="title">
                        @error('title')
                            <div class="mt-1">
                                <p class="text-danger">{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input class="form-control" type="text" id="type" name="type">
                        @error('type')
                            <div class="mt-1">
                                <p class="text-danger">{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="desription" cols="30" rows="5"></textarea>
                        @error('description')
                            <div class="mt-1">
                                <p class="text-danger">{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3 d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection