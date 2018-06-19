@extends('layouts.master')

@section('content')
    <div class="index-container">
        <article class="index-articles">
            @foreach($channels as $channel)
                <article class="index-article">
                    <a href="channels/{{$channel->id}}" class="show-link">
                        <img src="{{$channel->logoUrl}}" alt="Missing Logo">
                        <div class="article-name">
                            <h4>{{$channel->name}}</h4>
                        </div>
                    </a>
                </article>
            @endforeach
        </article>
        <a href="{{URL::to('channels/create')}}"><button class="tablebutton" type="submit">Post a new Channel</button></a>
    </div>
@endsection
