@extends('layouts.master')

@section('content')

    <div class="show-container">
        <div class="show-part">
            <h2 class="show-title">{{$notification->name}}</h2>
            <p>{{$notification->text}}</p>
        </div>
        {{--<div class="show-part">--}}
            {{--<h2 class="show-title">Type Notification:</h2>--}}
            {{--<p>{{$notification->notificationtypes['name']}}</p>--}}
        {{--</div>--}}
        <div class="show-part">
            <h2 class="show-title">Posted By:</h2>
            <p>{{$notification->owner['name']}}</p>
        </div>
        <div class="show-buttons">
            <a href="{{URL::to('notifications/'.$notification->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a>
            <a href="{{URL::to('/notifications')}}"><button class="tablebutton" type="submit">Back</button></a>
            {{ Form::open(array('url' => 'notifications/'.$notification->id,  'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
            {{ Form::close() }}
        </div>
    </div>

@endsection
