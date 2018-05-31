<h1>Notification Types</h1>

<ul>
    @foreach($notificationtypes as $notificationtype)
        <li>{{$notificationtype->name}}</li>
        <br>
    @endforeach
</ul>
