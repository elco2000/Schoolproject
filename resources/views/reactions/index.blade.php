<h1>Reactions</h1> <a href="{{URL::to('reactions/create')}}"><button class="btn btn-primary" type="submit">Make new reaction</button></a>

<ul>
        
                @foreach($reactions as $reaction)

                        <li>{{$reaction->id}}
                                <a href="reactions/{{$reaction->id}}">{{$reaction->text}}<br></a></li>
                        <li><label>id-account</label> {{$reaction->account_idaccount}}<br></li>
                        <li><label>id-channel</label> {{$reaction->channel_id}}</li>
                        <a href="{{URL::to('reactions/'.$reaction->id.'/edit')}}"><br><button class="btn btn-primary" type="submit">Edit</button></a>
                        {{ Form::open(array('url' => 'reactions/'.$reaction->id,  'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}


                @endforeach
        
</ul>

<a href="{{URL::to('')}}"><button class="btn btn-primary" type="submit">go back to homepage</button></a>