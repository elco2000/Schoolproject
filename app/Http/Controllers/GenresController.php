<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenrePost;
use App\Genre;
use Illuminate\Http\Request;

class GenresController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'isUser'], ['only' => ['create', 'store', 'edit', 'delete']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $genres = Genre::all();
        return view('genres.search', compact('genres'));
    }

    public function postSearch(Request $request)
    {
        if($request->has('query')) {
            $genres = genre::where('name', 'LIKE', '%' . $request->get('query') .  '%')->get();
            return view('genres.searchresults', compact('genres'));
        } else {
            return abort(400);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenrePost $request)
    {
        $genre = new Genre();
        $genre->name = $request['name'];
        $genre->save();

        $genre = Genre::all();
        return redirect()->action('GenresController@index')->with('correct', 'Genre Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        return view('genres.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGenrePost $request, Genre $genre)
    {
        $genre->name = $request['name'];
        $genre->save();

        return redirect()->action('GenresController@index')->with('correct', 'Genre Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->action('GenresController@index')->with('correct', 'Genre Removed');
    }
}
