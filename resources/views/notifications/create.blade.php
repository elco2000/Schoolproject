@extends('layouts.master')

@section('content')

{!! Form::open(array('url' => 'notifications', 'method' => 'POST')) !!}
{!! Form::token() !!}

<div class="form-group">
    {!! Form::label('name', ('Name')); !!}<br>
    {!! Form::text('name', '', array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('text', ('Text')); !!}<br>
    {!! Form::textarea('text', '', array('class' => 'form-control', 'rows' => '3')) !!}
</div>
<div class="missingform">
    {!! Form::label('notificationtype_id', ('notificationtype_id')); !!}<br>
    {!! Form::textarea('notificationtype_id', '2', array('class' => 'form-control', 'rows' => '3')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Submit', array('class' => 'tablebutton')); !!}
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

<a href="{{URL::to('/notifications/')}}"><button class="tablebutton" type="submit">Back</button></a>
@endsection
