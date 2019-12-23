@extends('front.layout')
@php
$page = page('jobs-application');
$title = $page('title');
@endphp
@section('content')
<div class="container job-apply">

  <h1 class="text-center py-5">{{$page('title','apply')}}</h1>
  <div class="forms-inputs m-auto">
    <div class="register-form">
      <form action="">
        @csrf
        <div class="form-group text-center">
          <ul class="list-unstyled px-0 felids">
            <label for="full-name">{{$page('full-name','apply')}}</label>
            <li class="d-flex">
              <i class="{{$page('user-icon')}}"></i>
              <input required type="text" class="form-control pl-5  mb-4 mb-4"
                id="full-name">
            </li>
            <label for="phone-number">{{$page('phone-number','apply')}}</label>
            <li class="d-flex">
              <i class="{{$page('phone-icon')}}"></i>
              <input required type="number" id="phone-number"
                class="form-control pl-5  mb-4">
            </li>
            <label for="email">{{$page('email','apply')}}</label>
            <li class="d-flex">
              <i class="{{$page('mail-icon')}}"></i>
              <input required type="email" id="email"
                class="form-control pl-5  mb-4">
            </li>
            <label for="cv">{{$page('cv','apply')}}</label>
            <li class="d-flex flex-column">
              <textarea id="cv" class="form-control" rows="10"></textarea>
              <div class="pt-2 position-relative">
                <div class="position-absolute text-center w-100 upload">
                  <i class="{{$page('file-icon')}}"></i>
                </div>
                <input required type="file"
                  class="form-control pl-5  mb-4 hide-input" id="cv">
              </div>
            </li>
            <label for="work">{{$page('experiences','apply')}}</label>
            <li class="d-flex">
              <textarea required id="work" class="form-control"
                rows="10"></textarea>
            </li>
            <li class="action-btn">
              <input type="submit" class="d-inline-block"
                value="{{$page('button','apply')}}">
            </li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
