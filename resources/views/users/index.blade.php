@extends('layouts.master')

@section('content')
    <h1>Users</h1>
    <a href="{{ URL::to('permissions') }}"><button class="tablebutton" type="submit">Permissions</button></a>
    <a href="{{ URL::to('roles') }}"><button class="tablebutton" type="submit">Roles</button></a>



    <table class="normaltabel">
        <tr class="normaltr">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>User Roles</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($users as $user)
            <tr class="normaltr">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td> {{$user->email}}<br></td>
                <td>{{$user->roles()->pluck('name')->implode(' ') }}<br></td>
                {{--<li>{{$channel->identertainer}}</li>--}}
                <td><a href="{{URL::to('users/'.$user->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'users/'.$user->id,  'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                    {{ Form::close() }}</td>
            </tr>

        @endforeach

    </table>
    <a href="{{URL::to('users/create')}}"><button class="tablebutton" type="submit">Add User</button></a>


@endsection