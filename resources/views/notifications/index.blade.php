<h1>notifications</h1> <a href="{{URL::to('notifications/create')}}"><button class="btn btn-primary" type="submit">Make new notification</button></a>


<ul>
    @foreach($notifications as $notification)

        <h4>{{$notification->id}}
            <a href="notifications/{{$notification->id}}">{{$notification->name}}<br></a></h4>
        <li> {{$notification->text}}<br></li>

        <a href="{{URL::to('notifications/'.$notification->id.'/edit')}}"><button class="btn btn-primary" type="submit">Edit</button></a>
        {{ Form::open(array('url' => 'notifications/'.$notification->id,  'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
        {{ Form::close() }}


    @endforeach
</ul>

<a href="{{('notificationtypes')}}">List of notification types</a>
