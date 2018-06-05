<h1>notification</h1>

<ul>

    <li>{{$notification->name}}</li>
    <li>{{$notification->text}}</li>

</ul>

<a href="{{URL::to('/notifications')}}"><button class="btn btn-primary" type="submit">go back to notifications</button></a>