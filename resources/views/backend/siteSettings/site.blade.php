@extends('backend.layouts.master', ['page_slug' => 'site_settings'])

@section('title', 'Update Site Setting')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="cart-title">{{ __('Update Site Setting') }}</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.site.settings.update', $site_setting->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="form-group">
                            <label>{{ __('Copyright Text') }}</label>
                            <input type="text" name="copyright_text" class="form-control" placeholder="Copyright Text"
                                value="{{ $site_setting->copyright_text }}">
                            @error('copyright_text')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="from-group mt-3">
                            <label>{{ __('Site Logo') }}</label>
                            <input type="file" accept="image/*" name="site_logo" class="form-control">
                            @error('site_logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if ($site_setting->site_logo)
                            <div class="form-group">
                                <img src="{{ asset('storage/images/site_settings/' . $site_setting->site_logo) }}"
                                    alt="{{ $site_setting->site_logo }}" width="100" class="img-fluid">
                            </div>
                        @endif

                        <div class="from-group mt-3">
                            <label>{{ __('Favicon') }}</label>
                            <input type="file" accept="image/*" name="favicon" class="form-control">
                            @error('favicon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($site_setting->favicon)
                            <div class="form-group">
                                <img src="{{ asset('storage/images/site_settings/' . $site_setting->favicon) }}"
                                    alt="{{ $site_setting->favicon }}" width="100" class="img-fluid">
                            </div>
                        @endif
                        <div class="from-group mt-3">
                            <label>{{ __('Banner') }}</label>
                            <input type="file" accept="image/*" name="banner" class="form-control">
                            @error('banner')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($site_setting->banner)
                            <div class="form-group">
                                <img src="{{ asset('storage/images/site_settings/' . $site_setting->banner) }}"
                                    alt="{{ $site_setting->banner }}" width="100" class="img-fluid">
                            </div>
                        @endif

                        <button type="submit" class="btn btn-success btn-sm mt-3">{{ __('Update') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
