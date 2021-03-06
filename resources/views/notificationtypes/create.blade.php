@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'notificationtypes', 'method' => 'POST')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('name', ('Name')); !!}<br>
        {!! Form::text('name', '', array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Submit', array('class' => 'tablebutton')); !!}
        {!! Form::close() !!}
    </div>

    <a href="{{URL::to('/notificationtypes')}}"><button class="btn btn-primary" type="submit">go back to notificationtypes</button></a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <a href="{{URL::to('/notificationtypes/')}}"><button class="tablebutton" type="submit">Back</button></a>
@endsection
