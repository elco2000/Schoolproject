@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'permissions/'.$permission->id, 'method' => 'PATCH')) !!}
    {!! Form::token() !!}

    <div class="">
        {!! Form::label('name', 'Permission Name'); !!}<br>
        {!! Form::text('name', $permission->name, array('class' => '')) !!}
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

    <a href="{{URL::to('/permissions/')}}"><button class="tablebutton" type="submit">Go back to permissions</button></a>

@endsection