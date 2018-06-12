@extends('layouts.master')

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title"><b>Notification Type Name:</b> {{$notificationtype->name}}</h2>
    </div>

    <a href="{{URL::to('/notificationtypes')}}"><button class="tablebutton" type="submit">Back</button></a>

@endsection
