@extends('admin')

@section('content')
    <h3 class="h3-title">Thêm mới bài viết</h3>

    @include('flash_message')

    <form action="{{ url('admin/posts/store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-2 control-label">Tên bài viết</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Điền tên bài viết" name="title" value="{{ old('title') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Danh mục</label>
                <div class="col-md-6">
                    @php $parentIds = \App\Models\Category::all() @endphp
                    <select class="form-control" name="category_id">
                        <option>--- Chọn danh mục ---</option>
                        @foreach($parentIds as $parentId)
                            <option value="{{ $parentId->id }}">{{ $parentId->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2">Ảnh đại diện</label>
                <div class="col-md-9">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
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

            <div class="form-group">
                <label class="control-label col-md-2">Pixel code</label>
                <div class="col-md-9">
                    <textarea class="form-control" id="pixel" rows="5" name="pixel"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Miêu tả ngắn</label>
                <div class="col-md-9">
                                <textarea class="form-control ckeditor" placeholder="Điền miêu tả ngắn"
                                          name="short_desc">{{ old('short_desc') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Chi tiết</label>
                <div class="col-md-9">
                                <textarea class="form-control ckeditor" placeholder="Điền chi tiết"
                                          name="content">{{ old('content') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Là bài Review & Đánh giá?</label>
                <div class="col-md-9">
                    <div class="mt-checkbox-inline">
                        <label class="mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="is_review">
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Là bài viết nổi bật?</label>
                <div class="col-md-9">
                    <div class="mt-checkbox-inline">
                        <label class="mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="is_highlight" checked>
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Có được hiển thị?</label>
                <div class="col-md-9">
                    <div class="mt-checkbox-inline">
                        <label class="mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="status" checked>
                            <span></span>
                        </label>
                    </div>
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