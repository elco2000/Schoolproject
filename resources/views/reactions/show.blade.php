@extends('layouts.master')

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title"><b>Reactions: </b></h2>
        <p>{{$reaction->text}}</p>
        <p>{{$reaction->account_idaccount}}</p><br>
        <p>{{$reaction->channel_id}}</p>
    </div>

    <a href="{{URL::to('/notificationtypes')}}"><button class="tablebutton" type="submit">Back</button></a>

@endsection
