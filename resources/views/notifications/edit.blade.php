{!! Form::open(array('url' => 'notifications/'.$notification->id, 'method' => 'PATCH')) !!}
{!! Form::token() !!}

<div class="form-group">
    {!! Form::label('name', ('name')); !!}
    {!! Form::text('name', $notification->name, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('text', ('text')); !!}
    {!! Form::textarea('text', $notification->text, array('class' => 'form-control', 'rows' => '3')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Submit!', array('class' => 'btn btn-default')); !!}
    {!! Form::close() !!}
</div>

<a href="{{URL::to('/notifications')}}"><button class="btn btn-primary" type="submit">go back to notifications</button></a>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif