@php
$site = page('back-layout');
$user = request()->user();
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $direction }}">
<head>
@include('back.layout.meta')
@include('back.layout.styles')
@include('back.layout.scripts')
</head>
<body class="{{ $direction }}">
  <div class="app">
    <div class="app-sidebar thin-scrollbar">
      <div class="sidebar-header bg-dark">
        @include('back.layout.sidebar-header')
      </div>
      <div class="sidebar-nav">
        @include('back.layout.sidebar-nav')
      </div>
    </div>
    <div class="app-content">
      <div class="content-header">
        @include('back.layout.content-header')
        @include('back.layout.breadcrumb')
      </div>
      <div class="content-body thin-scrollbar">
        <div class="container-fluid">
          @include('back.layout.flash')
          @yield('content')
        </div>
      </div>
    </div>
  </div>
</body>
</html>
