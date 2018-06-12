@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'roles/'.$role->id, 'method' => 'PATCH')) !!}
    {!! Form::token() !!}

    <div class="">
        {!! Form::label('name', 'Role Name'); !!}<br>
        {!! Form::text('name', $role->name, array('class' => '')) !!}
    </div>

    <h5><b>Assign Permissions</b></h5>
    @foreach ($permissions as $permission)

        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

    @endforeach
    <br>

    <div class="">
        {!! Form::submit('submit!', array('class' => 'tablebutton')); !!}
        {!! Form::close() !!}
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <a href="{{URL::to('/roles/')}}"><button class="tablebutton" type="submit">Go back to roles</button></a>

@endsection