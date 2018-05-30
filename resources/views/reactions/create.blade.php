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
    {!! Form::label('channel_idchannel', 'channel_idchannel'); !!}
    {!! Form::text('channel_idchannel', '', array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::submit('submit!', array('class' => 'btn btn-default')); !!}
    {!! Form::close() !!}
</div>