@extends('layouts.app', ['title' => __('User Management')])

@section('content')
@include('users.partials.header', ['title' => __('Thêm Sản phẩm')])

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
                            <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
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
                    <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf

                        <h6 class="heading-small text-muted mb-4">{{ __('Sản phẩm') }}</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name-en">{{ __('Tên Sản phẩm (Tiếng anh)') }}</label>
                                <input type="text" name="name_en" id="input-name-en" class="form-control form-control-alternative{{ $errors->has('name_en') ? ' is-invalid' : '' }}" placeholder="{{ __('Product') }}" value="{{ old('name_en') }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-name-vi">{{ __('Tên Sản phẩm (Tiếng việt)') }}</label>
                                <input type="text" name="name_vi" id="input-name-vi" class="form-control form-control-alternative{{ $errors->has('name_vi') ? ' is-invalid' : '' }}" placeholder="{{ __('Sản phẩm') }}" value="{{ old('name_vi') }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-category">{{ __('Tên Danh mục') }}</label>
                                <select class="form-control" name="category_id" id="input-category" value="{{ old('category_id') }}" required>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name_en}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-branch">{{ __('Tên Hãng') }}</label>
                                <select class="form-control" name="branch_id" id="input-branch" value="{{ old('branch_id') }}" required>
                                    @foreach($branches as $branch)
                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-description_en">{{ __('Mô tả tiếng anh') }}</label>
                                <input type="text" name="description_en" id="input-description_en" class="form-control form-control-alternative{{ $errors->has('description_en') ? ' is-invalid' : '' }}" placeholder="{{ __('English') }}" value="{{ old('description_en') }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-description_vi">{{ __('Mô tả tiếng việt') }}</label>
                                <input type="text" name="description_vi" id="input-description_vi" class="form-control form-control-alternative{{ $errors->has('description_vi') ? ' is-invalid' : '' }}" placeholder="{{ __('Mô tả Tiếng Việt') }}" value="{{ old('description_vi') }}" required>

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