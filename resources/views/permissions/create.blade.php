@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'permissions', 'method' => 'POST')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}<br>
        {!! Form::text('name', '', ['class' => '']) !!}
    </div>

    @if(!$roles->isEmpty())
    <h4>Assign Permission to Roles</h4>

    @foreach ($roles as $role)
    <div class="form-group">
        {!! Form::checkbox('roles[]', $role->id); !!}
        {!! Form::label($role->name, ucfirst($role->name), array('class' => '')) !!}<br>
    </div>
    @endforeach
    @endif

    <div class="form-groups">
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

@endsection