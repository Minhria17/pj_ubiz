
<link href="{{ asset('./css/contentRight.css') }}" rel="stylesheet" type="text/css" />

    @php
        use App\Models\News;

        $new_advises = News::where('idcat','=','6')->select('id','title','img','content')->orderBy('id','desc')->paginate(2);


    @endphp

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
    <div class="service">
        <h4>Dịch vụ</h4> 
        <ul class="nav-list">
            <li><a href="{{ asset('trung-quoc') }}" target="_blank">Chuyển tiền trung quốc</a></li>
            <li><a href="{{ asset('trung-quoc-ve-viet-nam') }}" target="_blank">Chuyển tiền Trung Quốc về Việt Nam</a></li>
            <li><a href="{{ asset('wechat') }}" target="_blank">Chuyển tiền Wechat</a></li>
            <li><a href="{{ asset('nap-tien-alipay') }}" target="_blank">Nạp tiền Alipay</a></li>
            <li><a href="#" target="_blank">Order</a></li>
            <li><a href="#" target="_blank">Vận chuyển hàng từ trung quốc về việt nam</a></li>
        </ul>
    </div>
    <div class="advise">
        <h4>Góc tư vấn</h4>
        @foreach($new_advises as $new)
            <div class="box-data">
                <div class="img"><a href=""><img src="../image/{{ $new->img }}" alt=""></a></div>
                <div class="title">
                    <a href="{{ asset('tin-tuc/'.$new->id) }}">{{ $new->title }}</a>
                </div>
            </div>
        @endforeach
            
    </div>
    <div class="contact">
        <h4>Liên hệ</h4>
        <span>Liên hệ với chúng tôi để được hỗ trợ tư vấn kịp thời.</span>
        <form method="POST" action="{{ url('admin_ubiz@2022/insert_contact') }}" enctype="multipart/form-data">
            @csrf
            <div class="name">
                <span>Họ và tên *</span><br>
                <input type="text" name="name" id="name_contact" required>
            </div>
            <div class="phone">
                <span>Số điện thoại *</span><br>
                <input type="number" name="phone" id="phone_contact" required>
            </div>
            <div class="message">
                <span>Lời nhắn *</span><br>
                <textarea id="note_contact" name="note" id="" cols="20" rows="5"></textarea>
            </div>
            <div class="btn-send">
                <button type="submit">Gửi thông tin</button>
            </div>
        </form>
    </div>
    