@extends('layouts.main')
@section('content')
<div class="col-md-5">
  <h1>Search for Local Florists!</h1>
</div>
<div>
  <?php $YAK = env("YAK");
  ?>
</div>
<div class="md-form mt-0 col-md-5">
<form action="">
<div id='secret' value="{{$YAK}}"></div>
  <input class="form-control" type="text" placeholder="Search By Location" aria-label="Search">
  <br>
  <input class='btn btn-primary' type="submit">
</form>
</div>

@yield('results')