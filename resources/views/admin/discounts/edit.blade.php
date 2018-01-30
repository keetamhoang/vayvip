@extends('admin')

@section('content')
    <h3 class="h3-title">Chỉnh sửa thành viên</h3>

    @include('flash_message')

    <form action="{{ url('admin/users/update') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{ $post->id }}">
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-2 control-label">Email</label>
                <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Điền email" name="email" value="{{ $post->email }}" disabled>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Tên</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Điền tên" name="name" value="{{ $post->name }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Phân loại</label>
                <div class="col-md-6">
                    <select class="form-control" name="type">
                            <option value="admin" @if ($post->type == 'admin') selected @endif>Admin</option>
                            <option value="mod" @if ($post->type == 'mod') selected @endif>Mod</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Trạng thái</label>
                <div class="col-md-6">
                    <select class="form-control" name="status">
                        <option value="1" @if ($post->status == 1) selected @endif>Kích hoạt</option>
                        <option value="0" @if ($post->status == 0) selected @endif>Không kích hoạt</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Cập nhật</button>
                    <a type="button" class="btn default" href="{{ url('admin/users') }}">Trở về</a>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#add-row').click(function (e) {
                var html = '<tr>' +
                    '<td class="col-md-6">' +
                    '<div class="form-group" style="margin: 0px;">' +
                    '<input type="text" class="form-control unicase-form-control text-input" name="categories[]">' +
                    '</div>' +
                    '</td>' +
                    '<td class="col-md-3">' +
                    '<div class="form-group" style="margin: 0px;">' +
                    '<input type="text" class="form-control unicase-form-control text-input" name="discounts[]">' +
                    '</div>' +
                    '</td>' +
                    '<td class="col-md-3">' +
                    '<div class="form-group" style="margin: 0px;">' +
                    '<input type="text" class="form-control unicase-form-control text-input" name="discounts_real[]">' +
                    '</div>' +
                    '</td>' +
                    '</tr>';

                $('.discount-category').append(html);
            });
        });
    </script>
@endsection