@extends('frontend.layouts.master')
@push('css')
    <style>
      
       header,footer{
        display: none;
       }
    </style>
@endpush

@section('content')
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <!-- Dark Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.6);"></div>
        <div class="col-md-4  position-relative" style="z-index: 2;">
            <div class="card shadow-lg border-0 rounded-4 p-4"
                style="backdrop-filter: blur(12px); background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);">

                <!-- Header -->
                <div class="card-header text-center text-white fw-bold rounded-top bg-transparent border-bottom">
                    <h3 class="mb-0"><i class="bi bi-person-circle"></i> {{ __('Login') }}</h3>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="email"
                                class="form-label text-white fw-semibold">{{ __('Email Address') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-0 text-warning"><i
                                        class="bi bi-envelope"></i></span>
                                <input id="email" type="email"
                                    class="form-control bg-transparent text-white border-light @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}"  autocomplete="email" autofocus
                                    placeholder="Enter your email">

                                @error('email')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div class="mb-3">
                            <label for="password" class="form-label text-white fw-semibold">{{ __('Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-0 text-warning"><i
                                        class="bi bi-lock"></i></span>
                                <input id="password" type="password"
                                    class="form-control bg-transparent text-white border-light @error('password') is-invalid @enderror"
                                    name="password"  autocomplete="current-password"
                                    placeholder="Enter your password">

                                @error('password')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label text-white" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="text-decoration-none small text-warning fw-bold"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>

                        <!-- Login Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-warning fw-bold shadow-sm btn-hover">
                                <i class="bi bi-box-arrow-in-right"></i> {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

           
        </div>
    </div>
@endsection
