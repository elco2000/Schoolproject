<h1>Notificatons</h1>

<ul>
    @foreach($notifications as $notification)
        <li>{{$notification->name}}</li>
        <li>{{$notification->text}}</li>
        <br>
    @endforeach
</ul>

<a href="{{route('notificationtypes.index')}}">List of notification types</a>