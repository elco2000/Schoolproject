<table class="normaltabel">
    <tr class="normaltr">
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th></th>
        <th></th>
    </tr>

@forelse($categories as $category)

        <tr class="normaltr">
            <td>{{$category->id, 'DESC'}}</td>
            <td><a href="categories/{{$category->id}}">{{$category->name}}</a></td>
            <td> {{$category->description}}</td>
            <td><a href="{{URL::to('categories/'.$category->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
            <td>{{ Form::open(array('url' => 'categories/'.$category->id,  'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                {{ Form::close() }}</td>

        </tr>


@empty
    <span>No results</span>

@endforelse
</table>