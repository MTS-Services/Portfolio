@extends('backend.layouts.master', ['page_slug' => 'portfolios'])
@section('title', 'Testimonial Details')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="cart-title">Portfolios Details</h4>
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <p>{{ $portfolios->category->name }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="source_url">Source Url</label>
                                <p>{{ $portfolios->source_url }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="live_url">Live Url</label>
                                <p>{{ $portfolios->live_url }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src="{{ asset('storage/images/portfolios/' . $portfolios->image) }}"
                                    alt="{{ $portfolios->title }}" width="500">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
