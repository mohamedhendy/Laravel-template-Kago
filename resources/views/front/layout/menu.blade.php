@php
$menuItems = [
'home'             => route('front.home'),
'about'            => route('front.about'),
'contact'          => route('front.contact'),
'gallery'          => route('front.gallery'),
'home'             => route('front.home'),
'jobs'             => route('front.jobs'),
'news'             => route('front.news'),
'polls'            => route('front.polls'),
'registration'     => route('front.registration'),
'home'             => route('front.home'),
'about'            => route('front.about'),
'contact'          => route('front.contact'),
'gallery'          => route('front.gallery'),
'home'             => route('front.home'),
'jobs'             => route('front.jobs'),
'news'             => route('front.news'),
'polls'            => route('front.polls'),
'registration'     => route('front.registration'),
];
@endphp
<div class="container-fluid">
  <a class="navbar-brand text-center pb-0" href="#">
    <img src="{{ asset($site('logo')) }}">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbar-supported-content">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-supported-content">
    <ul class="navbar-nav px-0 w-100 m-auto">
    <ul class="navbar-nav m-auto center-menu ">
      @foreach ($menuItems as $item => $url)
      @if ($site("$item-enabled",'menu') ?? true)
      <li class="nav-item">
        <a href="{{ url($url) }}" class="nav-link {{ (Request::is($item)) ? 'active' : '' }}">
          <span class="name">{{ $site("$item-name",'menu') }}</span>
        </a>
      </li>
      @endif
      @endforeach
    </ul>
    <ul class="navbar-nav  plus-buttons">
      <li class="nav-item">
      <a href="{{route('auth.signin')}}"  class=" d-inline-block login-menu">
          <span class=" pt-1">{{ $site("home-login",'menu') }}</span>
        </a>
        <a href="{{route('auth.signup')}}"  class=" d-inline-block register-menu">
          <span class=" pt-1">{{ $site("home-signup",'menu') }}</span>
        </a>
      </li>
      <li class="nav-item">
        @foreach (urlsForOtherLocales() as $locale => $url)
          <a class="btn btn-link d-inline-block arabic-button" href="{{ url($url) }}">
            {{ $site("home-$locale",'menu') }}
          </a>
        @endforeach
      </li>
    </ul>
  </div>
</div>
