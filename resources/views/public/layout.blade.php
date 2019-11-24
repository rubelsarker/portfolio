<!doctype html>
<html lang="en">
<head>
@include('public.partial._head')
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v5.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="105268710943218"
     theme_color="#20cef5">
</div>
<!--================Header Menu Area =================-->
@include('public.partial._header')
<!--================Header Menu Area =================-->
<!--================Home Banner Area =================-->
<!--================End Home Banner Area =================-->
@yield('content')
<!--================ Start Footer Area =================-->
@include('public.partial._footer')
<!--================End Footer Area =================-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@include('public.partial._script')
</body>
</html>