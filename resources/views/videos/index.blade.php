<h1>Videos</h1> <a href="{{URL::to('videos/create')}}"><button class="btn btn-primary" type="submit">Make new videos</button></a>


<h1>Videos</h1>

<ul>
@foreach($videos as $video)

    <h2>{{$video->id}}
        <a href="videos/{{$video->id}}">{{$video->title}}<br></a></h2>
   <li> {{$video->description}}<br></li>
        <li>{{$video->videoUrl}}</li>
        <li>Channel: {{$video->channel_id}}</li>
    <a href="{{URL::to('videos/'.$video->id.'/edit')}}"><br><button class="btn btn-primary" type="submit">Edit</button></a>
    {{ Form::open(array('url' => 'videos/'.$video->id,  'class' => 'pull-right')) }}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}


@endforeach
</ul>

<a href="{{URL::to('')}}"><button class="btn btn-primary" type="submit">go back to homepage</button></a>