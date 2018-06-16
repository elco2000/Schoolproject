@extends('layouts.master')

@section('content')

<div class="show-container">
    <div class="show-part">
        <h2 class="show-title">{{$channel->name}}</h2>
        <img src="{{$channel->logoUrl}}" alt="Logo Picture">
        <h4>Channel Url: <a href="{{$channel->channelUrl}}" target="_blank">Link</a></h4>
    </div>
    <div class="show-part">
        <h2 class="show-title">Videos:</h2>
        @foreach ($channel->videos as $video)
            <h4 class="show-title">{{$video->title}}</h4>
            <iframe class="show-video" src="{{$video->videoUrl}}" allowfullscreen></iframe>
        @endforeach
    </div>
    <div class="show-part">
        <h2 class="show-title">Reactions:</h2>
        @foreach ($channel->reactions as $reaction)
            <p>{{$user->name}}</p>
            <p>{{$reaction->text}}</p>
        @endforeach
    </div>
    <a href="{{URL::to('/channels')}}"><button class="tablebutton" type="submit">Back</button></a>
</div>



@endsection
