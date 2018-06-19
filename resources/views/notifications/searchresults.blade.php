{{--<table class="normaltabel2">--}}
    {{--<tr class="normaltr">--}}
        {{--<th>Id</th>--}}
        {{--<th>Name</th>--}}
        {{--<th>text</th>--}}
        {{--<th></th>--}}
        {{--<th></th>--}}
    {{--</tr>--}}
    @forelse($notifications as $notification)
                    <article class="index-article">
                        <h4>{{$notification->name}}</h4>
                        <p>{{str_limit($notification->text)}}</p>
                        <a href="notifications/{{$notification->id}}" class="read-more">
                            <p>Read more...</p>
                        </a>
                    </article>

        {{--<tr class="normaltr">--}}
            {{--<td>{{$notification->id}}</td>--}}
            {{--<td><a href="notifications/{{$notification->id}}">{{$notification->name}}</a></td>--}}
            {{--<td>{{$notification->text}}<br></td>--}}

            {{--<li>{{$notification->identertainer}}</li>--}}

            {{--<td><a href="{{URL::to('notifications/'.$notification->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>--}}
            {{--<td>{{ Form::open(array('url' => 'notifications/'.$notification->id,  'class' => 'pull-right')) }}--}}
                {{--{{ Form::hidden('_method', 'DELETE') }}--}}
                {{--{{ Form::submit('Delete', array('class' => 'tablebutton')) }}--}}
                {{--{{ Form::close() }}</td>--}}
        {{--</tr>--}}


    @empty
        <span>No results</span>

    @endforelse
    {{--<a href="{{URL::to('notifications/create')}}"><button class="tablebutton" type="submit">Make a new Notification</button></a>--}}
{{--</table>--}}
