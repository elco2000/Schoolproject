@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'categories', 'method' => 'POST')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}<br>
        {!! Form::text('name', '', array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description'); !!}<br>
        {!! Form::textarea('description', '', array('class' => 'form-control', 'rows' => '3')) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Submit', array('class' => 'tablebutton')); !!}<br>
        {!! Form::close() !!}
    </div>

    <a href="{{URL::to('/categories')}}"><button class="btn btn-primary" type="submit">go back to categories</button></a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <a href="{{URL::to('/categories/')}}"><button class="tablebutton" type="submit">Go back to Categories</button></a>

@endsection
