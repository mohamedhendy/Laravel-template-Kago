<section class="second-section text-center pt-5">
  <div class="container">
    <div class="welcom-section">
      <h1 class="pt-5 ">{{$page('title','welcome')}}</h1>
      <p class="mb-5 attribute text-center">{{$page('excerpt', 'welcome')}}</p>
      <a href="{{route('auth.signup')}}"
        class="mb-5">{{$page('button','register')}}</a>
    </div>
  </div>
  <div class="about-section">
    <h3 class="text-capitalize">{{$page('about')}}</h3>
    <div class="about-schools d-md-flex justify-content-center">
      <img class="first-img" src="{{$page('about-first-img')}}" alt="image">
      <img class="second-img" src="{{$page('about-second-img')}}" alt="image">
    </div>
  </div>
</section>
