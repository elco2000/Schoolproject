<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNotificationPost;
use App\Notification;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notification::all()->take(6);
        return view ('notifications.index', compact('notifications') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('notifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotificationPost $request)
    {
        $validatedData = $request->validated();


        $notification = new Notification();
        $notification->name = $request['name'];
        $notification->text = $request['text'];
        $notification->save();

        return redirect()->action('NotificationsController@index')->with('correct', 'Notification gemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        return view('notifications.show', compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        return view('notifications.edit', compact('notification' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreNotificationPost $request, Notification $notification)
    {
        $validatedData = $request->validated();

        $notification->name = $request['name'];
        $notification->text = $request['text'];
        $notification->save();

        return redirect ()->action('NotificationsController@index')->with('correct', 'Notification gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        $notification->delete();

        return redirect ()->action('NotificationsController@index')->with('correct', 'Notification verwijderd');
    }
}
