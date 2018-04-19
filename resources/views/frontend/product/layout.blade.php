<!DOCTYPE html>

<html lang="en">
<head>
    @yield('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

@yield('body')

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>