@extends('layouts.main')
@section('content')
<div class="col-md-5">
  <h1>Search for Local Florists!</h1>
</div>
<div class="md-form mt-0 col-md-5">
<form action="{{ url('/results') }}"  method="POST">
{{ csrf_field() }}
  <input class="form-control" type="text" name="location" placeholder="Search By Location" aria-label="Search">
  <br>
  <button type="submit" class="btn btn-primary edit-form-btn" title="Publish">Publish</button>
</form>
</div>
@yield('results')