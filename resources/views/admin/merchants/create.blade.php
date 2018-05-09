@extends('admin')

@section('content')
    <h3 class="h3-title">Thêm mới danh mục</h3>

    @include('flash_message')

    <form action="{{ url('admin/categories/store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-3 control-label">Tên danh mục</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Điền tên danh mục" name="name" value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Miêu tả ngắn</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Điền miêu tả" name="desc" value="{{ old('desc') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Danh mục cha</label>
                <div class="col-md-6">
                    @php $parentIds = \App\Models\Category::all() @endphp
                    <select class="form-control" name="parent_id">
                        <option value="" >--- Chọn danh mục cha ---</option>
                        @foreach($parentIds as $parentId)
                            <option value="{{ $parentId->id }}">{{ $parentId->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Ảnh</label>
                <div class="col-md-9">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 400px; max-height: 500px;"> </div>
                        <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new"> Chọn ảnh </span>
                                                                    <span class="fileinput-exists"> Thay đổi </span>
                                                                    <input type="file" name="image"> </span>
                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Xóa </a>
                        </div>
                    </div>
                    <div class="clearfix margin-top-10"></div>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Thêm</button>
                    <a type="button" class="btn default" href="{{ url('admin/posts') }}">Trở về</a>
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