@extends('front.layout.layout')	
@section('page_title',$results[0]->title)
@section('page_name',$results[0]->title)
@section('content')
{{$results[0]->long_desc}}
@endsection