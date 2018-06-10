@extends('layouts.master')

@section('content')
<h1>Channels</h1>

<table class="normaltabel">
    <tr class="normaltr">
        <th>Id</th>
        <th>Name</th>
        <th>LogoUrl</th>
        <th>ChannelUrl</th>
        <th></th>
        <th></th>
    </tr>

    @foreach($channels as $channel)
        <tr class="normaltr">
            <td>{{$channel->id}}</td>
            <td><a href="channels/{{$channel->id}}">{{$channel->name}}</a></td>
            <td> {{$channel->logoUrl}}<br></td>
            <td>{{$channel->channelUrl}}<br></td>
            {{--<li>{{$channel->identertainer}}</li>--}}
                <td><a href="{{URL::to('channels/'.$channel->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
            <td>{{ Form::open(array('url' => 'channels/'.$channel->id,  'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                {{ Form::close() }}</td>
        </tr>

    @endforeach

</table>
<a href="{{URL::to('channels/create')}}"><button class="tablebutton" type="submit">Make new channel</button></a>


@endsection
