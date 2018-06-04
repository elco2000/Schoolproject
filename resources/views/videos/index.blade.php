


<h1>Videos</h1>

<ul>
        @foreach($videos as $video)
                <li>Title: {{$video->title}}</li>
                <li>Description: {{$video->description}}</li>
                <li>Video Url: {{$video->videoUrl}}</li>
                <li>Channel: {{$video->channel_id}}</li>
                <br>
        @endforeach
</ul>