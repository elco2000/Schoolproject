<table class="normaltabel2">
    <tr class="normaltr">
        <th>Id</th>
        <th>Name</th>
        <th></th>
        <th></th>

    </tr>

    @forelse($notificationtypes as $notificationtype)





        <tr class="normaltr">
            <td>{{$notificationtype->id}}</td>
            <td><a href="notificationtypes/{{$notificationtype->id}}">{{$notificationtype->name}}</a></td>
            {{--<li>{{$notificationtype->identertainer}}</li>--}}
            <td><a href="{{URL::to('notificationtypes/'.$notificationtype->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
            <td>{{ Form::open(array('url' => 'notificationtypes/'.$notificationtype->id,  'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                {{ Form::close() }}</td>
        </tr>


    @empty
        <span>No results</span>

    @endforelse
</table>