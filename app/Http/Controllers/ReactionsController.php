<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReactionPost;
use App\Reaction;
use App\Channel;
use Illuminate\Http\Request;

class ReactionsController extends Controller
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
        $reactions = Reaction::all()->take(10);
        return view ('reactions.index', compact('reactions') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reactions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        //
        $channel = new Reaction();
        $channel->text = $request['text'];
        $channel->channel_id = $request['channel_id'];
        $channel->user_id = auth()->id();
        $channel->save();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reaction  $reaction
     * @return \Illuminate\Http\Response
     */
    public function show(Reaction $reaction)
    {
        //
        return view('reactions.show', compact('reaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reaction  $reaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Reaction $reaction)
    {
        //
        return view('reactions.edit', compact('reaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reaction  $reaction
     * @return \Illuminate\Http\Response
     */
    public function update(StoreReactionPost $request, Reaction $reaction)
    {
        //
        $reaction->text = $request['text'];
        $reaction->channel_id = $request['channel_id'];
        $reaction->save();
        return redirect ()->action('ReactionsController@index')->with('correct', 'Video gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reaction  $reaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reaction $reaction)
    {
        //
        $reaction->delete();
        return redirect ()->action('ReactionsController@index')->with('correct', 'Reaction verwijderd');
    }
}
