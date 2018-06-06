    {!! Form::open(array('url' => 'notificationtypes/'.$notificationtype->id, 'method' => 'PATCH')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('name', 'name'); !!}
        {!! Form::text('name', $notificationtype->name, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Submit!', array('class' => 'btn btn-default')); !!}
        {!! Form::close() !!}
    </div>

    <a href="{{URL::to('/notificationtypes')}}"><button class="btn btn-primary" type="submit">go back to notificationtypes</button></a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
