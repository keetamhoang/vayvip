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

    <h3>Thêm khuyến mãi mới</h3>

    <form action="{{url('admin/discounts/store')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-body">
            {{ csrf_field() }}

            <div class="form-group">
                <label class="col-md-2 control-label">Aff Link</label>
                <div class="col-md-9">
                    <input type="text" name="aff_link" class="form-control" placeholder="Điền aff link" value="{{old('aff_link')}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Tên</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" placeholder="Điền tên" value="{{old('name')}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Mô tả</label>
                <div class="col-md-9">
                    <textarea class="form-control" placeholder="Điền mô tả ngắn " name="content">{{old('content')}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Thời gian kết thúc</label>
                <div class="col-md-9">
                    <input type="text" name="end_time" class="form-control" placeholder="Điền ngày kết thúc" value="{{old('end_time')}}">
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
                                                                    <input type="file" name="image_local"> </span>
                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Xóa </a>
                        </div>
                    </div>
                    <div class="clearfix margin-top-10"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Merchant</label>
                @php $names = \App\Models\Merchant::all(); @endphp
                <div class="col-md-9">
                    <select class="form-control select2" name="merchant">
                        <option>--- Chọn đơn vị ---</option>
                        @foreach($names as $name)
                            <option value="{{ strtolower($name->name) }}">{{ $name->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Có coupon?</label>
                <div class="col-md-9">
                    <div class="mt-checkbox-inline">
                        <label class="mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="is_coupon" value="1">
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Coupon CODE</label>
                <div class="col-md-9">
                    <input type="text" name="coupon_code" class="form-control" placeholder="Điền CODE" value="{{old('coupon_code')}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Coupon DESC</label>
                <div class="col-md-9">
                    <input type="text" name="coupon_desc" class="form-control" placeholder="Điền mô tả coupon" value="{{old('coupon_desc')}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Coupon SAVE</label>
                <div class="col-md-9">
                    <input type="text" name="coupon_save" class="form-control" placeholder="Điền con số giảm" value="{{old('coupon_save')}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">HOT?</label>
                <div class="col-md-9">
                    <div class="mt-checkbox-inline">
                        <label class="mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="is_hot" value="1">
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
