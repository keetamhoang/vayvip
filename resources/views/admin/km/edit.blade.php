@extends('admin')

@section('content')
    <h3 class="h3-title">Chỉnh sửa</h3>

    @include('flash_message')

    <form action="{{ url('admin/don-vi-khuyen-mai/update') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{ $post->id }}">
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-2 control-label">Đơn vị</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền tên đơn vị" name="name" value="{{ $post->name }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Tiêu đề</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền tiêu đề" name="title" value="{{ $post->title }}">
                    <i>*Để trống mặc định sẽ là: </i><b>Mã Giảm Giá Lazada Khuyến Mãi Lazada Mới Nhất Tháng {{ \Carbon\Carbon::now()->format('m/Y') }}</b>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Miêu tả trên</label>
                <div class="col-md-9">
                                <textarea class="form-control ckeditor" placeholder="Điền miêu tả trên"
                                          name="desc_up">{{ $post->desc_up }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Mô tả dưới</label>
                <div class="col-md-9">
                                <textarea class="form-control ckeditor" placeholder="Điền miêu tả dưới"
                                          name="desc_bot">{{ $post->desc_bot }}</textarea>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Cập nhật</button>
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