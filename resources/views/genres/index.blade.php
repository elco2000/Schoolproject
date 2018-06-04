<h1>Genres</h1> <a href="{{URL::to('genres/create')}}"><button class="btn btn-primary" type="submit">Make new genre</button></a>

<ul>
        @foreach($genres as $genre)

                {{$genre->id}}
                        <a href="genres/{{$genre->id}}">{{$genre->name}}<br></a>
                <a href="{{URL::to('genres/'.$genre->id.'/edit')}}"><br><button class="btn btn-primary" type="submit">Edit</button></a>
                {{ Form::open(array('url' => 'genres/'.$genre->id,  'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}


        @endforeach
</ul>

<a href="{{URL::to('')}}"><button class="btn btn-primary" type="submit">go back to homepage</button></a>