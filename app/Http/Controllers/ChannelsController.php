<?php

namespace App\Http\Controllers;

use App\Channel;
//use App\Http\Requests\StoreChannelPost;
use Illuminate\Http\Request;

class ChannelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $channels = Channel::all();
        return view('channels.index', compact('channels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('channels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $channel = new Channel();
        $channel->name = $request['name'];
        $channel->logoUrl = $request['logoUrl'];
        $channel->channelUrl = $request['channelUrl'];
        $channel->identertainer = $request['identertainer'];
        $channel->save();

//        return redirect()->action('ChannelsController@index')->with('correct', 'Channel aangemaakt!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function show(Channel $channel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function edit(Channel $channel)
    {
        //
        return view('channels.edit', compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Channel $channel)
    {
        //
        $channel->name = $request['name'];
        $channel->logoUrl = $request['logoUrl'];
        $channel->channelUrl = $request['channelUrl'];
        $channel->identertainer = $request['identertainer'];
        $channel->save();

//        return redirect()->action('MemesController@index')->with('correct', 'Meme gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Channel $channel)
    {
        //
        $channel->delete();
//        return redirect()->action('MemesController@index')->with('correct', 'Meme verwijderd');
    }
}
