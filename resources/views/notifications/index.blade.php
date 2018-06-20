@extends('layouts.master')

@section('content')
    <div class="index-container">
        <article class="index-articles">
            @foreach($notifications as $notification)
                <article class="index-article">
                    <h4>{{$notification->name}}</h4>
                    <p>{{str_limit($notification->text)}}</p>
                    <a href="notifications/{{$notification->id}}" class="read-more">
                        <p>Read more...</p>
                    </a>
                </article>
            @endforeach
        </article>
        <a href="{{URL::to('notifications/create')}}"><button class="tablebutton" type="submit">Make a new Notification</button></a>
    </div>
@endsection
