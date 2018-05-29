<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoPost;
use App\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all()->take(10);
        return view ('videos.index', compact('videos') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideoPost $request)
    {
        $validatedData = $request->validated();


        $video = new Video();
        $video->title = $request['title'];
        $video->description = $request['description'];
        $video->videoUrl = $request['videoUrl'];
        $video->save();

       return redirect()->action('VideosController@index')->with('correct', 'Video gemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('videos.edit', compact('video' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(StoreVideoPost $request, Video $video)
    {
        $validatedData = $request->validated();

        $video->title = $request['title'];
        $video->description = $request['description'];
        $video->videoUrl = $request['videoUrl'];
        $video->save();

        return redirect ()->action('VideosController@index')->with('correct', 'Video gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();

        return redirect ()->action('VideosController@index')->with('correct', 'Video verwijderd');
    }
}
