@extends('layouts.app_auth')

@section('content')
<body class="login">
    <div> 

      <div class="login_wrapper">
        <div class="animate form login_form">
           <a  class="site_titles"  >  <img src="{{asset('images/blueapple.png')}}" alt="..."style="width: 43% !important;  margin-left: 115px !important; margin-bottom:157px !important ;"></a>
          <section class="login_content">
            <h1>{{ __('Reset Password') }}</h1>
          
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div>
                    
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                           @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
             
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>

@endsection


