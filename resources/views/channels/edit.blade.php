@extends('layouts.master')

@section('content')

{!! Form::open(array('url' => 'channels/'.$channel->id, 'method' => 'PATCH')) !!}
{!! Form::token() !!}

<div class="form-group">
    {!! Form::label('name', 'Name'); !!}<br>
    {!! Form::text('name', $channel->name, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('logoUrl', 'logoUrl'); !!}<br>
    {!! Form::text('logoUrl', $channel->logoUrl, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('channelUrl', 'channelUrl'); !!}<br>
    {!! Form::text('channelUrl', $channel->channelUrl, array('class' => 'form-control')) !!}
</div>
<div class="missingform">
    {!! Form::label('identertainer', 'identertainer'); !!}
    {!! Form::text('identertainer', $channel->identertainer, array('class' => 'form-control')) !!}
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

<a href="{{URL::to('/channels/')}}"><button class="tablebutton" type="submit">Back</button></a>

    @endsection
