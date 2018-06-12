@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'roles', 'method' => 'POST')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}<br>
        {!! Form::text('name', '', ['class' => '']) !!}
    </div>

    <h5><b>Assign Permissions</b></h5>

    <div class='form-group'>
        @foreach ($permissions as $permission)
            {{ Form::checkbox('permissions[]',  $permission->id ) }}
            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

        @endforeach
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