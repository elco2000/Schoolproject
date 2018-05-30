<h1>Reactions</h1>

<ul>
    @foreach($reactions as $reaction)
        <li>{{$reaction->text}}</li>
        <li>{{$reaction->account_idaccount}}</li>
        <li>{{$reaction->channel_idchannel}}</li>
        <br>
    @endforeach
</ul>