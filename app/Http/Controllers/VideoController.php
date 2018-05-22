<?php

namespace App\Http\Controllers;

use App\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = video::all()->take(10);
        return view ('video.index', compact('videos') );
    }



}
