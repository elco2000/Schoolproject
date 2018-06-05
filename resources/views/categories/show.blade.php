@extends('layouts.master')

@section('content')

<div class="blog-post">
    <h2 class="blog-post-title">{{$category->name}}</h2>
    <p>{{$category->description}}</p>

    <h2>Genres</h2>
    @foreach($category->genres as $genre)
        <p>{{$genre->name}}</p>
    @endforeach
    <br>
    <h2>Channels:</h2>
    @foreach ($category->channels as $channel)
        <p>{{$channel->name}}</p>
    @endforeach
</div>

<a href="{{URL::to('/categories')}}"><button class="tablebutton" type="submit">go back to categories</button></a>
    @endsection
