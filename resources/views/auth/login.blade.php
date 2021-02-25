@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card bg-warning mb-3">
                <div class="card-body">
                <img src="images\hello.png" class="img-fluid" alt="">
                    <p class="text-justify font-weight-normal">"Smart phones and social media expand our universe. We can connect with others or collect information easier and faster than ever."</p>
                </div>

        </div>
            </div>
    <div class="col-6">
        <div class="card bg-white mb-3 ">
             <div class="card-header bg-info">
                 <h2 class="text-center text-white">Welcome</h2>
             </div>
             <div class="card-body">
             <h5 class="card-title text-center font-weight-bold">User Login</h5>
             <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email" class=" col-form-label text-center">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="password" class="col-form-label text-center">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
                </label>
                </div>
                <div class="mb-0 ">
                            <div class="col-md-8 offset-md-4 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
            </div>   
        </div>
    </div>
  
    </div>
</div>
@endsection