@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'categories/'.$category->id, 'method' => 'PATCH')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('name', 'name'); !!}<br>
        {!! Form::text('name', $category->name, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'description'); !!}<br>
        {!! Form::textarea('description', $category->description, array('class' => 'form-control', 'rows' => '3')) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Submit!', array('class' => 'tablebutton')); !!}
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

    <a href="{{URL::to('/categories/')}}"><button class="tablebutton" type="submit">Go back to categories</button></a>

    @endsection
