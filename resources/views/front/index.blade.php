@extends('layouts.main')
@section('content')
    <div class="container-login100" style="background-image: url('public/images/bg.gif');">
        <div class="wrap-login100 p-t-190 p-b-30">
            <div class="text-center">
                <div class="align-content-center">
                    <img src="{{asset('public/images/logo/logo.png')}}" alt="Grace and Mercy">
                </div>
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title p-t-20 p-b-45">
						<h1>Staff Login</h1>
                        @include('inc._msg')
					</span>

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
                        <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" autofocus>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
                        @error('email')
                        <span class="invalid-feedback text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                        <input class="input100 @error('password') is-invalid @enderror" type="password" id="password" name="password" required autocomplete="current-password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                        @error('password')
                        <span class="invalid-feedback text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12 text-center">
                            <label for="remember_me" class="flex items-center">
                                <input type="checkbox" id="remember_me" name="remember" />
                                <span class="ml-2 text-white text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                    </div>
                    <div class="container-login100-form-btn p-t-10">
                        <input type="submit" value="Login" class="login100-form-btn bg-primary text-center">
                    </div>

                    <div class="text-center w-full p-t-25 p-b-230">
                        @if (Route::has('password.request'))
                            <a class="underline text-white text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection