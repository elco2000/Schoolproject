<h1>notificationtype Types</h1> <a href="{{URL::to('notificationtypes/create')}}"><button class="btn btn-primary" type="submit">Make new notificationtype</button></a>

<ul>
        @foreach($notificationtypes as $notificationtype)

                <h4>{{$notificationtype->id}}
                        <a href="notificationtypes/{{$notificationtype->id}}">{{$notificationtype->name}}<br></a></h4>


                <a href="{{URL::to('notificationtypes/'.$notificationtype->id.'/edit')}}"><button class="btn btn-primary" type="submit">Edit</button></a>
                {{ Form::open(array('url' => 'notificationtypes/'.$notificationtype->id,  'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}


        @endforeach
</ul>

<a href="{{URL::to('')}}"><button class="btn btn-primary" type="submit">go back to homepage</button></a>