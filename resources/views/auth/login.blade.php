<title>Đăng nhập trang quản trị</title>
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
        <form class="login-form" action="{{ url('login') }}" method="post">
            {{ csrf_field() }}
            <input type="email" placeholder="email" name="email" value="{{ old('email') }}">
            <input type="password" placeholder="Mật khẩu" name="password" value="{{ old('password') }}">
            <button type="submit">Đăng nhập</button>
            <p class="message">Chưa có tài khoản? <a href="{{ url('dang-ky') }}">Đăng ký</a></p>
        </form>
    </div>
</div>

<script>
</script>