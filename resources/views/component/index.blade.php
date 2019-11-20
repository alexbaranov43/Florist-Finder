@extends('layouts.main')
@section('content')
<a href="/" style="font-size:20px"><i class="fas fa-home"></i></a>
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <h1 style="font-family: 'Dancing Script', cursive">Search for Local Florists!</h1>
    </div>
  </div>
  <div class="row">
    <div class="md-form mt-0 col-md-5">
    {{-- Form For Location --}}
      <form action="{{ url('/results') }}"  method="POST">
      {{ csrf_field() }}
        <input id="location" class="form-control" type="text" name="location" placeholder="Search By Location" aria-label="Search" required>
        <br>
        <button type="submit" class="btn btn-primary edit-form-btn" title="Search">Search</button>
      </form>
    </div>
  </div>
</div>
<script>
</script>
@yield('results')