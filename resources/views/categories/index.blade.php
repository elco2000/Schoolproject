<h1>Categories</h1> <a href="{{URL::to('categories/create')}}"><button class="btn btn-primary" type="submit">Make new category</button></a>

<ul>
        @foreach($categories as $category)

                <h3>{{$category->id}}
                        <a href="categories/{{$category->id}}">{{$category->name}}<br></a></h3>
                <li> {{$category->description}}<br></li>
                <a href="{{URL::to('categories/'.$category->id.'/edit')}}"><br><button class="btn btn-primary" type="submit">Edit</button></a>
                {{ Form::open(array('url' => 'categories/'.$category->id,  'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}


        @endforeach
</ul>

<a href="{{('genres')}}">List Genres</a>
