@extends('backend.layouts.master', ['page_slug' => 'portfolio_categories'])

@section('title', 'Create Portfolio Category')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="cart-title">{{ __('Create portfolio category') }}</h4>
                    <a href="{{ route('admin.port_categories.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.port_categories.store') }}">
                        @csrf

                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label>{{ __('Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm mt-3">{{ __('Create') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
