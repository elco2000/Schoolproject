@extends('layouts.master')

@section('content')
    <h1>Notification Types</h1>


    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
            <a href="{{URL::to('genres')}}">Genres</a>
            <a href="{{URL::to('notificationtypes')}}">Notificationtypes</a>
            <a href="{{URL::to('permissions')}}">Permissions</a>
            <a href="{{URL::to('users')}}">Users</a>
            <a href="{{URL::to('roles')}}">Role</a>
            <a href="{{URL::to('videos')}}">Videos</a>
        </div>
    </div>

    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>

    <table class="normaltabel">
        <tr class="normaltr">
            <th>ID</th>
            <th>Name</th>
            <th>ID Account</th>
            <th>ID Channel</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($reactions as $reaction)
            <tr>
                <td>{{$reaction->id}}</td>
                <td><a href="reactions/{{$reaction->id}}">{{$reaction->name}}</a></td>
                <td>{{$reaction->account_idaccount}}</td>
                <td>{{$reaction->channel_id}}</td>
                <td><a href="{{URL::to('reactions/'.$reaction->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'reactions/'.$reaction->id,  'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                    {{ Form::close() }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{URL::to('reactions/create')}}"><button class="tablebutton" type="submit">Post a new Reaction</button></a>
@endsection
