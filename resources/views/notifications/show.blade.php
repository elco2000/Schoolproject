@extends('layouts.master')

@section('content')

    <div class="show-container">
        <div class="show-part">
            <h2 class="show-title">{{$notification->name}}</h2>
            <p>{{$notification->text}}</p>
        </div>
        <div class="show-part">
            <h2 class="show-title">Type Notification:</h2>
            {{--<p>{{$notificationtype->name}}</p>--}}
        </div>
        <div class="show-part">
            <h2 class="show-title">Posted By:</h2>
            {{--<p>{{$user->name}}</p>--}}
        </div>
        <a href="{{URL::to('/notifications')}}"><button class="tablebutton" type="submit">Back</button></a>
    </div>

@endsection
