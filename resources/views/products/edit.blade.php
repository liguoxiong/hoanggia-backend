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
                            <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary">{{ __('Trở về danh sách sản phẩm') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('product.update', $product->id) }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <h6 class="heading-small text-muted mb-4">{{ __('Sản phẩm') }}</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">{{ __('Tên Sản phẩm (Tiếng anh)') }}</label>
                                <input type="text" name="name_en" id="input-name" class="form-control form-control-alternative{{ $errors->has('name_en') ? ' is-invalid' : '' }}" placeholder="{{ __('Feature') }}" value="{{ old('name_en', $product->name_en) }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">{{ __('Tên Sản phẩm (Tiếng việt)') }}</label>
                                <input type="text" name="name_vi" id="input-name" class="form-control form-control-alternative{{ $errors->has('name_vi') ? ' is-invalid' : '' }}" placeholder="{{ __('Cung cấp thiết bị') }}" value="{{ old('name_vi', $product->name_vi) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-category">{{ __('Tên Danh mục') }}</label>
                                <select class="form-control" name="category_id" id="input-category" value="{{ old('category_id', $product->category_id)}}" required>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name_en}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-branch">{{ __('Tên Hãng') }}</label>
                                <select class="form-control" name="branch_id" id="input-branch" value="{{ old('branch_id', $product->branch_id)}}" required>
                                    @foreach($branches as $branch)
                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-description_en">{{ __('Mô tả tiếng anh') }}</label>
                                <input type="text" name="description_en" id="input-description_en" class="form-control form-control-alternative{{ $errors->has('description_en') ? ' is-invalid' : '' }}" placeholder="{{ __('English') }}" value="{{ old('description_en', $product->description_en) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-description_vi">{{ __('Mô tả tiếng việt') }}</label>
                                <input type="text" name="description_vi" id="input-description_vi" class="form-control form-control-alternative{{ $errors->has('description_vi') ? ' is-invalid' : '' }}" placeholder="{{ __('Mô tả Tiếng Việt') }}" value="{{ old('description_vi', $product->description_vi) }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="input-image">{{ __('Hình ảnh') }}</label>
                                <input type="file" name="image" id="input-image" class="form-control form-control-alternative">
                                <img src="{{ URL::to('/') }}/images/{{ $product->image }}" class="img-thumbnail" width="100" />
                                <input type="hidden" name="hidden_image" value="{{$product->image }}" />
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