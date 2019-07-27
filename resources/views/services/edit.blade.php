@extends('layouts.app', ['title' => __('User Management')])

@section('content')
@include('users.partials.header', ['title' => __('Edit User')])

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
                            <a href="{{ route('service.index') }}" class="btn btn-sm btn-primary">{{ __('Trở về danh sách Dịch vụ') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('service.update', $service->id) }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <h6 class="heading-small text-muted mb-4">{{ __('Dịch vụ') }}</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name-vi">{{ __('Tên Dịch vụ (Tiếng anh)') }}</label>
                                <input type="text" name="name_en" id="input-name-vi" class="form-control form-control-alternative{{ $errors->has('name_en') ? ' is-invalid' : '' }}" placeholder="{{ __('Feature') }}" value="{{ old('name_en', $service->name_en) }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-name-en">{{ __('Tên Dịch vụ (Tiếng việt)') }}</label>
                                <input type="text" name="name_vi" id="input-name-en" class="form-control form-control-alternative{{ $errors->has('name_vi') ? ' is-invalid' : '' }}" placeholder="{{ __('Cung cấp thiết bị') }}" value="{{ old('name_vi', $service->name_vi) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-description_en">{{ __('Mô tả tiếng anh') }}</label>
                                <input type="text" name="description_en" id="input-description_en" class="form-control form-control-alternative{{ $errors->has('description_en') ? ' is-invalid' : '' }}" placeholder="{{ __('English') }}" value="{{ old('description_en', $service->description_en) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-description_vi">{{ __('Mô tả tiếng việt') }}</label>
                                <input type="text" name="description_vi" id="input-description_vi" class="form-control form-control-alternative{{ $errors->has('description_vi') ? ' is-invalid' : '' }}" placeholder="{{ __('Mô tả Tiếng Việt') }}" value="{{ old('description_vi', $service->description_vi) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-image">{{ __('Hình ảnh') }}</label>
                                <input type="file" name="image" id="input-image" class="form-control form-control-alternative">
                                <img src="{{ URL::to('/') }}/images/{{ $service->image }}" class="img-thumbnail" width="100" />
                                <input type="hidden" name="hidden_image" value="{{$service->image }}" />
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