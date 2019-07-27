@extends('layouts.app', ['title' => __('Quản lý nội dung')])

@section('content')
@include('users.partials.header', ['title' => __('Nội dung')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Chỉnh sửa nội dung') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('home') }}" class="btn btn-sm btn-primary">{{ __('Trở về dashboard') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('content.update', $content->id) }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <h6 class="heading-small text-muted mb-4">{{ __('Nội dung') }}</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-header_en">{{ __('Phần Header (Tiếng Anh)') }}</label>
                                <input type="text" name="header_en" id="input-header_en" class="form-control form-control-alternative{{ $errors->has('header_en') ? ' is-invalid' : '' }}" value="{{ old('header_en', $content->header_en) }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-header_vi">{{ __('Phần Header (Tiếng Việt)') }}</label>
                                <input type="text" name="header_vi" id="input-header_vi" class="form-control form-control-alternative{{ $errors->has('header_vi') ? ' is-invalid' : '' }}" value="{{ old('header_vi', $content->header_vi) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-feature_title_en">{{ __('Title phần feature (Tiếng Anh)') }}</label>
                                <input type="text" name="feature_title_en" id="input-feature_title_en" class="form-control form-control-alternative{{ $errors->has('feature_title_en') ? ' is-invalid' : '' }}" value="{{ old('feature_title_en', $content->feature_title_en) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-feature_title_vi">{{ __('Title phần feature (Tiếng Việt)') }}</label>
                                <input type="text" name="feature_title_vi" id="input-feature_title_vi" class="form-control form-control-alternative{{ $errors->has('feature_title_vi') ? ' is-invalid' : '' }}" value="{{ old('feature_title_vi', $content->feature_title_vi) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-feature_description_en">{{ __('Mô tả phần feature (Tiếng Anh)') }}</label>
                                <input type="text" name="feature_description_en" id="input-feature_description_en" class="form-control form-control-alternative{{ $errors->has('feature_description_en') ? ' is-invalid' : '' }}" value="{{ old('feature_description_en', $content->feature_description_en) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-feature_description_vi">{{ __('Mô tả phần feature (Tiếng Việt)') }}</label>
                                <input type="text" name="feature_description_vi" id="input-feature_description_vi" class="form-control form-control-alternative{{ $errors->has('feature_description_vi') ? ' is-invalid' : '' }}" value="{{ old('feature_title_vi', $content->feature_title_vi) }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-service_description_en">{{ __('Mô tả phần Dịch vụ (Tiếng Anh)') }}</label>
                                <input type="text" name="service_description_en" id="input-service_description_en" class="form-control form-control-alternative{{ $errors->has('service_description_en') ? ' is-invalid' : '' }}" value="{{ old('service_description_en', $content->service_description_en) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-service_description_vi">{{ __('Mô tả phần Dịch vụ (Tiếng Việt)') }}</label>
                                <input type="text" name="service_description_vi" id="input-service_description_vi" class="form-control form-control-alternative{{ $errors->has('service_description_vi') ? ' is-invalid' : '' }}" value="{{ old('service_description_vi', $content->service_description_vi) }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-distributor_title_en">{{ __('Title phần Đại lý phân phối (Tiếng Anh)') }}</label>
                                <input type="text" name="distributor_title_en" id="input-distributor_title_en" class="form-control form-control-alternative{{ $errors->has('distributor_title_en') ? ' is-invalid' : '' }}" value="{{ old('distributor_title_en', $content->distributor_title_en) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-distributor_title_vi">{{ __('Title phần Đại lý phân phối (Tiếng Việt)') }}</label>
                                <input type="text" name="distributor_title_vi" id="input-distributor_title_vi" class="form-control form-control-alternative{{ $errors->has('distributor_title_vi') ? ' is-invalid' : '' }}" value="{{ old('distributor_title_vi', $content->distributor_title_vi) }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-distributor_description_en">{{ __('Mô tả phần Đại lý phân phối (Tiếng Anh)') }}</label>
                                <input type="text" name="distributor_description_en" id="input-distributor_description_en" class="form-control form-control-alternative{{ $errors->has('distributor_description_en') ? ' is-invalid' : '' }}" value="{{ old('distributor_description_en', $content->distributor_description_en) }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-distributor_description_vi">{{ __('Mô tả phần Đại lý phân phối (Tiếng Việt)') }}</label>
                                <input type="text" name="distributor_description_vi" id="input-distributor_description_vi" class="form-control form-control-alternative{{ $errors->has('distributor_description_vi') ? ' is-invalid' : '' }}" value="{{ old('distributor_description_vi', $content->distributor_description_vi) }}">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-product_description_en">{{ __('Mô tả phần Sản phẩm (Tiếng Anh)') }}</label>
                                <input type="text" name="product_description_en" id="input-product_description_en" class="form-control form-control-alternative{{ $errors->has('product_description_en') ? ' is-invalid' : '' }}" value="{{ old('product_description_en', $content->product_description_en) }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-product_description_vi">{{ __('Mô tả phần Sản phẩm (Tiếng Việt)') }}</label>
                                <input type="text" name="product_description_vi" id="input-product_description_vi" class="form-control form-control-alternative{{ $errors->has('product_description_vi') ? ' is-invalid' : '' }}" value="{{ old('product_description_vi', $content->product_description_vi) }}">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-clients_description_en">{{ __('Mô tả phần Khách hàng (Tiếng Anh)') }}</label>
                                <input type="text" name="clients_description_en" id="input-clients_description_en" class="form-control form-control-alternative{{ $errors->has('clients_description_en') ? ' is-invalid' : '' }}" value="{{ old('clients_description_en', $content->clients_description_en) }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-clients_description_vi">{{ __('Mô tả phần Khách hàng (Tiếng Việt)') }}</label>
                                <input type="text" name="clients_description_vi" id="input-clients_description_vi" class="form-control form-control-alternative{{ $errors->has('clients_description_vi') ? ' is-invalid' : '' }}" value="{{ old('clients_description_vi', $content->clients_description_vi) }}">
                            </div>

                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4">{{ __('Lưu') }}</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layouts.footers.auth')
</div>
@endsection