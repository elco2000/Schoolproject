<div class="blog-post">
    <h2 class="blog-post-title"><b>Category Name: </b><br>{{$category->name}}</h2>
    <p>{{$category->description}}</p>

    {{--<h2><b>Genres: </b></h2>--}}
    {{--@foreach($category->genres as $genre)--}}
        {{--<p>{{$genre->name}}</p>--}}
    {{--@endforeach--}}
    {{--<br>--}}
    {{--<h2><b>Channels: </b></h2>--}}
    {{--@foreach ($category->channels as $channel)--}}
        {{--<p>{{$channel->name}}</p>--}}
    {{--@endforeach--}}
</div>

<a href="{{URL::to('/categories')}}"><button class="btn btn-primary" type="submit">go back to categories</button></a>