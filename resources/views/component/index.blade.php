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
      <form action="{{ url('/results') }}"  method="GET">
      {{ csrf_field() }}
      <input id="location" class="form-control" type="text" name="location" placeholder="neighborhood, city, state, or zip code" value='' aria-label="Search" required>
      <input type="hidden" id="longitude" name="longitude" value>
        <br>
        <button type="submit" class="btn btn-primary edit-form-btn" title="Search">Search</button>
        <button class="btn btn-info" onclick="getLocation()">Use Location</button> <br>
      </form>
    </div>
  </div>
</div>
<div id="secret">

</div>



<script>
var locale = document.getElementById('location');
var longitude = document.getElementById('longitude');
function getLocation() {
    var secret = document.getElementById('secret');
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        secret.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    locale.setAttribute('name', 'latitude')
    locale.value = position.coords.latitude;
    longitude.value = position.coords.longitude;
}
</script>
@yield('results')