<!DOCTYPE html>
<html lang="en">
<head>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat:400,700|Comfortaa:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bohdan Mykhalevych</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="/" class="navbar-brand">BLOG</a>
    <ul class="navbar-nav m-auto">

        <li class="nav-item">
            <a href="#about" class="nav-link">About Me</a>
        </li>
        <li class="nav-item">
            <a href="#main-section" class="nav-link">Posts</a>
        </li>
        <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
        </li>
        @if(Auth::id() == 1 )
        <li class="nav-item">
            <a href="/posts/create" class="nav-link">Create</a>
        </li>
            @endif
    </ul>
</nav>

<section id="header">

    <div class="container">

        @if(empty(Auth::user()->id))
            <p class="sign">
                <a href="/login" class="sign sign-link">Sing In</a>
                <a href="/register" class="sign sign-link">Sing Up</a>
            </p>
        @endif
        @if(!empty(Auth::user()->id))
            <p class="hello-user">
                Hello, {{Auth::user()->name}}.
            </p>
                <form action="/exit" method="GET" class="log-form">
                    <button class="btn btn-link log-butt" type="submit">Log Out</button>
                </form>
        @endif
        <h1> &#60;BLOG&#62; </h1>
        <hr>
        <p class="header-title">Hello. My name is Bohdan</p>
        <p class="header-title">and I'm a programmer.</p>
    </div>

</section>

@yield('content')

<!-- ----------------------------------FOOTER------------------------------- !-->

<section id="footer">
    <div class="contrainer text-center">
        <div class="copyrights">
            <a href="/cost">Costs Diary</a>
            <a href="/category">Categories</a>
            <p class="copyright">All rights reserved. © Bohdan Mykhalevych . 2019.</p>
        </div>
    </div>
</section>

</body>
</html>
