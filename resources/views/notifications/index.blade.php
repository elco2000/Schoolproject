<h1>Notificatons</h1>

<ul>
    @foreach($notifications as $notification)
        <li>Name: {{$notification->name}}</li>
        <li>Text: {{$notification->text}}</li>
        <li>Type: {{$notification->notificationtypes['name']}}
        </li>
        <br>
    @endforeach

</ul>

<a href="{!! url('notificationtypes'); !!}">List of notification types</a>
