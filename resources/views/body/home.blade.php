@extends('layouts.master')
<link href="{{ asset('./css/home.css') }}" rel="stylesheet" type="text/css" />
@section('content')
	  <div class="block_1">
        <div class="mySlides"><img src="./image/Banner-chuyen-tien-trung-quoc.png" alt=""></div>
        <div class="mySlides"><img src="./image/banner2-chuyen-tien-trung-quoc.png" alt=""></div>
    </div>
    <div class="block_2">
        <div class="title_b2">
          <h2>Chuyển Tiền Trung Quốc</h2>
          <span>UyTín - Nhanh chóng - Đơn giản - An toàn</span>
        </div>
        <div class="about_b2">
          <span>chuyentienviettrung.vn là địa chỉ uy tín giúp bạn kết nối với đối tác ở Trung Quốc hay người thân của mình.  Chúng tôi có thể làm được gì?
            Chúng tôi giúp các bạn chuyển tiền một cách nhanh chóng để công việc kinh doanh của bạn tiếp tục trôi chảy.
            Ngoài ra các bạn còn có thể nhận được tiền gửi về từ Trung Quốc mà người nhà gửi cho cho mình.  Thành công của chúng tôi đến từ khách hàng của mình:
            Các bạn chỉ cần sử dụng dịch vụ và yên tâm với số tiền của mình sẽ được chuyển đúng địa chỉ một cách nhanh nhất.  Tạo kết nối.
            Tham gia cộng đồng của chúng tôi trên facebook để kết nối ngay lập tức với anh em dân buôn hàng trung quốc ngay lập tức.</span><br><br>
            <a href="#">Chuyển tiền ngay để trải nghiệm dịch vụ!!!  <i class="fa fa-long-arrow-right" style="color:#1030e6"></i></a>
        </div>
    </div>
    <div class="block_3">
      <div class="title_b3">
        <h2>TỈ GIÁ QUY ĐỔI</h2>
      </div>
      <div class="coutdown">
        <span class="time" id="converter_clock"></span>, <span class="date" id="current-time"></span>
      </div>
      <div class="box_exchange_rate">
        <div class="box_1">
          <h2>TỈ GIÁ MUA</h2>
          <span>{{ $rate->purchase_rate }}</span>
        </div>
        <div class="box_2">
          <h2>TỈ GIÁ BÁN</h2>
          <span>{{ $rate->selling_rate }}</span>
        </div>
        <div class="box_3">
          <h2>TỈ GIÁ THANH TOÁN HỘ 1688</h2>
          <span>{{ $rate->payment_rate }}</span>
        </div>
        <div class="box_4">
          <h2>TỈ GIÁ QUÉT MÃ TAOBAO</h2>
          <span>{{ $rate->sweep_rate}}</span>
        </div>
      </div>
    </div>
    <div class="block_4">
      <div class="title_b4">
        <h2>Tin mới nhất</h2>
        <a href="#">Xem thêm tin tức</a>
      </div>
      <div class="data_news">
        @foreach($news_hot as $new)
        <div class="box_news">
          <div class="img_news"><img src="./image/{{ $new->img }}" alt=""></div>
          <div class="title_date">
            <div class="date">
              <div class="day"><span>09</span></div>
              <div class="month"><i>Th.</i><span>08</span></div>
            </div>
            <div class="title">
              <a href="{{ asset('tin-tuc/'.$new->id) }}">{{ $new->title }}</a>
            </div>
          </div>
          <div class="content">
            <span>{{ $new->content }}</span>
          </div>
          <div class="view_more"><span>Đọc tiếp </span><i class="fa fa-long-arrow-right" style="color:#1030e6"></i></div>
        </div>
        @endforeach
     
      </div>
    </div>
    <div class="block_4">
      <div class="title_b4">
        <h2>Góc tư vấn</h2>
        <a href="#">Xem thêm bài viết</a>
      </div>
      <div class="data_news">
        @foreach($new_advises as $new_advise)
        <div class="box_news">
          <div class="img_news"><img src="./image/Banner-chuyen-tien-trung-quoc.png" alt=""></div>
          <div class="title_date">
            <div class="date">
              <div class="day"><span>09</span></div>
              <div class="month"><i>Th.</i><span>08</span></div>
            </div>
            <div class="title">
              <a href="{{ asset('tin-tuc/'.$new_advise->id) }}">{{ $new_advise->title }}</a>
            </div>
          </div>
          <div class="content">
            <span>{{ $new_advise->content }}</span>
          </div>
          <div class="view_more"><span>Đọc tiếp </span><i class="fa fa-long-arrow-right" style="color:#1030e6"></i></div>
        </div>
        @endforeach
   
      </div>
    </div>
    <div class="block_5">
      <div class="title_b5">
        <h2>Dịch vụ</h2>
        <span>Các dịch vụ tại chuyentienviettrung.vn</span>
      </div>
      <div class="data_transfers">
        @foreach($new_services as $new_service)
        <div class="box_transfers">
          <div class="img"><img src="./image/Banner-chuyen-tien-trung-quoc.png" alt=""></div>
          <div class="content">
            <div class="title">
              <a href="{{ asset('tin-tuc/'.$new_service->id) }}">{{ $new_service->title }}</a><br>
              <span>Dịch vụ chuyển tiền Trung Quốc</span>
            </div>
            <div class="text_ct">
              <span>{{ $new_service->content }}</span>
            </div>
            <div class="view_more"><span>Tìm hiểu thêm </span><i class="fa fa-long-arrow-right" style="color:#1030e6"></i></div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
    <div class="block_6">
      <div class="title_b6">
        <h2>Hỗ trợ thanh toán</h2>
      </div>
      <div class="content_bank">
        <div class="slick-slide-bank">
          <div class="img_bank"><img src="./image/foody-upload-api-foody-mobile-agribank-190123165100.jpg" alt=""></div>
          <div class="img_bank"><img src="./image/foody-upload-api-foody-mobile-techcombank-190123093622.jpg" alt=""></div>
          <div class="img_bank"><img src="./image/ngan-hang-BIDV.jpg" alt=""></div>
          <div class="img_bank"><img src="./image/thebank_logonganhangvcb_1620178788.jpg" alt=""></div>
          <div class="img_bank"><img src="./image/ve-may-bay-sa-com-bank-da-ly-khong.jpg" alt=""></div>
          <div class="img_bank"><img src="./image/bieu-tuong-vietinbank.jpg" alt=""></div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript">
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) { 
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 7000);
        }
    </script>
@endsection