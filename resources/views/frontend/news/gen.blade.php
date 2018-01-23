<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate form Civi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">

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
        })
    })
</script>
</body>
</html>