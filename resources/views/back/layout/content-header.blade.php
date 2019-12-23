<nav class="navbar navbar-expand navbar-dark bg-dark">
  <div class="navbar-brand">
    <button type="button" class="btn btn-sidebar" data-toggle="sidebar">
      <i class="fa fa-bars"></i>
    </button>
    <span>{{ $title }}</span>
  </div>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <form action="{{ route('auth.signout') }}" method="POST">@csrf
        <button type="submit" class="btn btn-link">
          {!! $site('signout-icon') !!}
        </button>
      </form>
    </li>
  </ul>
</nav>
