<html>
<body>
    @extends('layouts.app')
    @section('content')
        <h3>Pokedex!</h3>
        @foreach ($pokedex as $pokemon)
            <p>{{ $pokemon->name }}</p>
        @endforeach
    @endsection
</body>
</html>