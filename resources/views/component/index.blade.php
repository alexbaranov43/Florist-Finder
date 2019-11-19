@extends('layouts.main')
@section('content')
<div>
  <h1>Search for Local Florists!</h1>
</div>
<div>
  <?php $YAK = env("YAK");
  ?>
</div>
<div class="md-form mt-0">
<div id='secret' value="{{$YAK}}"></div>
  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
</div>