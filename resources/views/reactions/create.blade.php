@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'reactions', 'method' => 'POST')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('text', 'Text'); !!}
        {!! Form::textarea('text', '', array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('account_idaccount', 'ID Account'); !!}
        {!! Form::text('account_idaccount', '', array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('channel_id', 'ID Channel'); !!}
        {!! Form::text('channel_id', '', array('class' => 'form-control')) !!}
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

    <a href="{{URL::to('/reactions/')}}"><button class="tablebutton" type="submit">Back</button></a>
@endsection
