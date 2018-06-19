<table class="normaltabel2">
    <tr class="normaltr">
        <th>Id</th>
        <th>Name</th>
        <th></th>
        <th></th>
    </tr>

    @forelse($genres as $genre)





        <tr class="normaltr">
            <td>{{$genre->id}}</td>
            <td><a href="genres/{{$genre->id}}">{{$genre->name}}</a></td>
            {{--<li>{{$genre->identertainer}}</li>--}}
            <td><a href="{{URL::to('genres/'.$genre->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
            <td>{{ Form::open(array('url' => 'genres/'.$genre->id,  'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                {{ Form::close() }}</td>
        </tr>


    @empty
        <span>No results</span>

    @endforelse
</table>