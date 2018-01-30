@extends('admin')

@section('content')
    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h3>Thêm thành viên mới</h3>

    <form action="{{url('admin/users/store')}}" class="form-horizontal" method="post" >
        <div class="form-body">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-1 control-label">Email</label>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" placeholder="Điền email" value="{{old('title')}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-1 control-label">Mô tả ngắn</label>
                <div class="col-md-9">
                    <textarea class="form-control" placeholder="Điền mô tả ngắn " name="desc"> {{old('desc')}} </textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-1 control-label">Nội dung</label>
                <div class="col-md-9">
                    <textarea class="form-control ckeditor" placeholder="Điền miêu tả" name="content">{{old('content')}} </textarea>
                </div>
            </div>
            <div class="form-group clearfix">
                <label class="col-md-1 control-label">Ảnh đại diện</label>
                <div class="col-md-9">
                    <input type="file" class="post-image form-control" name="image"
                           rel="post_status_images">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-1 control-label">Trạng thái</label>
                <div class="col-md-9">
                    <div class="mt-checkbox-inline">
                        <label class="mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="status" value="0">
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>

        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-1 col-md-9">
                    <button type="submit" class="btn green">Thêm</button>
                    <button type="button" class="btn default">Hủy</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
<script></script>
@endsection
