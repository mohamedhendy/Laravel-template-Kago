@extends('auth.layout')
@php
$page = page('forgotten');
$title = $page('title');
@endphp
@section('content')
<div class="page-sign">
  <div class="container-sign">
    <div class="card">
      <div class="card-header">
        <img src="{{ url(asset($page('logo'))) }}">
      </div>
      <div class="card-body">
        <form method="POST">@csrf
          <div class="form-group">
            <label>{{ $page('email') }}</label>
            <input type="email" name="email" class="form-control" required autofocus>
          </div>
          <div class="form-group d-flex">
            <button type="submit" class="btn btn-primary ml-auto">
              {{ $page('submit') }}
            </button>
          </div>
        </form>
        @include('auth.flash')
      </div>
      <div class="card-footer d-flex justify-content-around">
        <a href="{{ route('auth.signin') }}">{{ $page('signin') }}</a>
        <a href="{{ route('auth.signup') }}" class="ml-auto">
          {{ $page('signup') }}
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
