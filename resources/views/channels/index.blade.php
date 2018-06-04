<h1>Channels</h1> <a href="{{URL::to('channels/create')}}"><button class="btn btn-primary" type="submit">Make new channel</button></a>




<ul>
    @foreach($channels as $channel)

        <h3>{{$channel->id}}
            <a href="channels/{{$channel->id}}">{{$channel->name}}<br></a></h3>
        <li> {{$channel->logoUrl}}<br></li>
        <li>{{$channel->channelUrl}}<br></li>
        <li>{{$channel->identertainer}}</li>
        <a href="{{URL::to('channels/'.$channel->id.'/edit')}}"><br><button class="btn btn-primary" type="submit">Edit</button></a>
        {{ Form::open(array('url' => 'channels/'.$channel->id,  'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
        {{ Form::close() }}


    @endforeach
</ul>

<a href="{{URL::to('')}}"><button class="btn btn-primary" type="submit">go back to homepage</button></a>

<a href="{!! url('reactions'); !!}">Reactions</a>
