@extends('layouts.master')

@section('content')
    <h1>Permissions</h1>
    <a href="{{ URL::to('users') }}"><button class="tablebutton" type="submit">Users</button></a>
    <a href="{{ URL::to('roles') }}"><button class="tablebutton" type="submit">Roles</button></a>



    <table class="normaltabel">
        <tr class="normaltr">
            <th>Id</th>
            <th>Permissions</th>
            <th></th>
            <th></th>
        </tr>

        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Dropdown</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="{{URL::to('genres')}}">Genres</a>
                <a href="{{URL::to('notificationtypes')}}">Notificationtypes</a>
                <a href="{{URL::to('users')}}">Users</a>
                <a href="{{URL::to('reactions')}}">Reactions</a>
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

        @foreach($permissions as $permission)
            <tr class="normaltr">
                <td>{{$permission->id}}</td>
                <td>{{$permission->name}}</td>
                <td><a href="{{URL::to('permissions/'.$permission->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
                <td>{{ Form::open(array('url' => 'permissions/'.$permission->id,  'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                    {{ Form::close() }}</td>
            </tr>

        @endforeach

    </table>
    <a href="{{URL::to('permissions/create')}}"><button class="tablebutton" type="submit">Add Permission</button></a>


@endsection