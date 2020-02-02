<html>
    <head>
        <title>@yield('title', 'Pokedex')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        @section('header')
            <div class='jumbotron' style="background-color: #F2BC23">
                <h1>{{ $title ?? '' }}</h1>
                <nav class="navbar navbar-expand-lg navbar-dark bg-light" style="background-color: #4e342e">
                    <a class="navbar-brand" href="#">
                        <img src="{{url('/images/pokeball.png')}}" width="30" height="30" alt="Pokeball">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="{{ Request::path() === '/' ? 'current_page_item' : '' }}" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::path() === 'pokedex' ? 'current_page_item' : '' }}" href="/pokedex">Pokedex</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::path() === 'lookup' ? 'current_page_item' : '' }}" href="/lookup">Pokemon Lookup</a>
                        </li>
                    </ul>
                </nav>
            </div>
        @show
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>