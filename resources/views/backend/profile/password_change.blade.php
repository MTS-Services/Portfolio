@extends('backend.layouts.master', ['page_slug' => 'profile'])

@section('title', 'Change Password')

@section('content')
    <div class="row">
    <div class="col-12">
        <h2>Change Password</h2>
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.profile.password.update', $user->id) }}">
            @csrf

            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" name="current_password" class="form-control">
                @error('current_password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" name="password" class="form-control">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm New Password</label>
                <input type="password" name="password_confirmation" class="form-control">
                @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>
    </div>
@endsection
