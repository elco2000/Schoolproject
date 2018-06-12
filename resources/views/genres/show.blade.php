@extends('layouts.master')

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title"><b>Genre Name: </b>{{$genre->name}}</h2>
    </div>

    <a href="{{URL::to('/genres')}}"><button class="tablebutton" type="submit">Back</button></a>

@endsection
