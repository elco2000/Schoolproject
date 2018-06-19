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
            <p>(Should there be no video, feel free to click <a href="{{$video->videoUrl}}">here</a>.</p>
        @endforeach
    </div>
    <a href="{{URL::to('/videos/create')}}"><button class="tablebutton" type="submit">Add Video</button></a>
    <div class="show-part">
        <h2 class="show-title">Reactions:</h2>
        @foreach ($channel->reactions as $reaction)
            <div class="comment">
            <strong>{{$reaction->created_at->diffForHumans()}}</strong>
                <ul>
            <li>User: {{$reaction->user['name']}}</li>
            <li>Message: {{$reaction->text}}</li>
                </ul>
            </div>
        @endforeach
    </div>

    <form action="{{ route('reactions.store') }}" method="POST">

        {{ csrf_field() }}
        <input type="hidden" name="channel_id" value="{{ $channel->id }}" />
        <input type="hidden" name="user_id" value="{{ auth()->id() }}" />

        <div class="form-group">
            <label for="text">Message <br/>
            <textarea cols="60" rows="4" name="text"></textarea>
            </label>
        </div>


        <div class="form-group">
            <input type="submit" class="" value="Submit Comment" />
        </div>

    </form>
    <div class="show-buttons">
        <a href="{{URL::to('channels/'.$channel->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a>
        <a href="{{URL::to('/channels')}}"><button class="tablebutton" type="submit">Back</button></a>
        {{ Form::open(array('url' => 'channels/'.$channel->id,  'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
        {{ Form::close() }}
    </div>

    {{--<br>--}}
    {{--<a href="{{URL::to('/channels')}}"><button class="tablebutton" type="submit">Back</button></a>--}}
</div>
@endsection
