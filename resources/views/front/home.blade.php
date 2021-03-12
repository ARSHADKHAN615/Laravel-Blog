@extends('front.layout.layout')	
@section('page_title','Home')
@section('page_name',"My Blog")
@section('content')

@foreach ($results as $item)   
<div class="post-preview">
  <a href="{{url('/post/'.$item->slug)}}">
    <h2 class="post-title">
       {{$item->title}}
    </h2>
    <h3 class="post-subtitle">
      {{$item->short_desc}}
    </h3>
  </a>
  <p class="post-meta"> 
   Posted on  {{$item->post_date}}</p>
  </div>
  <hr>
  @endforeach
  <div class="clearfix">
    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
  </div>
@endsection