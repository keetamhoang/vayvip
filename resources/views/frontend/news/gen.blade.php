<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate form Civi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">
    <link rel="stylesheet" href="/css/form/style.css">
    <style>
        .sign-up {
            margin: 0px auto !important;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Code nhúng form đăng ký</h2>
    <div class="form-group">
        <div class="col-md-12">

            <div class="col-md-6" style="float: left">
                <div>
                    <div class="col-lg-3">Title</div><div class="col-lg-9"><input type='text' id="title" /></div>
                    <div class="col-lg-3">Body</div><div class="col-lg-9"><input type='text' id="body" /></div>
                    <div class="col-lg-3">Button</div><div class="col-lg-9"><input type='text' id="button" /></div>
                </div>
                <label for="exampleFormControlTextarea1">Copy & Paste code này vào chỗ cần xuất hiện form đăng ký</label>
                <textarea class="form-control" id="form-code" rows="5"></textarea>
            </div>

            <div class="col-md-6" style="float: left">
                <div class="register-form">
                    <form class="sign-up" action="{{ url('dang-ky/thong-tin') }}" method="post">
                        <h1 class="sign-up-title">Để lại thông tin nhận tư vấn ngay!</h1>
                        <div class="alert-form kee-alert" style="display: none">Thành công</div>
                        <input type="text" class="sign-up-input" name="name" placeholder="Họ tên" autofocus required>
                        <input type="text" class="sign-up-input" name="phone" placeholder="Số điện thoại" required>
                        <input type="submit" value="Gửi thông tin tư vấn" class="sign-up-button">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h2>Mã nhúng Civi</h2>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Mã nhúng Civi</label>
        <textarea class="form-control" id="civi" rows="8"></textarea>
    </div>
    <div class="form-group">
        <label for="height">Height</label>
        <input type="text" class="form-control" id="height" placeholder="Chiều cao" value="255">
    </div>
    <div class="form-group">
        <label for="width">Width</label>
        <input type="text" class="form-control" id="width" placeholder="Chiều rộng" value="100%">
    </div>


    <button type="" class="btn btn-primary" id="get-code">Lấy mã nhúng chuẩn SMART</button>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Kết quả</label>
        <textarea class="form-control" id="smart" rows="8"></textarea>
    </div>
    <hr><hr>
    <h3>Thêm hình ảnh và nút Đăng ký ngay (chưa xong đừng dùng)</h3>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Mã code</label>
        <textarea class="form-control" id="now" rows="5"></textarea>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js"></script>

<script>
    $(document).ready(function () {
        $('#now').val('<h1 id="muahang">ĐĂNG K&Yacute; MUA H&Agrave;NG</h1>'+

            '<p class="col-lg-6"><a href="http://member.civi.vn/cpc/?sid=30429&amp;bid=10037100"><img src="http://review-civi.com/admin/img/upload/cdf467d1dc43eee4e35641881a795170.jpg" /></a></p>'+

            '<p class="col-lg-6"><a href="http://member.civi.vn/cpc/?sid=30429&amp;bid=10037100" target="_blank"><img src="http://review-civi.com/images/dathang.png" /></a></p>');

        $('#get-code').click(function () {
            var height = $('#height').val();
            var width = $('#width').val();

            var code = $('#civi').val();

            var smart = code.replace('<iframe ', '<iframe height="'+height+'" width="'+width+'" ');

            $('#smart').val(smart);
        });

        $('#form-code').val(
            '<div class="register-form"> <form class="sign-up" action="{{ url('dang-ky/thong-tin') }}" method="post"> <h1 class="sign-up-title">Để lại thông tin nhận tư vấn ngay!</h1> <div class="alert-form kee-alert" style="display: none">Thành công</div> <input type="text" class="sign-up-input" name="name" placeholder="Họ tên" autofocus required> <input type="text" class="sign-up-input" name="phone" placeholder="Số điện thoại" required> <input type="submit" value="Gửi thông tin tư vấn" class="sign-up-button"> </form> </div>'
        );

        $("#title").spectrum({
            color: "#0072ff",
            change: function(color) {
                $('.sign-up-title').attr('style', "background: " + color.toHexString());
            },
            move: function(color) {
                var code = $('#form-code').val();

                $('.sign-up-title').attr('style', "background: " + color.toHexString());
            }
        });

        $("#body").spectrum({
            color: "#71b6fe",
            change: function(color) {
                $('.sign-up').attr('style', "background: " + color.toHexString());
            },
            move: function(color) {
                $('.sign-up').attr('style', "background: " + color.toHexString());
            }
        });

        $("#button").spectrum({
            color: "#f0093f",
            change: function(color) {
                $('.sign-up-button').attr('style', "background: " + color.toHexString());
            },
            move: function(color) {
                $('.sign-up-button').attr('style', "background: " + color.toHexString());
            }
        });
    })
</script>
</body>
</html>