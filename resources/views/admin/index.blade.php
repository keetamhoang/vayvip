@extends('admin')

@section('content')
    @if (auth('admin')->user()->type == 'admin' || auth('admin')->user()->type == 'mod')
        <a class="btn btn-primary" href="{{ url('admin/shinhanbank') }}">Shinhan Bank</a>
    @endif
    <div style="text-align: center">
        <h1>Trang quản trị <b>Tài chính SMART</b></h1>
        <p>Phát triển bởi <b>Kee Tam Hoàng</b></p>
    </div>
@endsection