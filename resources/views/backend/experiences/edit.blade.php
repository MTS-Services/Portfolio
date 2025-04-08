@extends('backend.layouts.master', ['page_slug' => 'experiences'])

@section('title', 'Edit Experience')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="cart-title">{{ __('Edit experience') }}</h4>
                    <a href="{{ route('admin.experiences.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.experiences.update', $experience->id) }}"
                        enctype="multipart/form-data">
                        @csrf

                        @method('PUT')
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $experience->name }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('designation') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="designation" class="form-control"
                                        value="{{ $experience->designation }}">
                                    @error('designation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('company name') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="company_name" class="form-control"
                                        value="{{ old('company_name') }}">
                                    @error('company_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Address') }} <span class="text-danger">*</span></label>
                                <input type="text" name="address" class="form-control"
                                    value="{{ $experience->address }}">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Start Date') }} <span class="text-danger">*</span></label>
                                    <input type="date" name="start_date" class="form-control"
                                        value="{{ $experience->start_date }}">
                                    @error('start_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('End Date') }} <span class="text-danger">*</span></label>
                                    <input type="date" name="end_date" class="form-control"
                                        value="{{ $experience->end_date }}">
                                    @error('end_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-gourp mt-3">
                            <label>{{ __('Description') }} <span class="text-danger">*</span></label>
                            <textarea name="description" id="" cols="10" class="form-control" placeholder="{{ __('Description') }}">{{ $experience->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm mt-3">{{ __('Update') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
