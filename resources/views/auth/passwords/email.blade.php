@extends('frontend.layouts.master')
@push('css')
<style>
    header,
    footer {
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
                <h3 class="mb-0"><i class="bi bi-person-circle"></i> {{ __('Reset Password') }}</h3>
            </div>

            <div class="card-body p-4">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <!-- Password Reset Form -->
                <form method="POST" action="{{ route('password.email') }}">
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
                                name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                placeholder="Enter your email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Login Button -->
                    <div class="d-grid">
                        <button x-ref="btn" type="submit" class="btn btn-warning fw-bold shadow-sm btn-hover'">
                            <i class="bi bi-box-arrow-in-right"></i> {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
@endsection