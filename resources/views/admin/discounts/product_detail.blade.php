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

    <a class="btn btn-default" href="{{ url('admin/km-products') }}">Quay lại</a>
    {{--<a class="btn btn-primary" href="{{ url('khuyen-mai/'.$discount->slug) }}" target="_blank">Xem bài</a>--}}
    {{--<a class="btn btn-danger" href="{{ url('admin/discounts/set-banner/' . $discount->id) }}">Chọn làm banner trang chủ</a>--}}
    <h3>Chi tiết: <b>{{ $discount->name }}</b></h3>

    <div class="form-horizontal" >
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-2 control-label">Cho hiện?</label>
                <div class="col-md-10">
                    <div class="mt-checkbox-inline">
                        <form action="{{ url('admin/km-products/update') }}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{ $discount->id }}">
                            <label class="mt-checkbox mt-checkbox-outline">
                                <input type="checkbox" name="status" @if ($discount->status == \App\Models\KmProduct::ACTIVE) checked @endif>
                                <span></span>
                            </label>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Id</label>
                <div class="col-md-10">
                    <input type="text" name="title" class="form-control" placeholder="Điền email" value="{{ $discount->root_id }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Tên</label>
                <div class="col-md-10">
                    <input type="text" name="title" class="form-control" placeholder="Điền email" value="{{ $discount->name }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Giá sau KM</label>
                <div class="col-md-10">
                    <input type="text" name="title" class="form-control" placeholder="Điền email" value="{{ number_format($discount->discount, 0, '.','.') }}" disabled>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Giá gốc</label>
                <div class="col-md-10">
                    <input type="text" name="title" class="form-control" placeholder="Điền email" value="{{ number_format($discount->price, 0, '.','.') }}" disabled>
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

        </div>
    </div>
@endsection

@section('scripts')
    <script></script>
@endsection
