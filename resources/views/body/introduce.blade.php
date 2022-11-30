@extends('layouts.master')
<link href="{{ asset('./css/introduce.css') }}" rel="stylesheet" type="text/css" />
@section('content')
    <div class="container-ct">
        <div class="content-left">
                <div class="img-title">
                    <h1>Giới thiệu</h1>
                    <img src="./image/Blog_Hotspot-Shield_Best-US-Banks-for-Online-Shopping.jpg" alt="">
                </div>
                <div class="content-title">
                    <div class="ct-1">
                        <h2>Chuyển tiền Trung Quốc</h2>
                        <span>Chuyentienviettrung.vn là tổ chức được xây dựng dựa trên niềm tin qua từng giao dịch của khách hàng. Chúng tôi được trao quyền để thực hiện đúng những gì khách hàng yêu cầu để khách hàng được thành công. Chúng tôi là đối tác cung cấp các dịch vụ chuyển tiền, nạp tiền alipay, chuyển hàng hóa 2 chiều Việt Nam- Trung Quốc một cách an toàn, uy tín, đơn giản và thuận tiện. Chúng tôi ở đây để thực hiện sứ mệnh thực thi những gì khách hàng muốn.</span>
                    </div>
                    <div class="ct-2">
                        <h2>Doanh nghiệp của chúng tôi</h2>
                        <span>Công việc kinh doanh của chúng tôi là nền tảng cơ bản bao gồm: kết nối khách hàng với Trung Quốc, các doanh nghiệp thương mại, xưởng sản xuất lớn, nhỏ với hầu hết các dịch vụ, sản phẩm mà khách hàng đang kinh doanh. Thông qua triết lý “niềm tin đến từ những điều nhỏ nhất“, chúng tôi sẽ cung cấp tất cả những gì đang có để phục vụ khách hàng.</span>
                    </div>
                </div>
        </div>
        <div class="content-right">
            @include('taskbar.contentRight')
        </div>
    </div>
@endsection