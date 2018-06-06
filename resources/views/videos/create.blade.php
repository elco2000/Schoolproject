{!! Form::open(array('url' => 'videos', 'method' => 'POST')) !!}
{!! Form::token() !!}

<div class="form-group">
    {!! Form::label('title', ('title')); !!}
    {!! Form::text('title', '', array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('description', ('description')); !!}
    {!! Form::textarea('description', '', array('class' => 'form-control', 'rows' => '3')) !!}
</div>
<div class="form-group">
    {!! Form::label('videoUrl', ('videoUrl')); !!}
    {!! Form::url('videoUrl', '', array('class' => 'form-control', 'rows' => '1')) !!}
</div>
<div class="form-group">
    {!! Form::label('channel_id', ('channel_id')); !!}
    {!! Form::url('channel_id', '', array('class' => 'form-control', 'rows' => '1')) !!}
</div>
<div class="form-group">
    {!! Form::submit('Submit!', array('class' => 'btn btn-default')); !!}
    {!! Form::close() !!}
</div>

<a href="{{URL::to('/videos')}}"><button class="btn btn-primary" type="submit">go back to videos</button></a>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif