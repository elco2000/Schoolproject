@extends('layouts.master')

@section('content')
<h1>Notifications</h1>


<table class="normaltabel">
    <tr class="normaltr">
        <th>Id</th>
        <th>Name</th>
        <th>Text</th>
        {{--<th>Type</th>--}}
        <th></th>
        <th></th>
    </tr>
    @foreach($notifications as $notification)
    <tr>
        <td>{{$notification->id}}</td>
        <td><a href="notifications/{{$notification->id}}">{{$notification->name}}</a></td>
        <td>{{$notification->text}}</td>
        {{--<td>{{$notification->notificationtypes['name']}}</td>--}}

        <td><a href="{{URL::to('notifications/'.$notification->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
        <td>{{ Form::open(array('url' => 'notifications/'.$notification->id,  'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
        {{ Form::close() }}</td>

    </tr>
    @endforeach
</table>
<a href="{{URL::to('notifications/create')}}"><button class="tablebutton" type="submit">Make a new Notification</button></a>
@endsection
