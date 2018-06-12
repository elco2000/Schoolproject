@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'users', 'method' => 'POST')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}<br>
        {!! Form::text('name', '', ['class' => '']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email'); !!}<br>
        {!! Form::email('email', '', array('class' => '')) !!}
    </div>

    <div class="form-group">
        @foreach ($roles as $role)
        {!! Form::checkbox('roles[]', $role->id); !!}
        {!! Form::label($role->name, ucfirst($role->name), array('class' => '')) !!}<br>
        @endforeach
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password'); !!}<br>
        {!! Form::password('password', '', array('class' => '')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Confirm Password'); !!}<br>
        {!! Form::password('password_confirmation', '', array('class' => '')) !!}
    </div>

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