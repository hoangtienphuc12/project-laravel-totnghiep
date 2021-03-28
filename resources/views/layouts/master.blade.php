<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/index.css">
    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    /* height: 100%; */
  }
    
    </style>
</head>

<body>
    <div class="poster">
        <img src="./images/poster.jpg">
    </div>
    <div class="user">
        @if (Auth::check())
            <div class="login">
                {{-- {{ dd(Auth::check()) }} --}}
               Welcome to <strong>{{ Auth::user()->email }}</strong>
            </div>
            <div class="logout">
                <a href="/logout">
                    <span>
                        đăng xuất
                    </span>
                </a>
            </div>
        @else
        <div class="login">
            <a href="/login">
                <span>
                đăng nhập
                </span>
            </a>
        </div>
        <div class="register">
            <a href="/register">
             <span>
                 đăng kí
             </span>
            </a>
        </div>
        @endif
        
    </div>
    <div class="logo">
        <img src="./images/logo.png">
    </div>
    <div class="ke"></div>
    <div class="nav">
        <div class="dropdown">
            <button class="dropbtn">PHIM</button>
            <div class="dropdown-content">
                <a href="#">SẮP CHIẾU</a>
                <a href="#">ĐANG CHIẾU</a>
                <a href="#">XEM NHIỀU</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">RẠP PPP-MOVIE</button>
            <div class="dropdown-content">
                <a href="#">Tất Cả Rạp</a>
                <a href="#">Rạp Đặt Biệt</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Thành Viên</button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Liên Hệ</button>
        </div>
    </div>
    @yield('content')
    <footer class="footer">
    <div class="footer-top">
        <img src="{{ asset('images/brand-footer.png')}}">
    </div>
    <div class="footer-mid">
        <div class="child-s1  child">
            <div class="title">PPP-Movie Việt Nam</div>
            <div>Introduction</div>
            <div>Utilities Oline</div>
            <div>Employer</div>
        </div>
        <div class="child-s2 child">
            <div class="title">PPP-Movie Việt Nam</div>
            <div>Introduction</div>
            <div>Utilities Oline</div>
            <div>Employer</div>
        </div>
        <div class="child-s3 child">
            <div class="title">PPP-Movie Việt Nam</div>
            <div>Introduction</div>
            <div>Utilities Oline</div>
            <div>Employer</div>
        </div>
        <div class="child-s4 child">
            <div class="title">PPP-Movie Việt Nam</div>
            <div>Introduction</div>
            <div>Utilities Oline</div>
            <div>Employer</div>
        </div>
    </div>
    <div class="footer-bottom">
        <img src="./images/logo.png">
        <div class="bottom-title">
            <div>PPP-Movie Việt Nam</div>
            <div>Introduction</div>
            <div>Utilities Oline</div>
            <div>Employer</div>
        </div>
    </div>
    <div class="footer-gach" style="background-image: url({{ asset('images/bottom-footer.jpg') }})">
        
    </div>
</footer>
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {

$(".owl-carousel").owlCarousel({

autoPlay: 3000,
items : 4,
itemsDesktop : [1199,3],
itemsDesktopSmall : [979,3],
center: true,
nav:true,
loop:true,
responsive: {
600: {
items: 4
}
}






});

});
</script>