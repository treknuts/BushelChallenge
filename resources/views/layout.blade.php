<html>
    <head>
        <title>@yield('title', 'Pokedex')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        @section('header')
            <div class='jumbotron' style="background-color: #F2BC23">
            
                <h1>{{ $title ?? '' }}</h1>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #4e342e">
                <a class="navbar-brand" href="/">
                    <img src="{{url('/images/pokeball.png')}}" width="30" height="30" alt="Pokeball"></img>
                </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link {{ Request::path() === 'pokedex' ? 'current_page_item' : '' }}" href="/pokedex">Pokedex</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::path() === 'lookup' ? 'current_page_item' : '' }}" href="/lookup">Find a Pokemon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::path() === 'captured' ? 'current_page_item' : '' }}" href="/captured">Captured Pokemon</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-center position-ref full-height">
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        @show
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>