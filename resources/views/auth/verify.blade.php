@extends('layouts.app_auth')

@section('content')
<body class="login">
    <div> 

      <div class="login_wrapper">
        <div class="animate form login_form">
           <a  class="site_titles"  >  <img src="{{asset('images/blueapple.png')}}" alt="..."style="width: 43% !important;  margin-left: 125px !important; margin-bottom:157px !important ;"></a>
          <section class="login_content">
            <h1>{{ __('Verify Your Email Address') }}</h1>
            <div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
               @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
            <form  method="POST" action="{{ route('verification.resend') }}">
                @csrf
               <button type="submit" class="btn btn-success">{{ __('click here to request another') }}</button>.
             
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>

@endsection

