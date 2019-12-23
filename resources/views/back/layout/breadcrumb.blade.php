@isset($breadcrumbs)
  <nav>
    <ol class="breadcrumb">
      @foreach ($breadcrumbs as $title => $link)
        @if ($title)
          <li class="breadcrumb-item">
            @if ($link)
              <a href="{{ $link }}">{{ $title }}</a>
            @else
              <span>{{ $title }}</span>
            @endif
          </li>
        @endif
      @endforeach
    </ol>
  </nav>
@endisset
