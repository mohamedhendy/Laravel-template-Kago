@php $site = page('layout'); @endphp
<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $direction }}">
<head>
@include('front.layout.meta')
@include('front.layout.styles')
@include('front.layout.scripts')
</head>
<body class="{{ $direction }}">
<div class="root">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light menu py-0">
      @include('front.layout.menu')
    </nav>
  </header>
  <aside class="alerts">@include('front.layout.flash')</aside>
  <main class="content">@yield('content')</main>
  <footer>
    <div class="footer">
      @include('front.layout.footer')
    </div>
    <div class="footer-bottom">
      <div class="container d-md-flex text-center">
          <div class="social ">@include('front.layout.social')</div>
          <div class="copyright c-right ml-auto text-white">
            {!! $site('copyright') !!}
          </div>
      </div>
    </div>
  </footer>
</div>
</body>
</html>
