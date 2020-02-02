<html>
<body>
    @extends('layout')
    @section('content')
        <h3>Pokedex!</h3>
        <div class="container">
        @foreach ($pokedex as $pokemon)
            <p><a href="{{ route('pokemon', ['id' => $pokemon->id]) }}">{{ $pokemon->name }}</a></p>
        @endforeach
        </div>
        {{ $pokedex->links() }}
    @endsection
</body>
</html>