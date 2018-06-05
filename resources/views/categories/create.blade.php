@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'categories', 'method' => 'POST')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('name', 'name'); !!}<br>
        {!! Form::text('name', '', array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'description'); !!}<br>
        {!! Form::textarea('description', '', array('class' => 'form-control', 'rows' => '3')) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Submit!', array('class' => 'tablebutton')); !!}<br>
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
