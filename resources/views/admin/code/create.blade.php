@extends('admin')

@section('content')
    <h3 class="h3-title">Thêm mới</h3>

    @include('flash_message')

    <form action="{{ url('admin/codes/store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-2 control-label">Đơn vị</label>
                @php $names = \App\Models\Partner::all(); @endphp
                <div class="col-md-9">
                    <select class="form-control" name="name">
                        <option>--- Chọn đơn vị ---</option>
                        @foreach($names as $name)
                            <option value="{{ strtolower($name->name) }}">{{ $name->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Mã giảm giá</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền mã giảm giá" name="code" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Tiêu đề</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền tiêu đề" name="title">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Miêu tả</label>
                <div class="col-md-9">
                                <textarea class="form-control ckeditor" placeholder="Điền miêu tả"
                                          name="desc"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Hạn sử dụng</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền hạn sử dụng" name="hsd" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Percent</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền text percent" name="percent">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Priority</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Điền số priority" name="priority">
                </div>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Thêm mới</button>
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