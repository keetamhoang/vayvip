<title>Đăng ký thành viên</title>
<link rel="shortcut icon" href="https://vaytinchap.vpbank.com.vn/LOSWebDE/langding/img/favicon.ico"
      type="image/x-icon">

<link href="/css/auth.css" rel="stylesheet">

<div class="login-page">
    <div class="form">
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
        <form class="login-form" action="{{ url('register') }}" method="post">
            {{ csrf_field() }}
            <input type="email" placeholder="email" name="email" value="{{ old('email') }}">
            <input type="text" placeholder="Tên" name="name" value="{{ old('name') }}">
            <input type="password" placeholder="Mật khẩu" name="password" value="{{ old('password') }}">
            <input type="password" placeholder="Nhập lại mật khẩu" name="repassword" value="{{ old('repassword') }}">
            <button type="submit">Đăng ký</button>
            <p class="message">Đã có tài khoản? <a href="{{ url('dang-nhap') }}">Đăng nhập</a></p>
        </form>
    </div>
</div>

<script>
</script>