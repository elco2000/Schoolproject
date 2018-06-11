@extends('layouts.master')

@section('content')
    <h1>Videos</h1>


    <table class="normaltabel">
        <tr class="normaltr">
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>URL Video</th>
            <th>ID Channel</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($videos as $video)
            <tr>
                <td>{{$video->id}}</td>
                <td><a href="reactions/{{$video->id}}">{{$video->title}}</a></td>
                <td>{{$video->description}}</td>
                <td>{{$video->videoUrl}}</td>
                <td>{{$video->channel_id}}</td>
                <td><a href="{{URL::to('videos/'.$video->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'videos/'.$video->id,  'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                    {{ Form::close() }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{URL::to('videos/create')}}"><button class="tablebutton" type="submit">Post a new Video</button></a>
@endsection
