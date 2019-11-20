@extends('component.index')
@section('results')
{{-- Button To Clear Results --}}
<div class="container">
  <a href="/index" class="btn btn-danger"><button class="btn btn-danger">Clear Results</button></a>
  <br><br>
</div>
{{-- Display For Each Individual Result --}}
@foreach ($results->businesses as $business)
<div class="container">
  <div class="row">
      {{-- Image --}}
      <div class="col-sm-4 col-md-4 ">
        <img src="{{$business->image_url}}" alt="" height='250' width="250" style="border-radius: 15px">
      </div>
      <div class="col-sm-6 col-md-6 ">
        <div class="row">
          <div class="col-sm-6 col-md-6 ">
            {{-- Name --}}
            <p>{{$business->name}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5 col-md-5 ">
            {{-- Phone Number --}}
            <i class="fas fa-phone"></i> <a href="tel:{{$business->phone}}">{{$business->phone}}</a>
            <br>
                  {{-- Link to Yelp --}}
            <a target="_blank" href="{{$business->url}}" class="btn btn-info">View On Yelp</a>
          </div>
        </div>
    </div>
  </div>
</div>
<br>
@endforeach
@endsection