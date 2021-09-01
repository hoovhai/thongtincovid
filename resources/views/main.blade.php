@include('header')

<body>
    <div class="head">
        <div class="container">
                <div class="row">
                        <div class="title col-md-7">    
                            <p> ThongTinCovid </p>
                            <h1> TRANG THÔNG TIN VỀ DỊCH BỆNH VIÊM ĐƯỜNG HÔ HẤP CẤP COVID - 19 </h1>
                        </div>
                        <div class="col-md-2"> </div>
                        <div class="contact col-md-3">
                            <a class="btn btn-danger mt-3 keep mr-6" id="btnCall" href="tel:19009095" tabindex="1" title="Nhấn enter để kich hoạt">Đường dây nóng <br>19009095</a>
                        </div>
                </div>
        </div>

        <nav class="navcustom">
            <div class="container">
                <nav class="navbar navbar-expand-sm navbar-dark navcustom">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="/">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/dien-bien-dich">DIỄN BIẾN DỊCH BỆNH</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/tin-tuc" >TIN TỨC</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">ĐIỀU CẦN BIẾT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

    @yield('content')
    @yield('content2')

    @include('footer')
</body>

</html>