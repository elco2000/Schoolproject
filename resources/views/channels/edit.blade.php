{!! Form::open(array('url' => 'channels/'.$channel->id, 'method' => 'PATCH')) !!}
{!! Form::token() !!}

<div class="form-group">
    {!! Form::label('name', 'Name'); !!}
    {!! Form::text('name', $channel->name, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('logoUrl', 'logoUrl'); !!}
    {!! Form::text('logoUrl', $channel->logoUrl, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('channelUrl', 'channelUrl'); !!}
    {!! Form::text('channelUrl', $channel->channelUrl, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('identertainer', 'identertainer'); !!}
    {!! Form::text('identertainer', $channel->identertainer, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::submit('submit!', array('class' => 'btn btn-default')); !!}
    {!! Form::close() !!}
</div>

<a href="{{URL::to('/channels')}}"><button class="btn btn-primary" type="submit">go back to channels</button></a>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif