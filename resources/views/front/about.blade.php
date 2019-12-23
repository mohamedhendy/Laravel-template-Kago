@extends('front.layout')
@php
$page = page('about');
$title = $page('title');
@endphp
@section('content')
<section class="about-page">
  <div class="first-section">
    <h1 class="text-center">{{ $page( 'title', 'about') }}</h1>
  </div>
  <div class=""></div>
  <section class="slider-section">
    <div class="slide-plugin">
      <div class="items-offers m-auto">
        <div class="autoplay" id="img-slider">
          <div class="img-slide">
            <img src="{{$page('school-first-img')}}" alt="image" />
          </div>
          <div class="img-slide">
            <img src="{{$page('school-second-img')}}" alt="image" />
          </div>
          <div class="img-slide">
            <img src="{{$page('school-third-img')}}" alt="image" />
          </div>
          <div class="img-slide">
            <img src="{{$page('school-forth-img')}}" alt="image" />
          </div>
          <div class="img-slide">
            <img src="{{$page('school-fifth-img')}}" alt="image" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="content-section">
    <div class="container">
      <h3 class="text-center">{{$page('title', 'vision')}}</h3>
      <div class="content-value m-auto">
        <div class="about-section-content president-text py-4 px-3 m-auto">
          {{$page('excerpt','President')}}
        </div>
      </div>
    </div>
  </section>
  <section class="content-section">
    <div class="container">
      <h3 class="text-center">{{$page('title', 'message')}}</h3>
      <div class="content-value m-auto">
        <div class="about-section-content president-text py-4 px-3 m-auto">
          {{$page('excerpt','President')}}
        </div>
      </div>
    </div>
  </section>
  <section class="content-section">
    <div class="container">
      <h3 class="text-center">{{$page('title', 'strategy')}}</h3>
      <div class="content-value m-auto">
        <div class="about-section-content president-text py-4 px-3 m-auto">
          {{$page('excerpt','President')}}
        </div>
      </div>
    </div>
  </section>
  <section class="content-section">
    <div class="container">
      <h3 class="text-center">{{$page('speech', 'president')}}</h3>
      <div class="content-value d-md-flex justify-content-center m-auto">
        <div class="about-section-content president-text py-5 px-3">
          {{$page('excerpt','President')}}
        </div>
        <div class="president-img">
          <img class="w-100 h-100" src="{{$page('president-picture')}}" alt="image">
        </div>
      </div>

    </div>
  </section>
</section>
@endsection
