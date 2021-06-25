@extends('layouts.app_auth')

@section('content')
<body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">

           <a  class="site_titles"  >  <img src="{{asset('images/blueapple.png')}}" alt="..."style="width: 43% !important;  margin-left: 115px !important; margin-bottom:157px !important ;"></a>
          
                 <section class="login_content">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                       <h1>Reset Password</h1>
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                       
                       <div>
                            <input id="password" placeholder="Enter New Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>

                          <div>
                             <input id="password-confirm" placeholder="Confirm New Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                        
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                         
                    </form>
                </div>
         </section>
        </div>

      </div>
    </div>
  </body>

@endsection
