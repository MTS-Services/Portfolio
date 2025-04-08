@extends('backend.layouts.master', ['page_slug' => 'profile'])
@section('title', 'Profile Update')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card shadow-sm mb-4">
                @if (session('success'))
                    <div class="alert alert-success d-flex justify-content-between align-items-center" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                    <h4 class="card-title text-white">Profile Details</h4>
                    <a href="{{ route('dashboard') }}" class="btn btn-light btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <div class="row justify-items-center">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="profile_image">Profile Image</label>
                                <img style="width: 100%; height: 250px; object-fit: cover; border-radius: 8px;"
                                    src="{{ asset('storage/images/users/' . $user->profile_image) }}"
                                    alt="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="cover_image">Cover Image</label>
                                <img style="width: 100%; height: 250px; object-fit: cover; border-radius: 8px;"
                                    src="{{ asset('storage/images/users/' . $user->cover_image) }}"
                                    alt="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <p class="form-control-plaintext">{{ $user->name }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <p class="form-control-plaintext">{{ $user->age }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <p class="form-control-plaintext">{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <p class="form-control-plaintext">{{ $user->phone }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <p class="form-control-plaintext">{{ $user->dob }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <p class="form-control-plaintext">{{ $user->address }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="degree">Degree</label>
                                <p class="form-control-plaintext">{{ $user->degree }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="short_bio">Short Bio</label>
                                <p class="form-control-plaintext">{{ $user->short_bio }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="long_bio">Long Bio</label>
                                <p class="form-control-plaintext">{{ $user->long_bio }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <p class="form-control-plaintext">{{ $user->designation }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <p class="form-control-plaintext">{{ $user->status }}</p>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="website_url">Website Url</label>
                                <p class="form-control-plaintext">{{ $user->website_url }}</p>
                            </div>
                        </div>
                      
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="{{ route('admin.profile.edit', $user->id) }}" class="btn btn-success">
                                {{ __('Edit Profile') }}
                            </a>
                            <a href="{{ route('admin.profile.password.edit', $user->id) }}" class="btn btn-primary">
                                {{ __('Change Password') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
