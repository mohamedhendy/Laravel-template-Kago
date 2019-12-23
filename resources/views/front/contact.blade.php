@extends('front.layout')
@php
$page = page('contact');
$title = $page('title');
@endphp
@section('content')

<div class="container contact-page">
  <h1 class="text-center py-5">{{$page('title','contact')}}</h1>
  <div class="forms-inputs p-5  m-auto">
    <div class="register-form">
    <form action="">
        @csrf
        <div class="form-group text-center">
          <ul class="list-unstyled felids px-0">
            <label for="full-name">{{$page('name','contact')}}</label>
            <li class="d-flex">
              <i class="{{$page('user-icon')}}"></i>
              <input type="text" required class="form-control pl-5  mb-4 mb-4"
                id="full-name">
            </li>
            <label for="email">{{$page('email','contact')}}</label>
            <li class="d-flex">
              <i class="{{$page('mail-icon')}}"></i>
              <input type="email" required id="email" class="form-control pl-5  mb-4">
            </li>
            <label for="message">{{$page('message','contact')}}</label>
            <li class="d-flex">
              <textarea id="message" class="form-control" rows="10"></textarea>
            </li>
            <li class="action-btn">
              <input type="submit" type="submit"
                class="d-inline-block"value="{{$page('button','send')}}">
            </li>
          </ul>
        </div>
      </form>
    </div>
  </div>
  <div class="forms-inputs p-5  m-auto social-links">
    <ul class="list-unstyled">
    <li class="mb-3"> <a href="{{$page('place','location')}}" target="_blank" rel="noopener noreferrer">
          {!! $page('map-icon') !!}
          {{$page('address', 'contact')}}</a>
      </li>
      <li class="mb-3">
        <a href="tel:{{$page('phone') }}" target="_blank"
          rel="noopener noreferrer">
          {!! $page('phone-icon', 'contact')!!}
          {{$page('phone-number', 'contact')}}
        </a>
      </li>
      <li class="mb-3">
        {!! $page('email-icon')!!}
        <a href="mailto:{{$page('email') }}" target="_blank"
          rel="noopener noreferrer">
          {{$page('email', 'contact')}}
        </a>
      </li>
    </ul>
  </div>
  <div class="container mb-4">
    <div class="forms-inputs   m-auto">
      <iframe class="embed-responsive embed-responsive-16by9"
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7587959.00299332!2d44.254835291844536!3d22.527677995347613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1570995635813!5m2!1sen!2seg"
        width="600" height="450" frameborder="0" style="border:0;"
        allowfullscreen=""></iframe>
    </div>
  </div>
</div>
@endsection
