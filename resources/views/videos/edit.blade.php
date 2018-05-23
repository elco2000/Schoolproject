{!! Form::open(array('url' => 'videos/'.$video->id, 'method' => 'PATCH')) !!}
{!! Form::token() !!}

<div class="form-group">
    {!! Form::label('title', ('title')); !!}
    {!! Form::text('title', $video->title, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('description', ('description')); !!}
    {!! Form::textarea('description', $video->description, array('class' => 'form-control', 'rows' => '3')) !!}
</div>
<div class="form-group">
    {!! Form::label('videoUrl', ('videoUrl')); !!}
    {!! Form::url('videoUrl', $video->videoUrl, array('class' => 'form-control', 'rows' => '1')) !!}
</div>
<div class="form-group">
    {!! Form::submit('Submit!', array('class' => 'btn btn-default')); !!}
    {!! Form::close() !!}
</div>