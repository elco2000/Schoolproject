

<h1>Videos</h1>

<ul>

        <li>{{$video->title}}</li>
        <li>{{$video->description}}</li>
        <li>{{$video->videoUrl}}</li>
        <li>{{$video->channel_id}}</li>

</ul>

<a href="{{URL::to('/videos')}}"><button class="btn btn-primary" type="submit">go back to videos</button></a>