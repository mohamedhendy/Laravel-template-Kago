@extends('front.layout')
@php
$page = page('news');
$title = $page('title');
@endphp
@section('content')
<div class="container py-5 news">
  <h1 class="text-center">{{ $page('title', 'main-news') }}</h1>
  <div class="row">
    <div class="col-md-6 border">
      <div class="pt-2">
        <div>
          <img class="w-100" src="{{$page('medium-image','news')}}" alt="">
        </div>
      </div>
      <h4 class="text-right py-2 text-center">{{$page('title', 'news')}}</h4>
      <div class="p-3">
        <p>
          {{$page('excerpt','main-news')}}
        </p>
      </div>
    </div>
    <div class="col-md-6 ">
      <div class="p-2 border">
        <div>
          <img class="w-100" src="{{$page('medium-image','news')}}" alt="">
        </div>
        <div class="row py-2">
          <div class="col-md-3">
            <h4 class="text-right py-2">{{$page('title', 'news')}}</h4>
          </div>
          <div class="col-md-8">
            <p>{{$page('excerpt','sub-news')}}</p>
          </div>
        </div>
      </div>
      <div class="p-2 border">
        <div>
          <img class="w-100" src="{{$page('medium-image','news')}}" alt="">
        </div>
        <div class="row py-2">
          <div class="col-md-3">
            <h4 class="text-right py-2">{{$page('title', 'news')}}</h4>
          </div>
          <div class="col-md-8">
            <p>{{$page('excerpt','sub-news')}}</p>
          </div>
        </div>
      </div>
      <div class="p-2 border">
        <div>
          <img class="w-100" src="{{$page('medium-image','news')}}" alt="">
        </div>
        <div class="row py-2">
          <div class="col-md-3">
            <h4 class="text-right py-2">{{$page('title', 'news')}}</h4>
          </div>
          <div class="col-md-8">
            <p>{{$page('excerpt','sub-news')}}</p>
          </div>
        </div>
      </div>
      <div class="p-2 border">
        <div>
          <img class="w-100" src="{{$page('medium-image','news')}}" alt="">
        </div>
        <div class="row py-2">
          <div class="col-md-3">
            <h4 class="text-right py-2">{{$page('title', 'news')}}</h4>
          </div>
          <div class="col-md-8">
            <p>{{$page('excerpt','sub-news')}}</p>
          </div>
        </div>
      </div>
      <div class="p-2 border">
        <div>
          <img class="w-100" src="{{$page('medium-image','news')}}" alt="">
        </div>
        <div class="row py-2">
          <div class="col-md-3">
            <h4 class="text-right py-2">{{$page('title', 'news')}}</h4>
          </div>
          <div class="col-md-8">
            <p>{{$page('excerpt','sub-news')}}</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
