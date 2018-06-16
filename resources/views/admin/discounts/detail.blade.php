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

    <a class="btn btn-default" href="{{ url('admin/discounts') }}">Quay lại</a>
    <a class="btn btn-primary" href="{{ url('khuyen-mai/'.$discount->slug) }}" target="_blank">Xem bài</a>
    <a class="btn btn-danger" href="{{ url('admin/discounts/set-banner/' . $discount->id) }}">Chọn làm banner trang chủ</a>
    <h3>Chi tiết: <b>{{ $discount->name }}</b> ({{ $discount->status == 0 ? 'Còn hạn' : 'Hết hạn' }})</h3>

    <form action="{{ url('admin/discounts/update') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $discount->id }}">
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-2 control-label">HOT?</label>
                <div class="col-md-9">
                    <div class="mt-checkbox-inline">
                        <label class="mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="is_hot" value="1" {{ $discount->is_hot == 1 ? 'checked' : '' }}>
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Id</label>
                <div class="col-md-10">
                    <input type="text" name="root_id" class="form-control" placeholder="Điền email" value="{{ $discount->root_id }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Tên</label>
                <div class="col-md-10">
                    <input type="text" name="name" class="form-control" placeholder="Điền tên" value="{{ $discount->name }}" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Thời gian hiệu lực</label>
                <div class="col-md-10">
                    <input type="text" name="start_time" class="form-control" placeholder="Điền ngày bắt đầu"
                           value="{{ !empty($discount->start_time) ?  \Carbon\Carbon::parse($discount->start_time)->toDateString() : '' }}">
                    <input type="text" name="end_time" class="form-control" placeholder="Điền kết thúc"
                           value="{{ !empty($discount->end_time) ? \Carbon\Carbon::parse($discount->end_time)->toDateString() : '' }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Coupon</label>
                <div class="col-md-10">
                    @php $coupons = \App\Models\Coupon::where('discount_id', $discount->id)->get() @endphp
                    @foreach($coupons  as $coupon)
                        <input type="text" name="title" class="form-control" placeholder="Điền email" value="{{ $coupon->coupon_code }}">
                    @endforeach
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Aff link</label>
                <div class="col-md-10">
                    <a class="form-control" target="_blank" href="{{ $discount->aff_link }}">{{ $discount->aff_link }}</a>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Link gốc</label>
                <div class="col-md-10">
                    <a class="form-control" target="_blank" href="{{ $discount->link }}">{{ $discount->link }}</a>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Thương hiệu</label>
                <div class="col-md-10">
                    <a class="form-control" target="_blank" href="https://{{ $discount->domain }}">{{ $discount->merchant }}</a>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Ảnh banner</label>
                <div class="col-md-10">
                    <div class="col-md-6">
                        <img src="{{ $discount->image }}" style="width: 100%">
                    </div>
                    @php $banners = \App\Models\Banner::where('discount_id', $discount->id)->get() @endphp
                    <div class="col-md-6">
                        @foreach($banners as $banner)
                            <div class="col-md-6">
                                <img src="{{ $banner->link }}" style="width: 100%">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Mô tả</label>
                <div class="col-md-10">
                    <textarea class="form-control" placeholder="Điền mô tả ngắn " name="content" rows="8"> {{ $discount->content }} </textarea>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Cập nhật</button>
                    <a type="button" class="btn default" href="{{ url('admin/discounts') }}">Trở về</a>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script></script>
@endsection
