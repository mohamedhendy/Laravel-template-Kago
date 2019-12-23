@extends('front.layout')
@php
$page = page('gallery');
$title = $page('title');
@endphp
@section('content')
<h1 class="text-center">{{ $page('title', 'images') }}</h1>
<div class="container">
  <div class="row gallery">
    <div class="col-12">
      <img class="w-100" src="{{$page('image','large')}}" alt="">
    </div>
    <div class="col-md-3">
      <img class="pd-1 w-100" src="{{$page('image','small')}}" alt="image">
    </div>
    <div class="col-md-3">
      <img class="pd-1 w-100" src="{{$page('image','small')}}" alt="image">
    </div>
    <div class="col-md-3">
      <img class="pd-1 w-100" src="{{$page('image','small')}}" alt="image">
    </div>
    <div class="col-md-3">
      <img class="pd-1 w-100" src="{{$page('image','small')}}" alt="image">
    </div>
    <div class="col-md-6">
      <img class="pd-1 w-100" src="{{$page('image','medium')}}" alt="image">
    </div>
    <div class="col-md-6">
      <img class="pd-1 w-100" src="{{$page('image','medium')}}" alt="image">
    </div>
    <div class="col-md-3">
      <img class="pd-1 w-100" src="{{$page('image','small')}}" alt="image">
    </div>
    <div class="col-md-3">
      <img class="pd-1 w-100" src="{{$page('image','small')}}" alt="image">
    </div>
    <div class="col-md-3">
      <img class="pd-1 w-100" src="{{$page('image','small')}}" alt="image">
    </div>
    <div class="col-md-3">
      <img class="pd-1 w-100" src="{{$page('image','small')}}" alt="image">
    </div>
  </div>
</div>
@endsection
