@extends('backend.layouts.master', ['page_slug' => 'services'])

@section('title', 'Create Service')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="cart-title">{{ __('Create Service') }}</h4>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-gourp mt-3">
                            <label>{{ __('Description') }} <span class="text-danger">*</span></label>
                            <textarea name="description" id="" cols="10" class="form-control" placeholder="{{ __('Description') }}">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label>{{ __('Image') }} <span class="text-danger">*</span></label>
                            <input type="file" accept="image/*" name="image" class="form-control">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success btn-sm mt-3">{{ __('Create') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
