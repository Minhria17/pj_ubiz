@extends('layouts.master')
<link href="{{ asset('./css/detail.css') }}" rel="stylesheet" type="text/css" />
@section('content')
    <div class="container-ct">
        <div class="content-left">
            <h1>Dịch vụ thanh toán hộ trên taobao qua Alipay một cách đơn giản, dễ dàng</h1>
            <div class="content-detail">
                <div class="note-content">
                    <span>Hiện nay việc quy đổi đồng nhân dân tệ sang tiền Việt và ngược lại đang được rất nhiều người quan tâm. Và tất nhiên khi quy đổi thì tỷ giá luôn đang là  điều mà bạn hay cập nhất đúng không? Hãy cùng Chuyển tiền Việt Trung xem tỷ giá nhân dân tệ hôm nay và cung cấp địa chỉ và địa chỉ cung cấp tỷ giá tốt nhất.</span>
                </div><br><br>
                <img style="width: 100%" src="./image/china-ethnic-map-650-1.jpg" alt=""><br><br>
                <div class="content">
                    <span>adassda</span>
                </div>
            </div>
        </div>
        <div class="content-right">
            @include('taskbar.contentRight')
        </div>
    </div>
@endsection