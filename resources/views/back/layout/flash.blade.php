@php
$infos = array_filter(array_merge([session('info')], [session('message')]));
$errors = array_filter(array_merge([session('error')], $errors->all()));
$successes = array_filter(array_merge([session('success')], [session('status')]));
$warnings = array_filter([session('warning')]);
@endphp
@foreach ($infos as $message)
  <div class="alert alert-info alert-dismissible fade show" role="alert">{{ $message }}</div>
@endforeach
@foreach ($errors as $message)
  <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}</div>
@endforeach
@foreach ($successes as $message)
  <div class="alert alert-success alert-dismissible fade show" role="alert">{{ $message }}</div>
@endforeach
@foreach ($warnings as $message)
  <div class="alert alert-warning alert-dismissible fade show" role="alert">{{ $message }}</div>
@endforeach
