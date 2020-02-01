<html>
    <head>
        <title>@yield('title', 'Pokedex')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        @section('header')
            <div class='jumbotron'>
                <h1>{{ $title ?? '' }}</h1>
            </div>
        @show
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>