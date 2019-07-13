@extends('layouts.app', ['title' => __('Quản lý thông tin')])

@section('content')
@include('users.partials.header', ['title' => __('Thông tin chung')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Chỉnh sửa thông tin') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('home') }}" class="btn btn-sm btn-primary">{{ __('Trở về dashboard') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('info.update', $info->id) }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <h6 class="heading-small text-muted mb-4">{{ __('Thông tin chung') }}</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">{{ __('Tên Công ty (Tiếng Việt)') }}</label>
                                <input type="text" name="company_name_vi" id="input-name" class="form-control form-control-alternative{{ $errors->has('company_name_vi') ? ' is-invalid' : '' }}" placeholder="{{ __('Công ty TNHH') }}" value="{{ old('name', $info->company_name_vi) }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">{{ __('Tên Công ty (Tiếng Anh)') }}</label>
                                <input type="text" name="company_name_en" id="input-name" class="form-control form-control-alternative{{ $errors->has('company_name_en') ? ' is-invalid' : '' }}" placeholder="{{ __('Company') }}" value="{{ old('name', $info->company_name_en) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-description_en">{{ __('Địa chỉ tiếng anh') }}</label>
                                <input type=" text" name="address_en" id="input-address_en" class="form-control form-control-alternative{{ $errors->has('address_en') ? ' is-invalid' : '' }}" placeholder="{{ __('122 ABC Street, ...') }}" value="{{ old('address_en', $info->address_en) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-address_vi">{{ __('Địa chỉ tiếng việt') }}</label>
                                <input type="text" name="address_vi" id="input-address_vi" class="form-control form-control-alternative{{ $errors->has('address_vi') ? ' is-invalid' : '' }}" placeholder="{{ __('123 Đường ABC, ...') }}" value="{{ old('address_vi', $info->address_vi) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('123 Đường ABC, ...') }}" value="{{ old('email', $info->email) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-phone">{{ __('Số điện thoại') }}</label>
                                <input type="text" name="phone" id="input-phone" class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('123 Đường ABC, ...') }}" value="{{ old('phone', $info->phone) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-facebook">{{ __('Facebook') }}</label>
                                <input type="text" name="facebook" id="input-facebook" class="form-control form-control-alternative" placeholder="{{ __('https://facebook.com/') }}" value="{{ old('facebook', $info->facebook) }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-youtube">{{ __('Youtube') }}</label>
                                <input type="text" name="youtube" id="input-youtube" class="form-control form-control-alternative" placeholder="{{ __('https://youtube.com/') }}" value="{{ old('youtube', $info->youtube) }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-twitter">{{ __('Twitter') }}</label>
                                <input type="text" name="twitter" id="input-twitter" class="form-control form-control-alternative" placeholder="{{ __('https://twitter.com/') }}" value="{{ old('twitter', $info->twitter) }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-likedin">{{ __('likedin') }}</label>
                                <input type="text" name="likedin" id="input-likedin" class="form-control form-control-alternative" placeholder="{{ __('https://likedin.com/') }}" value="{{ old('likedin', $info->likedin) }}">
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