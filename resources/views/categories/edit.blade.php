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
                            <a href="{{ route('category.index') }}" class="btn btn-sm btn-primary">{{ __('Trở về danh sách Danh mục') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('category.update', $category->id) }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <h6 class="heading-small text-muted mb-4">{{ __('Danh mục') }}</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name-vi">{{ __('Tên Danh mục (tiếng việt)') }}</label>
                                <input type="text" name="name_vi" id="input-name-vi" class="form-control form-control-alternative{{ $errors->has('name_vi') ? ' is-invalid' : '' }}" placeholder="{{ __('Tên danh mục') }}" value="{{ old('name_vi', $category->name_vi) }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-name-en">{{ __('Tên Danh mục (tiếng anh)') }}</label>
                                <input type="text" name="name_en" id="input-name-en" class="form-control form-control-alternative{{ $errors->has('name_en') ? ' is-invalid' : '' }}" placeholder="{{ __('Category') }}" value="{{ old('name_en', $category->name_en) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-description_en">{{ __('Mô tả tiếng anh') }}</label>
                                <input type=" text" name="description_en" id="input-description_en" class="form-control form-control-alternative{{ $errors->has('description_en') ? ' is-invalid' : '' }}" placeholder="{{ __('write something') }}" value="{{ old('description_en', $category->description_en) }}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-description_vi">{{ __('Mô tả tiếng việt') }}</label>
                                <input type="text" name="description_vi" id="input-description_vi" class="form-control form-control-alternative{{ $errors->has('description_vi') ? ' is-invalid' : '' }}" placeholder="{{ __('Mô tả gì đó') }}" value="{{ old('description_vi', $category->description_vi) }}">
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