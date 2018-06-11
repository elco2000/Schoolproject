@extends('layouts.master')

@section('content')
    <h1>Notification Types</h1>


    <table class="normaltabel">
        <tr class="normaltr">
            <th>ID</th>
            <th>Name</th>
            <th>ID Account</th>
            <th>ID Channel</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($reactions as $reaction)
            <tr>
                <td>{{$reaction->id}}</td>
                <td><a href="reactions/{{$reaction->id}}">{{$reaction->name}}</a></td>
                <td>{{$reaction->account_idaccount}}</td>
                <td>{{$reaction->channel_id}}</td>
                <td><a href="{{URL::to('reactions/'.$reaction->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'reactions/'.$reaction->id,  'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                    {{ Form::close() }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{URL::to('reactions/create')}}"><button class="tablebutton" type="submit">Post a new Reaction</button></a>
@endsection
