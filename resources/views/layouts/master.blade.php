<!doctype html>
<html lang="en">

<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('scss/style.css')}}" rel="stylesheet">
    <link href="{{asset('scss/styles.css')}}" rel="stylesheet">
</head>

<body>
    {{--<header class="blog-header py-3">--}}
        {{--<div class="row flex-nowrap justify-content-between align-items-center">--}}
            {{--<div class="col-4 pt-1">--}}
            {{--<a class="text-muted" href="{{url('/')}}">Home</a>--}}
            {{--</div>--}}
            {{--@if (Route::has('login'))--}}
            {{--<div class="top-right links">--}}
            {{--@auth--}}
            {{--<a href="{{ url('/') }}">Home</a>--}}
            {{--@else--}}
            {{--<a href="{{ route('login') }}">Login</a>--}}
            {{--<a href="{{ route('register') }}">Register</a>--}}
            {{--@endauth--}}
            {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</header>--}}
    <div class="container">
        @include('layouts.header')
        <nav class="project-topnav">
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('categories')}}">Categories</a></li>
                <li><a href="{{url('channels')}}">Channels</a></li>
                {{--<li><a href="{{url('genres')}}">Genres</a></li>--}}
                <li><a href="{{url('notifications')}}">Notifications</a></li>
                {{--<li><a href="{{url('reactions')}}">Reactions</a></li>--}}
                {{--<li><a href="{{url('videos')}}">Videos</a></li>--}}

            @if (Route::has('login'))
                    @auth
                                <li>
                                    @role('Admin') {{-- Laravel-permission blade helper --}}
                                    <a href="{{url('users')}}"><button><i class=""></i>Admin</button></a>
                                    @endrole
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <button> Logout </button>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                    @else
                        <li><a href="{{ route('login') }}"><button>Login</button></a></li>
                        <li><a href="{{ route('register') }}"><button>Register</button></a></li>
                    @endauth
            @endif
            </ul>
        </nav>
        <aside class="project-aside">
            <div class="advert">
                <a href="https://www.youtube.com/" target="_blank">
                    <img class="advert-img" src="http://newcare4youbewind.nl/newcare4youbewind.nl/wp-content/uploads/2016/12/YouTube-icon-full_color.png" alt="YouTube Image">
                    <h4 class="advert-title">YouTube</h4>
                </a>
            </div>
            <div class="advert">
                <a href="https://www.twitch.tv/" target="_blank">
                    <img class="advert-img" src="https://www.geekinsider.com/wp-content/uploads/2015/01/twitch_logo_purple.jpg" alt="Twitch Image">
                    <h4 class="advert-title">Twitch.tv</h4>
                </a>
            </div>
            <div class="advert">
                <a href="https://www.patreon.com/" target="_blank">
                    <img class="advert-img" src="https://i.ytimg.com/vi/_SvllpB5myU/maxresdefault.jpg" alt="Patreon Image">
                    <h4 class="advert-title">Patreon</h4>
                </a>
            </div>
            <div class="advert">
                <a href="https://obsproject.com/" target="_blank">
                    <img class="advert-img" src="https://i0.wp.com/www.freevideoeditingsoftwares.com/wp-content/uploads/2017/07/open-broadcaster-software-review-obs-studio-review.png?resize=660%2C330" alt="Advert Image">
                    <h4 class="advert-title">OBS Studio</h4>
                </a>
            </div>
            {{--<div class="advert">--}}
                {{--<a href="#">--}}
                    {{--<img class="advert-img" src="{{asset('images/advertisement.png')}}" alt="Advert Image">--}}
                    {{--<h4 class="advert-title">Advert Title</h4>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="advert">--}}
                {{--<a href="#">--}}
                    {{--<img class="advert-img" src="{{asset('images/advertisement.png')}}" alt="Advert Image">--}}
                    {{--<h4 class="advert-title">Advert Title</h4>--}}
                {{--</a>--}}
            {{--</div>--}}
        </aside>
        <main role="main">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>

</html>
