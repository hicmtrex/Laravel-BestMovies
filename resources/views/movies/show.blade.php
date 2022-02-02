@extends('layouts.app')
@section('content')

<div class="row mt-2">

    <div class="col-6">
        <img width="100%" src={{$movie->image}} alt="">
    </div>
    <div class="col-6">
        <ul class="list-group-flush">
            <li class="list-group-item">
                <h2>{{$movie->title}}</h2>
            </li>
            <li class="list-group-item">
                Brand : {{$movie->brand}}
            </li>
            <li class="list-group-item">
                <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/IMDB_Logo_2016.svg/2560px-IMDB_Logo_2016.svg.png'
                    width='40px' class='me-1' /> <strong>{{$movie->rating}}</strong>
            </li>
            <li class="list-group-item">Price: ${{$movie->price}}</li>
            <li class="list-group-item">{{$movie->description}}</li>
            <li class="list-group-item">
                <form action="/api/movies/{{$movie->id}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger col-12">Delete</button>
                </form>
            </li>
            <li class="list-group-item">

                <a href="/movies/edit/{{$movie->id}}" class="btn btn-primary col-12">Edit</a>
                </form>
            </li>
        </ul>
    </div>
</div>

@endsection