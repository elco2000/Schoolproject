@extends('layouts.master')

@section('content')
    <h1>Permissions</h1>
    <a href="{{ URL::to('users') }}"><button class="tablebutton" type="submit">Users</button></a>
    <a href="{{ URL::to('roles') }}"><button class="tablebutton" type="submit">Roles</button></a>



    <table class="normaltabel">
        <tr class="normaltr">
            <th>Id</th>
            <th>Permissions</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($permissions as $permission)
            <tr class="normaltr">
                <td>{{$permission->id}}</td>
                <td>{{$permission->name}}</td>
                {{--<li>{{$channel->identertainer}}</li>--}}
                <td><a href="{{URL::to('permissions/'.$permission->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'permissions/'.$permission->id,  'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                    {{ Form::close() }}</td>
            </tr>

        @endforeach

    </table>
    <a href="{{URL::to('permissions/create')}}"><button class="tablebutton" type="submit">Add Permission</button></a>


@endsection