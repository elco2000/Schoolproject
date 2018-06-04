<h1>Categories</h1>

<ul>
    @foreach($categories as $category)
                <li><a href="categories/{{$category->id}}">Name: {{$category->name}}</a></li>
        <li>Description: {{$category->description}}</li>
        <br>
    @endforeach
</ul>

<a href="{!! url('genres'); !!}">List Genres</a>
