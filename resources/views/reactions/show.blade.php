<div class="blog-post">
    <h2 class="blog-post-title">{{$reaction->text}}</h2>
    <p>{{$reaction->account_idaccount}}</p><br>
    <p>{{$reaction->channel_id}}</p>

</div>

<a href="{{URL::to('/reactions')}}"><button class="btn btn-primary" type="submit">go back to reactions</button></a>