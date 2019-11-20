@extends('component.index')
@section('results')

@foreach ($results->businesses as $business)
<div style="margin-left: 300px">
<img src="{{$business->image_url}}" alt="" height='250' width="250">
<p>{{$business->name}}</p>
<a href="{{$business->phone}}">{{$business->phone}}</a>
<a target="_blank" href="{{$business->url}}">View On Yelp</a>
</div>
<br>
@endforeach
@endsection