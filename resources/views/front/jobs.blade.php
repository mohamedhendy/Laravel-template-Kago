@extends('front.layout')
@php
$page = page('jobs');
$title = $page('title');
@endphp
@section('content')
<div class="jobs-body">
  <div class="container">
    <h1 class="text-center py-5">{{ $page('title', 'recruitment') }}</h1>
  </div>
  <div class="">
    <div class=" teacher-content py-3 my-3">
      <div class="container py-2">
        <div class="row">
          <div class="offset-md-1 offset-lg-2 col-md-4">
            <img class="w-100 h-100" src="{{$page('image','arabic-teacher')}}" alt="">
          </div>
          <div class="col-md-6">
            <div class="flex-column ">
              <h3 class="text-capitalize">{{$page('teacher','arabic')}}</h3>
              <p>{{$page('paragraph-arabic','excerpt')}}</p>
              <a href="{{route('front.jobs-application')}}">{{$page('button','apply')}}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" teacher-content py-2 my-3">
      <div class="container py-2">
        <div class="row">
          <div class="offset-md-1 offset-lg-2 col-md-4">
            <img class="w-100 h-100" src="{{$page('image','mathematics-teacher')}}"
              alt="">
          </div>
          <div class="col-md-6">
            <div class="flex-column ">
              <h3 class="text-capitalize">{{$page('teacher','mathematics')}}</h3>
              <p>{{$page('paragraph-mathematics','excerpt')}}</p>
            <a href="{{route('front.jobs-application')}}">{{$page('button','apply')}}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" teacher-content py-2 my-3">
      <div class="container py-2">
        <div class="row">
          <div class="offset-md-1 offset-lg-2 col-md-4">
            <img class="w-100 h-100" src="{{$page('image','chemistry-teacher')}}"
              alt="">
          </div>
          <div class="col-md-6">
            <div class="flex-column ">
              <h3 class="text-capitalize">{{$page('teacher','chemistry')}}</h3>
              <p>{{$page('paragraph-chemistry','excerpt')}}</p>
              <a href="{{route('front.jobs-application')}}">{{$page('button','apply')}}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
