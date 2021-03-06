@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'categories', 'method' => 'POST')) !!}
    {!! Form::token() !!}

    <div class="">
        {!! Form::label('name', 'Name'); !!}<br>
        {!! Form::text('name', '', array('class' => '')) !!}
    </div>
    <div class="">
        {!! Form::label('description', 'Description'); !!}<br>
        {!! Form::textarea('description', '', array('class' => '', 'rows' => '3')) !!}
    </div>
    <div class="">
        {!! Form::submit('Submit', array('class' => '')); !!}<br>
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

    <a href="{{URL::to('/categories/')}}"><button class="tablebutton" type="submit">Back</button></a>
@endsection
