@extends('backend.layouts.master', ['page_slug' => 'portfolios'])

@section('title', 'Create Portfolio')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="cart-title">{{ __('Create portfolio') }}</h4>
                <a href="{{ route('admin.portfolios.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.portfolios.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="d-flex flex-wrap">
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Category Name') }} <span class="text-danger">*</span></label>
                                <select class="form-control" name="category_id" id="">
                                    <option value="">Select Category</option>
                                    @foreach ($portfolio_categories as $key => $PortfolioCategory )
                                    <option value="{{ $PortfolioCategory->id }}">{{ $PortfolioCategory->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('Source Url') }} <span class="text-danger">*</span></label>
                                <input type="text" name="source_url" class="form-control" value="{{ old('source_url') }}">
                                @error('source_url')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex-fill">
                            <div class="form-group">
                                <label>{{ __('live Url') }} <span class="text-danger">*</span></label>
                                <input type="text" name="live_url" class="form-control"
                                    value="{{ old('live_url') }}">
                                @error('live_url')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
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