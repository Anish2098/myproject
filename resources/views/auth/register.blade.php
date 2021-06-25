  @extends('layouts.app_auth')

@section('content')
<body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">

           <a  class="site_titles"  >  <img src="{{asset('images/blueapple.png')}}" alt="..."style="width: 43% !important;  margin-left: 115px !important; margin-bottom:157px !important ;"></a>
          
          <section class="login_content">
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <h1>Create Account</h1>
               <div>
                <input id="name" type="text" placeholder="Enter Your Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div>
                <input id="email" placeholder="Enter Your Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div>
                  <input id="password" placeholder="Enter Your Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div>
                <input id="password-confirm" placeholder="Confirm Your Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>

              <div>
                <label>Accept Term&conditions</label>
                <br><input id="term"  type="checkbox" required>
              </div>
               
              <div class="mt-2">
                <button class="btn btn-primary btn-block mt-4" type="submit" >Register</button> 
                
                               
                        <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member?
                  <a href="{{ route('login') }}" class="btn btn-primary">Login here</a>
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

 
 
