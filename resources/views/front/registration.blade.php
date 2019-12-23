@extends('front.layout')
@php
$page = page('registration');
$title = $page('title');
@endphp
@section('content')
<div class="container jobs-applications">
  <h1 class="text-center">{{ $page('title', 'application') }}</h1>

  <div class="p-5 stipulations border">
    <h3 class="text-center">{{$page('title','registration')}}</h3>
    <div class="row">
      <div class="col-md-6">
        <ul class="list-unstyled">
          <li>{{$page('excerpt','registration')}}</li>
          <li>{{$page('excerpt','registration')}}</li>
          <li>{{$page('excerpt','registration')}}</li>
          <li>{{$page('excerpt','registration')}}</li>
          <li>{{$page('excerpt','registration')}}</li>
          <li>{{$page('excerpt','registration')}}</li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="list-unstyled">
          <li>{{$page('excerpt','registration')}}</li>
          <li>{{$page('excerpt','registration')}}</li>
          <li>{{$page('excerpt','registration')}}</li>
          <li>{{$page('excerpt','registration')}}</li>
          <li>{{$page('excerpt','registration')}}</li>
          <li>{{$page('excerpt','registration')}}</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
