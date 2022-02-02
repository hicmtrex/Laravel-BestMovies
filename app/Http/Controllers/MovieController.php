<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller
{
    //

    public function home()
    {
        $movies = Movie::all();
        return view('home', ['movies' => $movies]);
    }
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', ['movies' => $movies]);
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies.show', ['movie' => $movie]);
    }

    public function create()
    {

        return view('movies.create');
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.edit', ['movie' => $movie]);
    }


    public function store()
    {

        $movie = new Movie();

        $movie->title = Request('title');
        $movie->image = Request('image');
        $movie->brand = Request('brand');
        $movie->rating = Request('rating');
        $movie->price = Request('price');
        $movie->description = Request('description');

        $movie->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        Movie::destroy($id);

        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $product = Movie::find($id);
        $product->update($request->all());
        return redirect("/movies/$id");
    }
}
