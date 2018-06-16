@extends('layouts.master')

@section('content')

<div class="show-container">
    <div class="show-part">
        <h2 class="show-title">{{$category->name}}</h2>
        <p>{{$category->description}}</p>
    </div>
    <div class="show-part">
        <h2 class="show-title">Genre(s):</h2>
        @foreach($category->genres as $genre)
            <p>{{$genre->name}}</p>
        @endforeach
    </div>
    <div class="show-part">
        <h2 class="show-title">Channel(s):</h2>
        @foreach ($category->channels as $channel)
            <p><a href="channels/{{$channel->id}}">{{$channel->name}}</a></p>
        @endforeach
    </div>
    <a href="{{URL::to('/categories')}}"><button class="tablebutton" type="submit">Back</button></a>
</div>


    @endsection
