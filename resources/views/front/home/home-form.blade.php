<section class="contact-section">
  <div class="container">
    <div
      class="contact-form d-md-flex justfy-content-center m-auto pt-5 pb-5 mb-5">
      <div
        class="guid-lines d-flex flex-column align-items-center w-50 p-5 text-center">
        <div class="new-reg">
          <button  id="register-user"
            class="active">{{$page('button', 'register')}}<button>
          <p>
            {{$page('excerpt','register')}}
          </p>
        </div>
        <div class="pt-2">
          <button
            id="login-user">{{$page('button', 'login')}}<button>
          <p>
            {{$page('excerpt','login')}}
          </p>
        </div>
      </div>
      <div class="forms-inputs w-50 p-4">
        <div class="register-form ">
          <form action="" method="post">
            @csrf
            <div class="form-group text-center">
              <ul class="list-unstyled">
                <li class="d-flex">
                  <i class="{{$page('user-icon')}}"></i>
                  <input required type="text"
                    class="form-control pl-5  mb-4 mb-4">
                </li>
                <li class="d-flex">
                  <i class="{{$page('phone-icon')}}"></i>
                  <input required type="number" class="form-control pl-5  mb-4">
                </li>
                <li class="d-flex">
                  <i class="{{$page('mail-icon')}}"></i>
                  <input required type="email" class="form-control pl-5  mb-4">
                </li>
                <li class="d-flex">
                  <i class="{{$page('pass-icon')}}"></i>
                  <input required type="password"
                    class="form-control pl-5  mb-4">
                </li>
                <li>
                  <div class="action-btn d-flex flex-column  m-auto">
                    <input
                      class="text-uppercase d-block  mb-2 follow-title p-2 border-radius mt-5 rounded text-center w-100"
                      type="submit" class="d-inline-block"
                      value="{{$page('button','register')}}">
                  </div>
                </li>
              </ul>
            </div>
          </form>
        </div>
        <div class="login-form hide-form">
          <form action="" method="post">
            @csrf
            <div class="form-group text-center">
              <ul class="list-unstyled">
                <li class="d-flex">
                  <i class="{{$page('mail-icon')}}"></i>
                  <input required type="email" class="form-control pl-5  mb-4">
                </li>
                <li class="d-flex">
                  <i class="{{$page('pass-icon')}}"></i>
                  <input required type="password"
                    class="form-control pl-5  mb-4">
                </li>
                <li>
                  <div class="action-btn d-flex flex-column m-auto">
                    <input
                      class="text-uppercase d-block  mb-2 follow-title p-2 border-radius mt-5 rounded text-center w-100"
                      type="submit" class="d-inline-block"
                      value="{{$page('button','login')}}">
                  </div>
                </li>
              </ul>
            </div>
          </form>
        </div>
        <div class="follow-div d-flex flex-column  m-auto w-50 ">
          <div class="action-btn">
            <div class="text-uppercase d-block text-white follow-title p-2 border-radius mt-5 rounded text-center w-100"
               class="d-inline-block"
              >{{$page('button','follow')}}</div>
          </div>
          <ul class="list-unstyled d-block bg-white py-1 px-0 text-center">
            <li class="d-inline-block">
              <a href="">
                <i class="{{$page('facebook-icon')}}"></i></a>
            </li>
            <li class="d-inline-block">
              <a href=""><i class="{{$page('twitter-icon')}}"></i></a>
            </li>
            <li class="d-inline-block">
              <a href=""><i class="{{$page('google-icon')}}"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
