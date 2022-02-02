@extends('layouts.app')

@section('content')
<div class="row">
    <h1 class="text-center">Best Movies</h1>
    @foreach ($movies as $movie)
    <div class='col-md-4 col-3  col-sm-12 col-lg-4 col-3 col-xl-3'>
        <div class='card shadow rounded my-3 p-2'>
            <a href="/movies/{{$movie->id}}">
                <img style='height: 15rem' ; src={{$movie->image}} class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h4 class='card-title'>{{$movie->title}}</h4>

                    <h6 class='card-subtitle mb-2 text-muted'>{{$movie->brand}}</h6>
                    <p class='card-text text-white'> <img
                            src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/IMDB_Logo_2016.svg/2560px-IMDB_Logo_2016.svg.png'
                            width='40px' class='me-1' /> <strong>{{$movie->rating}}</strong></p>
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>
@endsection