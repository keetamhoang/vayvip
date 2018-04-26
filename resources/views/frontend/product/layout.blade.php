<!DOCTYPE html>

<html lang="en">
<head>
    @yield('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '179869195992101');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=179869195992101&ev=PageView&noscript=1" alt="Khuyến mại mã giảm giá cực HOT"
    /></noscript>
<!-- End Facebook Pixel Code -->
@yield('body')
<script>
    $(document).ready(function () {
        setTimeout(showPopup, 9000);

        function showPopup() {
            $('#myModal').modal('show');
        }
    })
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>