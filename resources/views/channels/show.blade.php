<div class="blog-post">
    <h2 class="blog-post-title">Channel name: {{$channel->name}}</h2>
    <p>Logo Url: {{$channel->logoUrl}}</p>
    <p>Channel Url: {{$channel->channelUrl}}</p>
    {{--<p>{{$channel->identertainer}}</p>--}}
    <br>
    <h2>Reactions:</h2>
    @foreach ($channel->reactions as $reaction)
        <p>{{$reaction->text}}</p>
    @endforeach

    <h2>Videos:</h2>
    @foreach ($channel->videos as $video)
        <li>Title: {{$video->title}}</li>
        <li>Description: {{$video->description}}</li>
        <li>VideoUrl: {{$video->videoUrl}}</li>
        <br>
    @endforeach


</div>