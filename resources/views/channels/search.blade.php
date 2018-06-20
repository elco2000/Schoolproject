@extends('layouts.master')
@section('content')


    <h1>Channels</h1>



    <form action="{{ route('channels.search') }}" method="POST" class="ajaxSearch">
        <input type="search" name="query" placeholder="Type something to search" autocomplete="off">
        <input type="submit" value="Search">
    </form>

    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
            <a href="{{URL::to('users')}}">Users</a>
            <a href="{{URL::to('genres')}}">Genres</a>
            <a href="{{URL::to('notificationtypes')}}">Notificationtypes</a>
            <a href="{{URL::to('permissions')}}">Permissions</a>
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



        {{--<table class="normaltabel">--}}
        <article id="results" class="index-articles">
            <span>Loading...</span>
        </article>
        {{--</table>--}}
        <a href="{{URL::to('channels/create')}}"><button class="tablebutton" type="submit">Post a new Channel</button></a>
    </div>







@endsection

    @section('scripts')
    <script>
        var searchTimer = null;

        $('body').on('submit', 'form.ajaxSearch', function (e) {
            var form = $(this);

            ajaxSearch(form);
            return false;
        });

        $('body').on('keyup', 'form.ajaxSearch input[type=search]', function() {
            var form = $(this).closest('form.ajaxSearch');

            if(form) {
                if(searchTimer !== null) clearInterval(searchTimer);

                searchTimer = setTimeout(function() {
                    ajaxSearch(form);
                }, 800);
            }
        });

        $(document).ready(function() {
            ajaxSearch($('form.ajaxSearch'));
        });

        var ajaxSearch = function(form) {
            $.ajax({
                url: form.attr('action') + '/',
                type: form.attr('method'),
                method: form.attr('method'),
                data: {"query": form.find('input[name=query]').val(), "_token": "{{ csrf_token() }}"}
            }).done(function (res) {
                $('#results').html(res);
            }).fail(function (res) {
                alert('Failed search');
            });
        }
    </script>



    @endsection
