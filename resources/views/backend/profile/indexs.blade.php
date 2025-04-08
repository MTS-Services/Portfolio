@extends('backend.layouts.master', ['page_slug' => 'profile'])

@section('title', 'Profile Update')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="cart-title">{{ __('Create Service') }}</h4>
                    <a href="" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Name') }} <span class="text-danger">*</span></label>

                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Age') }} <span class="text-danger">*</span></label>

                                    <input type="number" name="age" class="form-control" value="{{ $user->age }}">
                                    @error('age')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Email') }} <span class="text-danger">*</span></label>

                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Phone') }} <span class="text-danger">*</span></label>

                                    <input type="number" name="phone" class="form-control" value="{{ $user->phone }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Dob') }} <span class="text-danger">*</span></label>

                                    <input type="date" name="dob" class="form-control" value="{{ $user->dob }}">
                                    @error('dob')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Address') }} <span class="text-danger">*</span></label>

                                    <input type="text" name="address" class="form-control" value="{{ $user->address }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Degree') }} <span class="text-danger">*</span></label>

                                    <input type="text" name="degree" class="form-control" value="{{ $user->degree }}">
                                    @error('degree')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Short_bio') }} <span class="text-danger">*</span></label>

                                    <input type="text" name="short_bio" class="form-control"
                                        value="{{ $user->short_bio }}">
                                    @error('short_bio')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Long_bio') }} <span class="text-danger">*</span></label>

                                    <input type="text" name="long_bio" class="form-control"
                                        value="{{ $user->long_bio }}">
                                    @error('long_bio')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-gourp mt-3">
                            <label>{{ __('Designations') }} <span class="text-danger">*</span></label>
                            <textarea name="designations" id="" cols="10" class="form-control"
                                placeholder="{{ __('Designations') }}">{{ $user->designations }}</textarea>
                        </div>

                        <div class="form-group mt-3">
                            <label>{{ __('Status') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="status" value="{{ $user->status }}">
                        </div>

                        <div class="form-gourp mt-3">
                            <label>{{ __('Description') }} <span class="text-danger">*</span></label>
                            <textarea name="description" id="" cols="10" class="form-control"
                                placeholder="{{ __('Description') }}">{{ $user->description }}</textarea>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Website_url') }} <span class="text-danger">*</span></label>

                                    <input type="text" name="website_url" class="form-control"
                                        value="{{ $user->website_url }}">
                                    @error('website_url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="form-group mt-3">
                            <label>{{ __('Profile_image') }} <span class="text-danger">*</span></label>
                            <input type="file" accept="image/*" name="profile_image" class="form-control">
                            @error('profile_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if ($user->profile_image)
                            <div class="form-group">
                                <img src="{{ asset('storage/images/users/' . $user->profile_image) }}"
                                    alt="{{ $user->name }}" width="100" class="img-fluid">
                            </div>
                        @endif

                        <div class="form-group mt-3">
                            <label>{{ __('Cover_image') }} <span class="text-danger">*</span></label>
                            <input type="file" accept="image/*" name="cover_image" class="form-control">
                            @error('cover_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if ($user->image)
                            <div class="form-group">
                                <img src="{{ asset('storage/images/users/' . $user->cover_image) }}"
                                    alt="{{ $user->name }}" width="100" class="img-fluid">
                            </div>
                        @endif



                        <button type="submit" class="btn btn-success btn-sm mt-3">{{ __('Update Profile') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
