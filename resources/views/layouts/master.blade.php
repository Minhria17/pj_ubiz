<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset=UTF-8>

    <link href="{{ asset('./css/footer.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('./css/header.css') }}" rel="stylesheet" type="text/css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('./css/cdn_css/cdn_slick_min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('./css/cdn_css/cdn_slick_theme_min.css') }}" rel="stylesheet" type="text/css" />
    <title>Ubiz</title>



	

</head>


<body>
    @section('sidebar')
    <header>
        <a href="#" class="logo"><img src="{{ asset('./image/LOGO_Xanh.png') }}" alt=""></a>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" ><i class=" fa fa-bars"> Menu </i></label>

        <nav class="navbar">
            <ul>
                <li><a href="">Trang chủ</a></li>
                <li><a href="">Giới thiệu</a></li>
                <li><a href="">Tỷ Giá Nhân Dân Tệ</a></li>
                <li><a href="">Dịch Vụ</a>
                    <ul>
                        <li><a href="">Chuyển tiền Trung Quốc</a></li>
							<li><a href="">Chuyển Tiền Trung Quốc về Việt Nam</a></li>
							<li><a href="">Thanh toán hộ 1688</a></li>
							<li><a href="">Thanh Toán hộ TaoBao</a></li>
							<li><a href="">Nạp tiền Alipay</a></li>
							<li><a href="">Chuyển tiền Webchat</a></li>
                    </ul>
                </li>
                <li><a href="">Tin Tức</a></li>
                <li><a href="">Góc Tư Vấn</a></li>
                <li><a href="{{ asset('contact') }}">Liên Hệ</a></li>
            </ul>

        </nav>
    </header>
    @show

	
    <div class="container-body">
        @yield('content')
    </div>

    @section('footer')
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-2"> <a href="https://chuyentienviettrung.vn/" target="_blank"> <img
                            alt="Chuyển tiền Việt Trung" class="img-responsive logo" width="150"
                            src="{{ asset('./image/LOGO_Xanh.png') }}">
                    </a>
                    <ul class=" social-icons mt-md">
                        <li class="social-icons-facebook"><a
                                href="https://www.facebook.com/Chuyển-Tiền-Việt-Trung-172969946880545/" target="_blank"
                                title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                                title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Về chúng tôi</h4>
                    <p>Là doanh nghiệp chuyên cung cấp các dịch vụ chuyển tiền, nạp tiền Alipay, vận chuyển, xuất nhập
                        khẩu
                        hàng hoá hai chiều giữa Việt Nam – Trung Quốc… Chuyentienviettrung.vn đã và đang cố gắng hết sức
                        mình nhằm đáp ứng tốt nhất nhu cầu của quý khách hàng.</p>
                </div>
                <div class="col-md-3">
                    <h4>Dịch vụ</h4>
                    <ul class="list list-footer-nav">
                        <li><a href="https://chuyentienviettrung.vn/trung-quoc/" target="_blank">Chuyển tiền trung
                                quốc</a>
                        </li>
                        <li><a href="https://chuyentienviettrung.vn/trung-quoc-ve-viet-nam/" target="_blank">Chuyển tiền
                                Trung Quốc về Việt Nam</a></li>
                        <li><a href="https://chuyentienviettrung.vn/wechat/" target="_blank">Chuyển tiền Wechat</a></li>
                        <li><a href="https://chuyentienviettrung.vn/nap-tien-alipay/" target="_blank">Nạp tiền
                                Alipay</a>
                        </li>
                        <li><a href="https://chuyentienviettrung.vn/order/" target="_blank">Order</a></li>
                        <li><a href="https://chuyentienviettrung.vn/van-chuyen-hang-tu-trung-quoc-ve-viet-nam/"
                                target="_blank">Vận chuyển hàng từ trung quốc về việt nam</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Đăng ký nhận thông tin</h4>
                    <div class="newsletter">
                        {{-- <div class="alert alert-success hidden" id="newsletterSuccess"> <strong>Thành
                                công!</strong> Bạn đã
                            được thêm vào danh sách đăng ký. </div>
                        <div class="alert alert-danger hidden" id="newsletterError"></div> --}}
                        <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST"
                            novalidate="novalidate">
                            <div class="input-group"> <input class="form-control" placeholder="Địa chỉ Email"
                                    name="newsletterEmail" id="newsletterEmail" type="text"> <span
                                    class="input-group-btn">
                                    <button class=" btn-default" type="submit"><i
                                            class="fa fa-paper-plane-o"></i></button> </span></div>
                        </form>
                    </div>
                    <p> <i class="fa fa-map-marker"></i> 219 Đội Cấn, Ba Đình, Hà Nội<br> <i class="fa fa-phone"></i> <a
                            href="tel:0964552688">0964 552 688</a> <i class="fa fa-envelope ml-sm"></i> <a
                            href="mailto:chuyentienchina@gmail.com">chuyentienchina@gmail.com</a></p>
                </div>
            </div> <a
                href="https://www.dmca.com/Protection/Status.aspx?ID=6f30d7e2-8ba6-4cde-9660-385df9a75ac2&amp;refurl=https://chuyentienviettrung.vn/gioi-thieu/"
                title="DMCA.com Protection Status" class="dmca-badge"> <img
                    src="https://images.dmca.com/Badges/dmca_protected_1_120.png?ID=6f30d7e2-8ba6-4cde-9660-385df9a75ac2"
                    alt="DMCA.com Protection Status"></a>
            <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-md-12 center">
                        <p>© Copyright 2017 - 2022 by <a href="https://chuyentienviettrung.vn/"
                                target="_blank">chuyentienviettrung.vn</a></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    @show

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-135017517-1"></script>
    <script>window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-135017517-1');</script>
</body>

<script>
	<script type="text/javascript" src="./js/js_cdn/cdn_slick_min.js"></script>
</script>

</html>