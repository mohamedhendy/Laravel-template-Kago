@extends('front.layout')
@php
$page = page('polls');
$title = $page('title');
@endphp
@section('content')
<div class=" polls">
  <div class="container">
    <h1 class="text-center">{{ $page('title','system') }}</h1>
  </div>
  <div class="result">
    <div class="m-auto   w-50 question container ">
      <h3 class="text-center">{{$page('visit-count')}}</h3>
      <ul class="list-unstyled px-0">
        <li>
          <div class="row">
            <div class="col-md-4 col-sm-12"><label
                for="daily">{{$page('daily','visit')}}</label></div>
            <div class="col-2"><input type="radio" name="visit"  id="daily">
            </div>
            <div class="col-md-6 col-sm-10">
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%">
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-md-4 col-sm-12"><label
                for="week">{{$page('weekly','visit')}}</label></div>
            <div class="col-2"><input type="radio" name="visit" checked id="week">
            </div>
            <div class="col-md-6 col-sm-10">
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 35%">
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-md-4 col-sm-12"><label
                for="never">{{$page('never','visit')}}</label></div>
            <div class="col-2"><input type="radio" name="visit" id="never">
            </div>
            <div class="col-md-6 col-sm-10">
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%">
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection
