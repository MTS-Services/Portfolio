@extends('backend.layouts.master', ['page_slug' => 'profile'])

@section('title', 'Profile')

@section('content')
<div class="row">

    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="cart-title">{{ __('Edit Profile') }}</h4>
                <a href="{{route('admin.profile.index')}}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.profile.update', $users->id) }}"
                    enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <div class="d-flex flex-wrap">
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Name') }} <span class="text-danger">*</span></label>

                                <input type="text" name="name"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                    value="{{ $users->name }}">

                            </div>
                        </div>
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Age') }} <span class="text-danger">*</span></label>

                                <input type="number" name="age" class="form-control" value="{{ $users->age }}">

                            </div>
                        </div>

                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Email') }} <span class="text-danger">*</span></label>

                                <input type="email" name="email" class="form-control" value="{{ $users->email }}">

                            </div>
                        </div>
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Phone') }} <span class="text-danger">*</span></label>

                                <input type="text" name="phone" class="form-control" value="{{ $users->phone }}">

                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Dob') }} <span class="text-danger">*</span></label>

                                <input type="date" name="dob" class="form-control" value="{{ $users->dob }}">

                            </div>
                        </div>
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Address') }} <span class="text-danger">*</span></label>

                                <input type="text" name="address" class="form-control" value="{{ $users->address }}">

                            </div>
                        </div>

                    </div>

                    <div class="d-flex flex-wrap">
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Degree') }} <span class="text-danger">*</span></label>

                                <input type="text" name="degree" class="form-control" value="{{ $users->degree }}">

                            </div>
                        </div>
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Designation') }} <span class="text-danger">*</span></label>
                                <input name="designations" id="" cols="10" class="form-control" placeholder="{{ __('Designation') }}" {{ $users->designation }}>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <!-- facebook -->
                        <div class="flex-fill">
                            <div class="form-group">
                                <label for="facebook"><i class="fab fa-facebook"></i> Facebook</label>
                                <input type="text" name="facebook" class="form-control" value="{{ $users->facebook }}">
                            </div>
                        </div>
                        <!-- twitter -->
                        <div class="flex-fill">
                            <div class="form-group">
                                <label for="twitter"><i class="fab fa-twitter"></i> Twitter</label>
                                <input type="text" name="twitter" class="form-control" value="{{ $users->twitter }}">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex wrap">
                        <!-- linkedin -->
                        <div class="flex-fill">
                            <div class="form-group">
                                <label for="linkedin"><i class="fab fa-linkedin"></i> Linkedin</label>
                                <input type="text" name="linkedin" class="form-control" value="{{ $users->linkedin }}">
                            </div>
                        </div>
                        <!-- instagram -->
                        <div class="flex-fill">
                            <div class="form-group">
                                <label for="instagram"><i class="fab fa-instagram"></i> Instagram</label>
                                <input type="text" name="instagram" class="form-control" value="{{ $users->instagram }}">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Short_bio') }} <span class="text-danger">*</span></label>

                                <input type="text" name="short_bio" class="form-control"
                                    value="{{ $users->short_bio }}">

                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Long_bio') }} <span class="text-danger">*</span></label>

                                <input type="text" name="long_bio" class="form-control"
                                    value="{{ $users->long_bio }}">

                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Website_url') }} <span class="text-danger">*</span></label>

                                <input type="text" name="website_url" class="form-control"
                                    value="{{ $users->website_url }}">

                            </div>
                        </div>
                    </div>


                    <div class="form-group mt-3">
                        <label>{{ __('Profile_image') }} <span class="text-danger">*</span></label>
                        <input type="file" accept="image/*" name="profile_image" class="form-control">

                        @if ($users->profile_image)
                        <div class="form-group">
                            <img src="{{ asset('images/users/' . $users->profile_image) }}"
                                alt="{{ $users->name }}" width="100" class="img-fluid">
                        </div>
                        @endif

                    </div>

                    <div class="form-group mt-3">
                        <label>{{ __('Cover_image') }} <span class="text-danger">*</span></label>
                        <input type="file" accept="image/*" name="cover_image" class="form-control">

                        @if ($users->image)
                        <div class="form-group">
                            <img src="{{ asset('images/users/' . $users->cover_image) }}" alt="{{ $users->name }}"
                                width="100" class="img-fluid">
                        </div>
                        @endif

                    </div>

                    <button type="submit" class="btn btn-success btn-sm mt-3">{{ __('Update Profile') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection