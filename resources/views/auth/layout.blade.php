@php $site = page('auth-layout'); @endphp
<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $direction }}">
<head>
@include('auth.layout.meta')
@include('auth.layout.styles')
@include('auth.layout.scripts')
</head>
<body class="{{ $direction }}">
  @yield('content')
</body>
</html>
