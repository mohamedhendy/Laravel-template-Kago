@php $otherLocalesUrls = urlsForOtherLocales(); @endphp
<header class="mainHeader">
  <div class="topBar">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          @include('front.layout.social')
        </div>
        <div class="col-md-7 info">
          <div class="mail">
            <a target="_blank" rel="nofollow noopener noreferrer" href="mailto:{{
              $site('email') }}">{{ $site('email') }}</a>
          </div>
          <div class="contactInfo">
            <span>@lang('admin.mobile')&nbsp;:&nbsp;</span>
            <a target="_blank" rel="nofollow noopener noreferrer" href="mailto:{{
              $site('phone') }}">{{ $site('phone') }}</a>
          </div>
          <div class="langSwitch">
            @foreach ($otherLocalesUrls as $locale => $url)
              <a href="{{ $url }}">@lang("web.language-$locale")</a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
