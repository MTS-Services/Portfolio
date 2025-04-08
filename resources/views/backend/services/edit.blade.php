@extends('backend.layouts.master', ['page_slug' => 'services'])

@section('title', 'Edit service')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="cart-title">{{ __('Create Service') }}</h4>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.services.update', $service->id) }}"
                        enctype="multipart/form-data">
                        @csrf

                        @method('PUT')
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Title') }} <span class="text-danger">*</span></label>

                                    <input type="text" name="title" class="form-control" value="{{ $service->title }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group mt-3">
                            <label>{{ __('Description') }} <span class="text-danger">*</span></label>
                            <textarea name="description" id="" cols="10" class="form-control" placeholder="{{ __('Description') }}">{{ $service->description }}</textarea>
                        </div>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group mt-3">
                            <label>{{ __('Image') }} <span class="text-danger">*</span></label>
                            <input type="file" accept="image/*" name="image" class="form-control">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if ($service->image)
                            <div class="form-group">
                                <img src="{{ asset('storage/images/services/' . $service->image) }}"
                                    alt="{{ $service->title }}" width="100" class="img-fluid">
                            </div>
                        @endif

                        <button type="submit" class="btn btn-success btn-sm mt-3">{{ __('Update') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
