@extends('layouts.master')

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title"><b>Notification Name:</b> {{$notification->name}}</h2>
        <p>{{$notification->text}}</p>
    </div>

    <a href="{{URL::to('/notifications')}}"><button class="tablebutton" type="submit">Back</button></a>

@endsection
