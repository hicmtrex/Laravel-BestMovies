@extends('layouts.app')
@section('content')

<div class="row justify-content-center">

    <h1 class="text-center">Add Movie</h1>
    <div class="col-5">
        <form action="/api/movies" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">

            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image Url</label>
                <input type="url" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Genre</label>
                <input type="text" class="form-control" id="brand" name="brand">
            </div>
            <div class="mb-3">
                <label for="Rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea rows="3" type="text" class="form-control" id="description" name="description"></textarea>
            </div>
            <input type="submit" value="Add Movie" class="btn btn-primary">

        </form>
    </div>
</div>

@endsection