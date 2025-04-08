@extends('backend.layouts.master', ['page_slug' => 'education'])

@section('title', 'Edit Education')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="cart-title">{{ __('Create education') }}</h4>
                <a href="{{ route('admin.education.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.education.update', $education->id) }}"
                    enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <div class="d-flex flex-wrap">
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Title') }} <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ $education->title }}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Institute Name') }} <span class="text-danger">*</span></label>
                                <input type="text" name="institute_name" class="form-control"
                                    value="{{ $education->institute_name }}">
                                @error('institute_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="flex-fill">
                        <div class="form-group">
                            <label>{{ __('Institute Address') }} <span class="text-danger">*</span></label>
                            <input type="text" name="institute_address" class="form-control"
                                value="{{ $education->institute_address }}">
                            @error('institute_address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-wrap">
                        <div class="flex-fill">
                            <div class="form-group ">
                                @error('start_date')
                                has-error
                                @enderror

                                <label>{{ __('Start date') }} <span class="text-danger">*</span></label>
                                <input type="date" name="start_date" class="form-control"
                                    value="{{ $education->start_date }}">
                                @error('start_date')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('End date') }}</label>
                                <input type="date" name="end_date" class="form-control"
                                    value="{{ $education->end_date }}">
                                @error('end_date')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label>{{ __('Description') }} <span class="text-danger">*</span></label>
                        <textarea name="description" id="" cols="10" class="form-control" placeholder="{{ __('Description') }}">{{ $education->description }}</textarea>
                    </div>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror




                    <button type="submit" class="btn btn-success btn-sm mt-3">{{ __('Update') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection