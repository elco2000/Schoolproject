    {!! Form::open(array('url' => 'categories/'.$category->id, 'method' => 'PATCH')) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('name', 'description', 'genre_id'); !!}
        {!! Form::text('name', $category->name, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('description', $category->description, array('class' => 'form-control', 'rows' => '3')) !!}
    </div>
    <div class="form-group">
        {!! Form::text('genre_id', $category->genre_id, array('class' => 'form-control')) !!}
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
