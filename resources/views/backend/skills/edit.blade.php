@extends('backend.layouts.master', ['page_slug' => 'skills'])
@section('title', 'Edit Skill')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="cart-title">Edit Skill</h4>
                    <a href="{{ route('admin.skills.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.skills.update', $skill->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="d-flex flex-wrap">
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label for="name">Skill Name</label>
                                    <input type="text" class="form-control" id="name" value="{{ $skill->name }}"
                                        name="name" placeholder="Skill Name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex-fill">
                                <div class="form-group">
                                    <label for="percentage">Percentage</label>
                                    <input type="text" class="form-control" value="{{ $skill->percentage }}" id="percentage" name="percentage"
                                        placeholder="Enter Percentage">
                                    @error('percentage')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm mt-3">{{ __('Update') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
