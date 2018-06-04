<h1>Channels</h1>

<ul>
    @foreach($channels as $channel)
        <li><a href="channels/{{$channel->id}}">Name: {{$channel->name}}</a></li>
        <li>Logo Url: {{$channel->logoUrl}}</li>
        <li>Channel Url: {{$channel->channelUrl}}</li>
        {{--<li>{{$channel->identertainer}}</li>--}}
        <br>
    @endforeach
</ul>

<a href="{!! url('reactions'); !!}">Reactions</a>
