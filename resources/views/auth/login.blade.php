@extends('layouts.app_auth')

@section('content')
<body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
           <a  class="site_titles"  >  <img src="{{asset('images/blueapple.png')}}" alt="..."style="width: 43% !important;  margin-left: 125px !important; margin-bottom:157px !important ;"></a>
          <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <h1>Sing In To Your Account</h1>
              <div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
               <div>
               <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                </div>
              <div>
                <button class="btn btn-primary submit" type="submit" >Log in</button> 
                
                                @if (Route::has('password.request'))
                                    <a class="reset_pass" href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                @endif
                        <div class="clearfix"></div>

             <div class="separator">
                <p class="change_link">Don't Have Account?
                  <a href="{{ route('register') }}" class=" btn btn-primary "> Register Here </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>        
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>

@endsection
