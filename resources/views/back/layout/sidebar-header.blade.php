<div class="d-flex">
  <div class="flex-grow-1">
    <img src="{{ asset('images/avatar-placeholder.png') }}" class="avatar">
    <div class="username">
      <span>{{ $user->name }}</span>
      <small>{{ $user->email }}</small>
    </div>
  </div>
  <div class="d-flex flex-column">
    @foreach (urlsForOtherLocales() as $locale => $url)
      <a class="btn btn-outline-light" href="{{ url($url) }}">
        {{ $site("switch-to-$locale") }}
      </a>
    @endforeach
  </div>
</div>
