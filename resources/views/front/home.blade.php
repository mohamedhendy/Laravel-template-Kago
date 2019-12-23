@extends('front.layout')
@php
$page = page('home');
$title = $page('title');
@endphp
@section('content')

@include('front.home.home-carousel')
@include('front.home.home-welcome')
<section class="third-section">
  <h3 class="text-center text-capitalize">{{$page('exhibition')}}</h3>
  <div class="slide-plugin">
    <div class="items-offers m-auto">
      <div class="autoplay" id="img-slider">
        <div class="img-slide">
          <img src="{{$page('exhibition-first-img')}}" alt="image" />
        </div>
        <div class="img-slide">
          <img src="{{$page('exhibition-second-img')}}" alt="image" />
        </div>
        <div class="img-slide">
          <img src="{{$page('exhibition-third-img')}}" alt="image" />
        </div>
        <div class="img-slide">
          <img src="{{$page('exhibition-forth-img')}}" alt="image" />
        </div>
        <div class="img-slide">
          <img src="{{$page('exhibition-fifth-img')}}" alt="image" />
        </div>
      </div>
    </div>
  </div>
</section>
@include('front.home.home-activity')
@include('front.home.home-form')
@endsection
