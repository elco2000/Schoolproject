<div class="blog-post">
    <h2 class="blog-post-title"><b>Channel name: </b><br>{{$channel->name}}</h2>
    <img src="{{$channel->logoUrl}}" alt="Logo Picture">
    <h4>Channel Url: <a href="{{$channel->channelUrl}}" target="_blank">Link</a></h4>
    {{--<p>{{$channel->identertainer}}</p>--}}
    <br>
    {{--<h2><b>Reactions: </b></h2>--}}
    {{--@foreach ($channel->reactions as $reaction)--}}
        {{--<p>{{$reaction->text}}</p>--}}
    {{--@endforeach--}}

    {{--<h2><b>Videos: </b></h2>--}}
    {{--@foreach ($channel->videos as $video)--}}
        {{--<li>Title: {{$video->title}}</li>--}}
        {{--<li>Description: {{$video->description}}</li>--}}
        {{--<li>VideoUrl: {{$video->videoUrl}}</li>--}}
        {{--<br>--}}
    {{--@endforeach--}}


</div>

<a href="{{URL::to('/channels')}}"><button class="btn btn-primary" type="submit">go back to channels</button></a>