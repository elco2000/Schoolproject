@extends('layouts.master')

@section('content')
    <h1>Users</h1>
    <a href="{{ URL::to('permissions') }}"><button class="tablebutton" type="submit">Permissions</button></a>
    <a href="{{ URL::to('roles') }}"><button class="tablebutton" type="submit">Roles</button></a>



    <table class="normaltabel">
        <tr class="normaltr">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>User Roles</th>
            <th></th>
            <th></th>
        </tr>


        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Dropdown</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="{{URL::to('categories/create')}}">Categories</a>
                <a href="{{URL::to('channels/create')}}">Channels</a>
                <a href="{{URL::to('genres/create')}}">Genres</a>
                <a href="{{URL::to('notifications/create')}}">Notifications</a>
                <a href="{{URL::to('notificationtypes/create')}}">Notificationtypes</a>
                <a href="{{URL::to('permissions/create')}}">Permissions</a>
                <a href="{{URL::to('reactions/create')}}">Reactions</a>
                <a href="{{URL::to('roles/create')}}">Role</a>
                <a href="{{URL::to('videos/create')}}">Videos</a>
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

        @foreach($users as $user)
            <tr class="normaltr">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td> {{$user->email}}<br></td>
                <td>{{$user->roles()->pluck('name')->implode(' ') }}<br></td>
                {{--<li>{{$channel->identertainer}}</li>--}}
                <td><a href="{{URL::to('users/'.$user->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'users/'.$user->id,  'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                    {{ Form::close() }}</td>
            </tr>

        @endforeach

    </table>
    <a href="{{URL::to('users/create')}}"><button class="tablebutton" type="submit">Add User</button></a>


@endsection