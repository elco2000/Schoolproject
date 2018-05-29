    {!! Form::open(array('url' => 'genres/'.$genre->id, 'method' => 'PATCH')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('name', 'name'); !!}
        {!! Form::text('name', $genre->name, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Submit!', array('class' => 'btn btn-default')); !!}
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
