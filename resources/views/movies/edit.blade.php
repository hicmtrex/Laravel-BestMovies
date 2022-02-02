@extends('layouts.app')
@section('content')

<div class="row justify-content-center">

    <h1 class="text-center">Upload Movie</h1>
    <div class="col-5">
        <form action="/api/movies/{{$movie->id}}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$movie->title}}">

            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image Url</label>
                <input type="url" class="form-control" id="image" name="image" value="{{$movie->image}}">
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Genre</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{$movie->brand}}">
            </div>
            <div class="mb-3">
                <label for="Rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" value="{{$movie->rating}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$movie->price}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea rows="3" type="text" class="form-control" id="description"
                    name="description">{{$movie->description}}</textarea>
            </div>
            <input type="submit" value="Upload" class="btn btn-primary col-12">

        </form>
    </div>
</div>

@endsection