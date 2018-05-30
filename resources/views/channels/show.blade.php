<div class="blog-post">
    <h2 class="blog-post-title">{{$channel->name}}</h2>
    <p>{{$channel->logoUrl}}</p><br>
    <p>{{$channel->channelUrl}}</p>
    <p>{{$channel->identertainer}}</p>
    <br>
    <h2>Reactions:</h2>
    @foreach ($channel->reactions as $reaction)
        <p>{{$reaction->text}}</p>
    @endforeach


</div>