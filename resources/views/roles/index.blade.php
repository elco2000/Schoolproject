@extends('layouts.master')

@section('content')
    <h1>Roles</h1>
    <a href="{{ URL::to('users') }}"><button class="tablebutton" type="submit">Users</button></a>
    <a href="{{ URL::to('permissions') }}"><button class="tablebutton" type="submit">Permissions</button></a>



    <table class="normaltabel">
        <tr class="normaltr">
            <th>Id</th>
            <th>Role</th>
            <th>Permissions</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($roles as $role)
            <tr class="normaltr">
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>
                <td><a href="{{URL::to('roles/'.$role->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'roles/'.$role->id,  'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                    {{ Form::close() }}</td>
            </tr>

        @endforeach

    </table>
    <a href="{{URL::to('roles/create')}}"><button class="tablebutton" type="submit">Add Role</button></a>


@endsection