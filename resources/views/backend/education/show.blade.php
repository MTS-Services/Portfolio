@extends('backend.layouts.master', ['page_slug' => 'education'])
@section('title', 'Education Details')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="cart-title">Education Details</h4>
                    <a href="{{ route('admin.education.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <p>{{ $education->title }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group
                                <label for="institute_name">Institute Name</label>
                                <p>{{ $education->institute_name }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group
                                <label for="institute_address">Institute Address</label>
                                <p>{{ $education->institute_address }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <p>{{ $education->description }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group
                                <label for="start_date">Start Date</label>
                                <p>{{ $education->start_date }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group
                                <label for="end_date">End Date</label>
                                <p>{{ $education->end_date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
