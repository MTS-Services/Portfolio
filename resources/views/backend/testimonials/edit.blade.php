@extends('backend.layouts.master', ['page_slug' => 'testimonials'])

@section('title', 'Edit Testimonial')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="cart-title">{{ __('Edit testimonial') }}</h4>
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.testimonials.update', $testimonial->id) }}"
                        enctype="multipart/form-data">
                        @csrf

                        @method('PUT')
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $testimonial->name }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('designation') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="designation" class="form-control"
                                        value="{{ $testimonial->designation }}">
                                    @error('designation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-gourp mt-3">
                            <label>{{ __('Description') }} <span class="text-danger">*</span></label>
                            <textarea name="description" id="" cols="10" class="form-control" placeholder="{{ __('Description') }}">{{ $testimonial->description }}</textarea>
                        </div>

                        <div class="form-group mt-3">
                            <label>{{ __('Image') }} <span class="text-danger">*</span></label>
                            <input type="file" accept="image/*" name="image" class="form-control">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if ($testimonial->image)
                            <div class="form-group">
                                <img src="{{ asset('storage/images/testimonials/' . $testimonial->image) }}"
                                    alt="{{ $testimonial->name }}" width="100" class="img-fluid">
                            </div>
                        @endif

                        <button type="submit" class="btn btn-success btn-sm mt-3">{{ __('Update') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
