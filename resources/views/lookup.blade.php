@extends('layout')

@section('content')
<h4>Search for Pokemon by ID</h4>
<form method="GET" action="{{ route('pokemon', [$pid ?? '']) }}">
  <fieldset>
  @csrf
    <div class="form-group">
      <label for="pid">ID</label>
      <input style="width: 80px" type="number" class="form-control" name="pid" aria-describedby="pidHelp">
      <small id="pidHelp" class="form-text text-muted">ID of the Pokemon you wish to find</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-primary">Clear</button>
  </fieldset>
</form>
@endsection