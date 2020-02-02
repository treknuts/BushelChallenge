@extends('layout')
@section('content')
<div class="container">
    <h3>{{ $pokemon['name'] }}</h3>
    <ul class="list-group">
        <li class="list-group-item"><strong>Types:</strong> {{ $pokemon['types'] }}</li>
        <li class="list-group-item"><strong>Height:</strong> {{ $pokemon['height'] }}</li>
        <li class="list-group-item"><strong>Weight:</strong> {{ $pokemon['weight'] }}</li>
        <li class="list-group-item"><strong>Abilities:</strong> {{ $pokemon['abilities'] }}</li>
        <li class="list-group-item"><strong>Egg Groups:</strong> {{ $pokemon['egg_groups'] }}</li>
        <li class="list-group-item"><strong>Stats:</strong> {{ $pokemon['stats'] }}</li>
        <li class="list-group-item"><strong>Genus:</strong> {{ $pokemon['genus'] }}</li>
        <li class="list-group-item"><strong>Description:</strong> {{ $pokemon['description'] }}</li>
</div>
@endsection