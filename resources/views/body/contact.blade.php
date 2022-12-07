@extends('layouts.master')
<link href="{{ asset('./css/contact.css') }}" rel="stylesheet" type="text/css" />


@php
use App\Models\News;

$new_advises = News::where('idcat','=','6')->select('id','title','img','content')->orderBy('id','desc')->paginate(3);


@endphp

@section('content')
	<div class="contact-title">
        <h1>LIÊN HỆ</h1>
    </div>
    <div class="content-contact">
        <div class="contact-col">
            <div class="contact-left">
                <h2>Liên hệ</h2>
                <img src="https://chuyentienviettrung.vn/wp-content/uploads/2018/09/chuyentien.png" alt="">
                <p> Bạn đang cần liên hệ với chúng tôi để sử dụng dịch vụ ?</p>
                <p><em>Chúng tôi không cung cấp dịch vụ của mình trên facebook. Khách hàng nên chú ý cảnh giác tránh mất tiền đáng tiếc!    </em></p>

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif

                <form  method="POST"  action="{{ url('admin_ubiz@2022/insert_contact') }}" class="contact-form" enctype="multipart/form-data">
                    @csrf
                    <div class="contact-us">
                        <div class="name">
                            <label for="">Họ Và Tên*</label> <br>
                            <input name="name" type="text" maxlength="100" placeholder="Họ và tên của bạn ..." required> 
                        </div>
                        <div class="phone">
                            <label for="">Số Điện Thoại*</label><br>
                            <input name="phone" type="number" maxlength="100" placeholder="Số Điện Thoại..." required>
                        </div>
                        <div class="text">
                            <label for="">Lời nhắn*</label><br>
                           <textarea name="note" id="" cols="30" rows="10" placeholder="Viết lời nhắn ..." required ></textarea>
                        </div>
                        <div class="btn-send">
                            <button type="submit">Gửi thông tin</button>
                        </div>
    
                        
                    </div>
                </form>
    
           </div>
           <div class="contact-right">
                <h4>Văn phòng</h4>
                <div id="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9296826821!2d105.81986521533223!3d21.03549939292326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0c8ddef043%3A0x60c7b2652d09c2d6!2zMjE5IMSQ4buZaSBD4bqlbiwgTmfhu41jIEjhu5MsIEJhIMSQw6xuaCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1669621265634!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="icon-contact">
                    <ul class="contact-list">
                        <li> <i class="fa fa-map-marker"></i><strong>   Địa chỉ:</strong> 219 Đội Cấn, Ba Đình, Hà Nội</li>
                        <li> <i class="fa fa-phone"></i><strong>   Hotline:</strong> 0964 552 688 - Mr. Tuấn Vũ</li>
                        <li> <i class="fa fa-envelope"></i><strong>   Email:</strong> chuyentienchina@gmail.com</li>
                    </ul>
                </div>
    
                <h4>Dịch vụ</h4>
                <div class="list-navbar">
                    <ul class="list-nav">
                        <li><a href="{{ asset('trung-quoc') }}">> Chuyển tiền trung quốc</a></li>
                        <li><a href="{{ asset('trung-quoc-ve-viet-nam') }}">> Chuyển tiền Trung Quốc về Việt Nam</a></li>
                        <li><a href="{{ asset('wechat') }}">> Chuyển tiền Wechat</a></li>
                        <li><a href="{{ asset('nap-tien-alipay') }}">> Nạp tiền Alipay</a></li>
                        <li><a href="">> Order</a></li>
                        <li><a href="">> Vận chuyển hàng từ trung quốc về việt nam</a></li>
                    </ul>
    
    
                </div>
    
                <h4>Góc tư vấn</h4>
                <div class="news_content">
        @foreach($new_advises as $new)
                    <div class="content-news">
                        <img src="./image/{{ $new->img }}" alt="" class="img-news">
                        <h5><a href="{{ asset('tin-tuc/'.$new->id) }}">{{ $new->title }}</a></h5>
                    </div>
        @endforeach           
                </div>
           </div>
        </div>
    </div>
@endsection