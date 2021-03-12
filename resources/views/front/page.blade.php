@extends('front.layout.layout')	
@section('page_title',$results[0]->name)
@section('page_name',$results[0]->name)
@section('content')
{{$results[0]->description}}
@endsection