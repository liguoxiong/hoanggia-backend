@extends('layouts.app', ['title' => __('User Management')])

@section('content')
@include('layouts.headers.cards')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Đại lý') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('branch.create') }}" class="btn btn-sm btn-primary">{{ __('Thêm Đại lý') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">{{ __('Tên Đại lý') }}</th>
                                <th scope="col">{{ __('Hình ảnh') }}</th>
                                <th scope="col">{{ __('Mô tả (Tiếng Việt)') }}</th>
                                <th scope="col">{{ __('Mô tả (Tiếng Anh)') }}</th>
                                <th scope="col">{{ __('Đường dẫn') }}</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($branches as $branch)
                            <tr>
                                <td>
                                    <h3>{{ $branch->name }}</h3>
                                </td>
                                <td><img height="50" src="/images/{{$branch->image}}" alt=""></td>
                                <td>{{ $branch->description_vi }}</td>
                                <td>{{ $branch->description_en }}</td>
                                <td>
                                    <a href="{{ $branch->link }}">{{ $branch->link }}</a>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <form action="{{ route('branch.destroy', $branch) }}" method="post">
                                                @csrf
                                                @method('delete')

                                                <a class="dropdown-item" href="{{ route('branch.edit', $branch) }}">{{ __('Chỉnh sửa') }}</a>
                                                <button type="button" class="dropdown-item" onclick="confirm('{{ __("Xóa Đại lý?") }}') ? this.parentElement.submit() : ''">
                                                    {{ __('Xóa') }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">

                    </nav>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>
@endsection