@extends('layouts.master')

@section('content')

    {!! Form::open(array('url' => 'reactions/'.$reaction->id, 'method' => 'PATCH')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('text', 'text'); !!}
        {!! Form::textarea('text', $reaction->text, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('account_idaccount', 'ID Account'); !!}
        {!! Form::text('account_idaccount', $reaction->account_idaccount, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('channel_id', 'ID Channel'); !!}
        {!! Form::text('channel_id', $reaction->channel_idchannel, array('class' => 'form-control')) !!}
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
