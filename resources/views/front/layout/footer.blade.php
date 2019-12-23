<div class="container">
  <div class="row">
    <div class="col-md-3 col-sm-6">
      <ul class="list-unstyled">
        <li class="mb-3">
           <a href="{{$site('address','location')}}"
            target="_blank" rel="noopener noreferrer">
            {!! $site('map-icon') !!}
            {{$site('address', 'contact')}}
          </a>
        </li>
        <li class="mb-3">
          <a href="tel:{{
            $site('phone') }}" target="_blank" rel="noopener noreferrer"> {!!
            $site('phone-icon', 'contact')!!}
            {{$site('phone-number', 'contact')}}
          </a>
        </li>
        <li class="mb-3">
          <a href="mailto:{{
            $site('email') }}" target="_blank" rel="noopener noreferrer"> {!!
            $site('email-icon')!!} {{$site('email', 'contact')}}

          </a>
        </li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-6">
      <ul class="list-unstyled">
        <li class="mb-3"> <a  rel="noopener noreferrer"
            href="{{route('front.home')}}">
            {{$site('home-name', 'menu')}}</a>
        </li>
        <li class="mb-3"> <a  rel="noopener noreferrer"
            href="{{route('front.about')}}">
            {{$site('about-name','menu')}}</a></li>
        <li class="mb-3"> <a  rel="noopener noreferrer"
            href="{{route('front.registration')}}">
            {{$site('registration-name','menu')}}</a></li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-6">
      <ul class="list-unstyled">
        <li class="mb-3"> <a  rel="noopener noreferrer"
            href="{{route('front.news')}}">
            {{$site('news-name','menu')}}</a></li>
        <li class="mb-3"> <a  rel="noopener noreferrer"
            href="{{route('front.jobs')}}">
            {{$site('jobs-name', 'menu')}}</a></li>
        <li class="mb-3"> <a  rel="noopener noreferrer"
            href="{{route('front.polls')}}">
            {{$site('polls-name', 'menu')}}</a></li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-6">
      <ul class="list-unstyled">
        <li class="mb-3"> <a  rel="noopener noreferrer"
            href="{{route('front.gallery')}}">
            {{$site('gallery-name', 'menu')}}</a>
        </li>
        <li class="mb-3"> <a  rel="noopener noreferrer"
            href="{{route('front.jobs-application')}}">
            {{$site('jobs-application-name', 'menu')}}</a></li>
        <li class="mb-3"> <a  rel="noopener noreferrer"
            href="{{route('front.contact')}}">
            {{$site('contact-name', 'menu')}}</a></li>
      </ul>
    </div>
  </div>
  <div class="text-center footer-log">
    <a class="reg-button" href="{{route('auth.signup')}}">{{$site('register')}}</a>
    <a class="login-button" href="{{route('auth.signin')}}"> {{$site('login')}}</a>
  </div>
</div>
