<table class="normaltabel2">
    <tr class="normaltr">
        <th>Id</th>
        <th>title</th>
        <th>description</th>
        <th>video link</th>
        <th>channel id</th>
        <th></th>
        <th></th>
    </tr>

    @forelse($videos as $video)

        <tr class="normaltr">
            <td>{{$video->id}}</td>
            <td><a href="videos/{{$video->id}}">{{$video->title}}</a></td>
            <td> {{$video->description}}</td>
            <td><a href="{{$video->videoUrl}}" target="_blank">video Link</a><br></td>
            <td><a href="{{$video->channel_id}}">channel id</a><br></td>
            {{--<li>{{$video->identertainer}}</li>--}}
            <td><a href="{{URL::to('videos/'.$video->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
            <td>{{ Form::open(array('url' => 'videos/'.$video->id,  'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                {{ Form::close() }}</td>
        </tr>


    @empty
        <span>No results</span>

    @endforelse
</table>