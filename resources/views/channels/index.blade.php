<h1>Channels</h1>

<ul>
    @foreach($channels as $channel)
        <li>{{$channel->name}}</li>
        <li>{{$channel->logoUrl}}</li>
        <li>{{$channel->channelUrl}}</li>
        <li>{{$channel->identertainer}}</li>
        <br>
    @endforeach
</ul>