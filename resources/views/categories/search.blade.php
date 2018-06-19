@extends('layouts.master')
@section('content')

    {{--<h1>Categories</h1>--}}

    <form action="{{ route('categories.search') }}" method="POST" class="ajaxSearch">
        <input type="search" name="query" placeholder="Type something to search" autocomplete="off">
        <input type="submit" value="Search">
    </form>

    <table id="results" class="normaltabel">
        {{--<div id="results" class="normaltabel">--}}
            {{--<span>Loading...</span>--}}
        {{--</div>--}}
    </table>
    <a href="{{URL::to('categories/create')}}">
        <button class="tablebutton" type="submit">Post a new category</button>
    </a>

@endsection

@section('scripts')
    <script>
        var searchTimer = null;

        $('body').on('submit', 'form.ajaxSearch', function (e) {
            var form = $(this);

            ajaxSearch(form);
            return false;
        });

        $('body').on('keyup', 'form.ajaxSearch input[type=search]', function () {
            var form = $(this).closest('form.ajaxSearch');

            if (form) {
                if (searchTimer !== null) clearInterval(searchTimer);

                searchTimer = setTimeout(function () {
                    ajaxSearch(form);
                }, 800);
            }
        });

        $(document).ready(function () {
            ajaxSearch($('form.ajaxSearch'));
        });

        var ajaxSearch = function (form) {
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
