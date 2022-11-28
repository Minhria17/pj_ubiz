@extends('layouts.master')
<link href="{{ asset('./css/contact.css') }}" rel="stylesheet" type="text/css" />
@section('content')
	<div>
        <h1>LIÊN HỆ</h1>
    </div>
    <div class="content-contact">
        <div class="contact-col">
            <div class="contact-left">
                <h2>Liên hệ</h2>
                <img src="https://chuyentienviettrung.vn/wp-content/uploads/2018/09/chuyentien.png" alt="">
                <p> Bạn đang cần liên hệ với chúng tôi để sử dụng dịch vụ ?</p>
                <p><em>Chúng tôi không cung cấp dịch vụ của mình trên facebook. Khách hàng nên chú ý cảnh giác tránh mất tiền đáng tiếc!    </em></p>
                <form action="">
                    <div class="contact-us">
                        <div class="name">
                            <label for="">Họ Và Tên*</label>
                            <input type="text" maxlength="100">
                        </div>
                        <div class="phone">
                            <label for="">Số Điện Thoạ<i></i></label>
                            <input type="number" maxlength="100">
                        </div>
                        <div class="name">
                            <label for="">Lời nhắn*</label>
                            <input type="text"  height="100px" height="100px">
                        </div>
                        <input value="Gửi thông tin" class="btn-submit" data-loading-text="Đang gửi..." type="submit">
    
                        
                    </div>
                </form>
    
           </div>
           <div class="contact-right">
                <h4>Văn phòng</h4>
                <div id="google-map">
    
                </div>
                <div class="icon-contact">
                    <ul class="contact-list">
                        <li> <i class="fa fa-envelope ml-sm"></i><strong>Địa chỉ:</strong> 219 Đội Cấn, Ba Đình, Hà Nội</li>
                        <li> <i class="fa fa-envelope ml-sm"></i><strong>Địa chỉ:</strong> 219 Đội Cấn, Ba Đình, Hà Nội</li>
                        <li> <i class="fa fa-envelope ml-sm"></i><strong>Địa chỉ:</strong> 219 Đội Cấn, Ba Đình, Hà Nội</li>
                    </ul>
                </div>
    
                <h4>Dịch vụ</h4>
                <div class="list-navbar">
                    <ul class="list-nav">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
    
    
                </div>
    
                <h4>Góc Tư Vấn</h4>
           </div>
        </div>
    </div>
@endsection