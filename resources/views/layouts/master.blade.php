<!doctype html>
<html lang="en">

<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('scss/style.css')}}" rel="stylesheet">
</head>

<body>
<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="text-muted" href="#">Laravel Project</a>
        </div>
        </div>
    </div>
</header>
@yield('content')
</body>

</html>