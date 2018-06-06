{!! Form::open(array('url' => 'reactions', 'method' => 'POST')) !!}
{!! Form::token() !!}

<div class="form-group">
    {!! Form::label('text', 'text'); !!}
    {!! Form::textarea('text', '', array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('account_idaccount', 'account_idaccount'); !!}
    {!! Form::text('account_idaccount', '', array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('channel_id', 'channel_id'); !!}
    {!! Form::text('channel_id', '', array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::submit('submit!', array('class' => 'btn btn-default')); !!}
    {!! Form::close() !!}
</div>

<a href="{{URL::to('/reactions')}}"><button class="btn btn-primary" type="submit">go back to reactions</button></a>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif