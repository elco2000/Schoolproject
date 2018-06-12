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
        <header class="project-header">
            <a href="{{url('/')}}"><img class="header-image" src="{{asset('images/logo.png')}}" alt="Header Image"></a>
            <div class="header-titlebox">
                <h1 class="header-title">Free Entertainment</h1>
            </div>
        </header>
        <nav class="project-topnav">
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('categories')}}">Categories</a></li>
                <li><a href="{{url('channels')}}">Channels</a></li>
                {{--<li><a href="{{url('genres')}}">Genres</a></li>--}}
                <li><a href="{{url('notifications')}}">Notifications</a></li>
                {{--<li><a href="{{url('reactions')}}">Reactions</a></li>--}}
                {{--<li><a href="{{url('videos')}}">Videos</a></li>--}}
            </ul>
            <button><a href="#">Log In</a></button>
            <button><a href="#">Register</button>
        </nav>
        <aside class="project-aside">
            <div class="advert">
                <a href="#">
                    <img class="advert-img" src="{{asset('images/advertisement.png')}}" alt="Advert Image">
                    <h4 class="advert-title">Advert Title</h4>
                </a>
            </div>
            <div class="advert">
                <a href="#">
                    <img class="advert-img" src="{{asset('images/advertisement.png')}}" alt="Advert Image">
                    <h4 class="advert-title">Advert Title</h4>
                </a>
            </div>
            <div class="advert">
                <a href="#">
                    <img class="advert-img" src="{{asset('images/advertisement.png')}}" alt="Advert Image">
                    <h4 class="advert-title">Advert Title</h4>
                </a>
            </div>
            <div class="advert">
                <a href="#">
                    <img class="advert-img" src="{{asset('images/advertisement.png')}}" alt="Advert Image">
                    <h4 class="advert-title">Advert Title</h4>
                </a>
            </div>
            <div class="advert">
                <a href="#">
                    <img class="advert-img" src="{{asset('images/advertisement.png')}}" alt="Advert Image">
                    <h4 class="advert-title">Advert Title</h4>
                </a>
            </div>
            <div class="advert">
                <a href="#">
                    <img class="advert-img" src="{{asset('images/advertisement.png')}}" alt="Advert Image">
                    <h4 class="advert-title">Advert Title</h4>
                </a>
            </div>
        </aside>
        <main role="main">
            @yield('content')
        </main>
        <footer class="project-footer">
            <ul class="footer-links">
                <li><a href="#">To Be Added</a></li>
                <li><a href="#">To Be Added</a></li>
                <li><a href="#">To Be Added</a></li>
                <li><a href="#">To Be Added</a></li>
            </ul>
            <ul class="footer-links">
                <li><a href="#">To Be Added</a></li>
                <li><a href="#">To Be Added</a></li>
                <li><a href="#">To Be Added</a></li>
                <li><a href="#">To Be Added</a></li>
            </ul>
            <ul class="footer-contact">
                <h5>Contact</h5>
                <p>Address: Sportlaan 15 Spijkenisse (NL)</p>
                <p>Email: support@entertainment4free.com</p>
                <p>Tel: (31+) 06-12345678</p>
            </ul>
        </footer>
    </div>
</body>

</html>
