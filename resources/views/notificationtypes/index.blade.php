@extends('layouts.master')

@section('content')
    <h1>Notification Types</h1>


    <table class="normaltabel">
        <tr class="normaltr">
            <th>Id</th>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($notificationtypes as $notificationtype)
            <tr>
                <td>{{$notificationtype->id}}</td>
                <td><a href="notificationtypes/{{$notificationtype->id}}">{{$notificationtype->name}}</a></td>
                <td><a href="{{URL::to('notificationtypes/'.$notificationtype->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'notificationtypes/'.$notificationtype->id,  'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                    {{ Form::close() }}</td>

            </tr>
        @endforeach
    </table>
    <a href="{{URL::to('notificationtypes/create')}}"><button class="tablebutton" type="submit">Make a new Notification Type</button></a>
@endsection
