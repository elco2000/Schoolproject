


<h1>Videos</h1>

<ul>
    @foreach($videos as $video)
        <li>{{$video->title}}</li>
        <li>{{$video->description}}</li>
        <li>{{$video->videoUrl}}</li>
    @endforeach
</ul>