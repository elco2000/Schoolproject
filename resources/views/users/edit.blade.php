@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'users/'.$user->id, 'method' => 'PATCH')) !!}
    {!! Form::token() !!}

    <div class="">
        {!! Form::label('name', 'Name'); !!}<br>
        {!! Form::text('name', $user->name, array('class' => '')) !!}
    </div>
    <div class="">
        {!! Form::label('email', 'Email'); !!}<br>
        {!! Form::email('email', $user->email, array('class' => '')) !!}
    </div>
    @foreach ($roles as $role)
    <div class="">
        {!! Form::checkbox('roles[]', $role->id, $user->roles); !!}
        {!! Form::label($role->name, ucfirst($role->name), array('class' => '')) !!}<br>
    </div>
    @endforeach
    <div class="">
        {!! Form::label('password', 'Password'); !!}<br>
        {!! Form::password('password', array('class' => '')) !!}
    </div>
    <div class="">
        {!! Form::label('password', 'Confirm Password'); !!}<br>
        {!! Form::password('password_confirmation', array('class' => '')) !!}
    </div>
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

    <a href="{{URL::to('/channels/')}}"><button class="tablebutton" type="submit">Go back to channel</button></a>

@endsection