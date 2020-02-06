@extends('layout')

@section('content')
<h4>Search for a Pokemon by supplying their ID</h4>
<form method="GET" action="{{ action('PokemonController@show') }}">
@csrf
@method('GET')
  <div class="form-group">
    <label for="pid">ID</label>
    <input style="width: 80px" type="number" class="form-control" placeholder="1" name="pid" aria-describedby="pidHelp">
    <small id="pidHelp" class="form-text text-muted">ID of the Pokemon you wish to find</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-primary">Clear</button>
</form>
@endsection