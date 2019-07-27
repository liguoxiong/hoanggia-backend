@extends('layouts.app', ['title' => __('User Management')])

@section('content')
@include('users.partials.header', ['title' => __('Thêm Slide')])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('User Management') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('carosel.index') }}" class="btn btn-sm btn-primary">{{ __('Trở về danh sách Slide') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <form method="post" action="{{ route('carosel.store') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Slide') }}</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name-vi">{{ __('Tên Slide (Tiếng anh)') }}</label>
                                <input type="text" name="name_en" id="input-name-vi" class="form-control form-control-alternative{{ $errors->has('name_en') ? ' is-invalid' : '' }}" placeholder="{{ __('Feature') }}" value="{{ old('name_en') }}" autofocus>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-name-en">{{ __('Tên Slide (Tiếng việt)') }}</label>
                                <input type="text" name="name_vi" id="input-name-en" class="form-control form-control-alternative{{ $errors->has('name_vi') ? ' is-invalid' : '' }}" placeholder="{{ __('Cung cấp thiết bị') }}" value="{{ old('name_vi') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-description_en">{{ __('Mô tả tiếng anh') }}</label>
                                <input type="text" name="description_en" id="input-description_en" class="form-control form-control-alternative{{ $errors->has('description_en') ? ' is-invalid' : '' }}" placeholder="{{ __('English') }}" value="{{ old('description_en') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-description_vi">{{ __('Mô tả tiếng việt') }}</label>
                                <input type="text" name="description_vi" id="input-description_vi" class="form-control form-control-alternative{{ $errors->has('description_vi') ? ' is-invalid' : '' }}" placeholder="{{ __('Mô tả Tiếng Việt') }}" value="{{ old('description_vi') }}">

                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-image">{{ __('Hình ảnh') }}</label>
                                <input type="file" name="image" id="input-image" class="form-control form-control-alternative">

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