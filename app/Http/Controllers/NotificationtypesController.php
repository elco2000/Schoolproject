<?php

namespace App\Http\Controllers;

use App\Notificationtype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNotificationtypePost;

class NotificationtypesController extends Controller
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
        $notificationtypes = Notificationtype::all();
        return view('notificationtypes.search', compact('notificationtypes'));
    }

    public function postSearch(Request $request)
    {
        if($request->has('query')) {
            $notificationtypes = notificationtype::where('name', 'LIKE', '%' . $request->get('query') .  '%')->get();
            return view('notificationtypes.searchresults', compact('notificationtypes'));
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
        return view('notificationtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotificationtypePost $request)
    {
        $notificationtype = new Notificationtype();
        $notificationtype->name = $request['name'];
        $notificationtype->save();

        $notificationtype = Notificationtype::all();
        return redirect()->action('NotificationtypesController@index')->with('correct', 'Notification Type Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notificationtype  $notificationtype
     * @return \Illuminate\Http\Response
     */
    public function show(Notificationtype $notificationtype)
    {
        return view('notificationtypes.show', compact('notificationtype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notificationtype  $notificationtype
     * @return \Illuminate\Http\Response
     */
    public function edit(Notificationtype $notificationtype)
    {
        return view('notificationtypes.edit', compact('notificationtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notificationtype  $notificationtype
     * @return \Illuminate\Http\Response
     */
    public function update(StoreNotificationtypePost $request, Notificationtype $notificationtype)
    {
        $notificationtype->name = $request['name'];
        $notificationtype->save();

        return redirect()->action('NotificationtypesController@index')->with('correct', 'Notification Type Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notificationtype  $notificationtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notificationtype $notificationtype)
    {
        $notificationtype->delete();

        return redirect()->action('NotificationtypesController@index')->with('correct', 'Notification Type Removed');
    }
}
