@foreach ([
  'google'    => 'fab fa-google',
  'vimeo'     => 'fab fa-vimeo-v',
  'linkedin'  => 'fab fa-linkedin-in',
  'rss'       => 'fas fa-rss',
  'twitter'   => 'fab fa-twitter',
  'facebook'  => 'fab fa-facebook-f',
  'snapchat'  => 'fab fa-snapchat',
  'instagram' => 'fab fa-instagram',
] as $key => $class)
  @if (!empty($link = $site("$key-link", 'social')))
    <div class="d-inline-block">
      <a target="_blank" rel="nofollow noopener noreferrer" href="{{ url($link) }}">
        <i class="{{ $class }}"></i>
      </a>
    </div>
  @endif
@endforeach
