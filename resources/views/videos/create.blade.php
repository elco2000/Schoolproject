@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'videos', 'method' => 'POST')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('title', ('Title')); !!}
        {!! Form::text('title', '', array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', ('Description')); !!}
        {!! Form::textarea('description', '', array('class' => 'form-control', 'rows' => '3')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('videoUrl', ('Web URL Video (embed only)')); !!}
        {!! Form::url('videoUrl', '', array('class' => 'form-control', 'rows' => '1')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('channel_id', ('ID Channel')); !!}
        {!! Form::text('channel_id', '', array('class' => 'form-control', 'rows' => '1')) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Submit', array('class' => 'btn btn-default')); !!}
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

    <a href="{{URL::to('/videos/')}}"><button class="tablebutton" type="submit">Back</button></a>
@endsection
