@extends('layouts.master')

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title"><b>Reactions: </b>{{$video->title}}</h2>
        <p>{{$video->description}}</p>
        <p>{{$video->videoUrl}}</p><br>
        <p>{{$video->channel_id}}</p>
    </div>

    <a href="{{URL::to('/videos')}}"><button class="tablebutton" type="submit">Back</button></a>

@endsection
