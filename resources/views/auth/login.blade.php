@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background: linear-gradient(135deg, #1e1e2f, #2b2b3c); height: 100vh;">
    <div class="row justify-content-center align-items-center" style="height: 100%;">
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 rounded-4 shadow-lg" style="background: rgba(30, 30, 48, 0.95); backdrop-filter: blur(10px); color: #f1f1f1;">
                <div class="card-header text-center text-white rounded-top-4" style="background-color: #4e73df;">
                    <h4>{{ __('Login') }}</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-4">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" 
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                       style="border-radius: 20px; background-color: #2f2f44; border: none; color: #fff;">
                                @error('email')
                                    <span class="invalid-feedback d-block text-danger mt-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="current-password"
                                       style="border-radius: 20px; background-color: #2f2f44; border: none; color: #fff;">
                                @error('password')
                                    <span class="invalid-feedback d-block text-danger mt-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input bg-dark border-secondary" type="checkbox" name="remember" id="remember"
                                           {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4 text-center">
                                <button type="submit" class="btn btn-primary btn-block px-4 py-2 rounded-3" 
                                        style="background-color: #4e73df; border: none; transition: 0.3s ease;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link mt-2" href="{{ route('password.request') }}"
                                       style="color: #8aa4ff; text-decoration: underline;">
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
