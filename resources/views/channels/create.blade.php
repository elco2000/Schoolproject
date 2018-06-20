@extends('layouts.master')

@section('content')

{!! Form::open(array('url' => 'channels', 'method' => 'POST')) !!}
{!! Form::token() !!}

<div class="">
    {!! Form::label('name', 'Name'); !!}<br>
    {!! Form::text('name', '', array('class' => '')) !!}
</div>
<div class="">
    {!! Form::label('logoUrl', 'Web URL Logo'); !!}<br>
    {!! Form::text('logoUrl', '', array('class' => '')) !!}
</div>
<div class="">
    {!! Form::label('channelUrl', 'Web URL YouTube/Twitch Channel'); !!}<br>
    {!! Form::text('channelUrl', '', array('class' => '')) !!}
</div>
<div class="missingform">
    {!! Form::label('user_id', 'user_id'); !!}
    {!! Form::text('user_id', '4', array('class' => '')) !!}
</div>

<div class=''>
    @foreach ($categories as $category)
        {{ Form::checkbox('categories[]',  $category->id ) }}
        {{ Form::label($category->name, ucfirst($category->name)) }}<br>
    @endforeach
</div>

<div class="">
    {!! Form::submit('Submit', array('class' => 'tablebutton')); !!}
    {!! Form::close() !!}
</div>

<a href="{{URL::to('/channels/')}}"><button class="tablebutton" type="submit">Go back to channel</button></a>

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
