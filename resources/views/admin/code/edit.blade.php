@extends('admin')

@section('content')
    <h3 class="h3-title">Chỉnh sửa Coupon</h3>

    @include('flash_message')

    <form action="{{ url('admin/codes/update') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{ $post->id }}">
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-2 control-label">Đơn vị</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền tên đơn vị" name="name" value="{{ $post->name }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Mã giảm giá</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền mã giảm giá" name="code" value="{{ $post->code }}" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Tiêu đề</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền tiêu đề" name="title" value="{{ $post->title }}" >
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Miêu tả</label>
                <div class="col-md-9">
                                <textarea class="form-control ckeditor" placeholder="Điền miêu tả"
                                          name="desc">{{ $post->desc }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Hạn sử dụng</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền hạn sử dụng" name="hsd" value="{{ $post->hsd }}" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Percent</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền text percent" name="percent" value="{{ $post->percent }}" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Priority</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền số priority" name="priority" value="{{ $post->priority }}" >
                </div>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Cập nhật</button>
                    <a type="button" class="btn default" href="{{ url('admin/codes') }}">Trở về</a>
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