@extends('admin')

@section('content')
    <h3 class="h3-title">Phân loại danh mục ở trang <b>{{ $partner->name }}</b></h3>

    @include('flash_message')

    <form action="{{ url('admin/don-vi-khuyen-mai/phan-loai/store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" value="{{ $partner->id }}" name="id">
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-2 control-label">Tên danh mục</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Đồ điện tử gia dụng, mẹ và bé,..." name="title" value="{{ old('title') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Miêu tả cho danh mục</label>
                <div class="col-md-9">
                                <textarea class="form-control ckeditor" placeholder="Điền miêu tả"
                                          name="content">{{ old('content') }}</textarea>
                </div>
            </div>

            
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Thêm</button>
                    <a type="button" class="btn default" href="{{ url('admin/don-vi-khuyen-mai') }}">Trở về</a>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
        });
    </script>
@endsection