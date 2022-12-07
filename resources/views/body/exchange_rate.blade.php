@extends('layouts.master')
<link href="{{ asset('./css/exchange_rate.css') }}" rel="stylesheet" type="text/css" />
@section('content')
    <div class="container-ct">
        <div class="content-left">
            <h1>Tỷ giá nhân dân tệ</h1>
            <div class="content-box">
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
            <div class="attention">
                <p><span style="color: #1030e6;"><strong>Chú ý:</strong></span></p>
                <ul type="disc">
                    <li>
                        <span style="color: #1030e6;"><strong>Tỷ giá bán dành cho những khoản tiền chuyển vào tài khoản ngân hàng cá nhân số lượng &gt;100.000 rmb/ 1 giao dịch</strong></span>
                    </li>
                    <li>
                        <span style="color: #1030e6;"><strong>Tỷ giá biến động liên tục nên có thể cập nhật chậm</strong></span>
                    </li>
                    <li>
                        <span style="color: #1030e6;"><strong>Đối với&nbsp; chuyển khoản với số tiền nhỏ hơn hoặc chuyển khoản vào Alipay, Wechat, khách hàng vui lòng liên hệ để biết thêm chi tiết.</strong></span>
                    </li>
                    <li>
                        <span style="color: #1030e6;"><span style="color: #000000;">Quy trình thanh toán hộ 1688 khách hàng tham khảo tại:</span> <strong><a style="color: #1030e6;" href="https://chuyentienviettrung.vn/goc-tu-van/dich-vu-thanh-toan-ho-tren-1688/" target="_blank">dịch vụ thanh toán hộ 1688</a></strong></span>
                    </li>
                    <li>
                        <span style="color: #1030e6;"><span style="color: #000000;">Quy trình thanh toán hộ taobao khách hàng tham khảo tại:</span> <strong><a style="color: #1030e6;" href="https://chuyentienviettrung.vn/goc-tu-van/dich-vu-thanh-toan-ho-tren-taobao-qua-alipay-mot-cach-don-gian-de-dang/" target="_blank">dịch vụ quét mã taobao</a></strong></span>
                    </li>
                </ul>
            </div>
            <div class="note-image">
                <div class="note-content">
                    <span>Hiện nay việc quy đổi đồng nhân dân tệ sang tiền Việt và ngược lại đang được rất nhiều người quan tâm. Và tất nhiên khi quy đổi thì tỷ giá luôn đang là  điều mà bạn hay cập nhất đúng không? Hãy cùng Chuyển tiền Việt Trung xem tỷ giá nhân dân tệ hôm nay và cung cấp địa chỉ và địa chỉ cung cấp tỷ giá tốt nhất.</span>
                </div>
                <div class="image"><img src="./image/ty-gia-nhan-dan-te-hom-nay.jpg" alt=""></div>
            </div>
            <div class="content-infomation">
                <h2>Tỷ giá nhân dân tệ ngày hôm nay được áp dụng cho tất cả các dịch vụ của chúng tôi:</h2>
                <ul tyle="disc">
                    <li>
                        <span style="color: #0000ff;"><strong><a style="color: #0000ff;" href="https://chuyentienviettrung.vn/trung-quoc/dich-vu/" target="_blank">Dịch vụ chuyển tiền sang ngân hàng Trung Quốc chỉ trong vòng 2 phút</a></strong></span>
                    </li>
                    <li>
                        <span style="color: #0000ff;"><strong><a style="color: #0000ff;" href="https://chuyentienviettrung.vn/trung-quoc-ve-viet-nam/1/" target="_blank">Dịch vụ chuyển tiền từ Trung Quốc về Việt Nam</a></strong></span></li><li><span style="color: #0000ff;"><strong><a style="color: #0000ff;" href="https://chuyentienviettrung.vn/nap-tien-alipay/dich-vu-2/" target="_blank">Dịch vụ chuyển tiền Alipay thanh toán mua hàng taobao, 1688</a></strong></span>
                    </li>
                    <li>
                        <span style="color: #0000ff;"><strong><a style="color: #0000ff;" href="https://chuyentienviettrung.vn/goc-tu-van/dich-vu-mua-ban-nap-te-wechat/" target="_blank">Dịch vụ chuyển tiền Wechat</a></strong>&nbsp;</span>
                    </li>
                </ul> 
                <h3>Tỷ giá nhân dân tệ hôm nay là bao nhiêu?</h3>
                <span>Tỷ giá là tỷ lệ trao đổi tiền tệ của hai quốc gia. Nó cho biết được bao nhiêu đơn vị ngoại tê để đổi lấy được một đơn vị nội tệ. Tỷ giá có hai loại đó là tỷ giá mua vào và tỷ giá bán ra. Ở bài viết này chúng ta quan tâm đến tỷ giá đồng nhân dân tệ và Việt Nam đồng.</span><br><br>
                <span>Tỷ giá nhân dân tệ hôm nay được chúng tôi cập nhật liên tục từ giờ, từng phút, từng giây theo tỷ giá tại cửa khẩu.</span>
                <h3>Bạn có thể đổi nhân dân tệ sang tiền Việt bằng cách nào?</h3>
                <span>Hiện nay nhu cầu giao dịch giữa hai nước Việt – Trung đang tăng cao và vì thế nhu cầu đổi giữa hai loại tiền nhân dân tệ và Việt Nam đồng cũng tăng theo.</span><br><br>
                <span>Có rất nhiều cách để bạn chuyển đổi hai loại tiền này và mỗi cách có những ưu nhược điểm khác nhau và tỷ giá của nó cũng có sự thay đổi. Sau đây là ba cách đơn giản nhất để bạn có thể tham khảo:</span>
                <h2>CHUYỂN ĐỔI TIỀN THEO TỶ GIÁ NGÂN HÀNG</h2>
                <img src="./image/ndt-1535508757136367783902.jpg" alt=""><br><br>
                <span>Đây chắc là điểm chuyển đổi đầu tiên bạn nghĩ đến khi muốn chuyển đổi hai loại tiền này đúng không? Bởi vì đến đây bạn sẽ yên tâm về dịch vụ chuyển đổi.</span><br><br>
                <span>Tỷ giá nhân dân tệ hôm nay là bao nhiêu sẽ được ngân  hàng quy định rõ ràng bạn sẽ không phải đắn đo quá nhiều khi muốn chuyển đổi tiền. Tuy nhiên thì tỷ giá nhân dân tệ tại các ngân hàng thì thường cao hơn rất nhiều so với tỷ giá nhân dân tệ chợ đen hôm nay.</span>
                <h2>CHUYỂN ĐỔI TIỀN THÔNG QUA CHỢ ĐEN</h2>
                <span>Do những thủ tục rườm rà của ngân hàng như vậy nên thị trường chợ đen hoạt động khá nhộn nhịp. Bạn có thể đến các tiệm vàng lớn là có thể chuyển đổi được hai đồng tiền này rồi. Khi đến những địa chỉ này bạn chỉ cần mất rất ít thời gian là có thể đổi được tiền.</span><br><br>
                <span>Tuy nhiên khi đổi tiền theo hình thức này thì rủi ro cũng cao hơn ngân hàng. Bạn khó có thể theo dõi tỷ giá nhân dân tệ chợ đen hôm nay là bao nhiêu bởi nó thay đổi khá thất thường. Cùng với chất lượng tiền bạn cũng khó có thể kiểm chứng chính xác.</span><br><br>
                <span>Chúng tôi là đơn vị chuyển tiền uy tín với mục tiêu làm hài lòng khách hàng. Vì thế chất lượng dịch vụ là điều mà chúng tôi quan tâm nhất. Bạn sẽ không phải lo lắng với tốc độ chuyển tiền và phí dịch vụ khi đến với chúng tôi.</span><br><br>
                <img src="./image/chuyentien(1).png" alt="">
                <h2>Hướng dẫn cách quy đổi tiền nhân dân tệ trung quốc sang Việt Nam Đồng:</h2>
                <span>Sau đây chúng tôi xin hướng dẫn mọi người cách quy đổi từ tiền nhân dân tệ sang việt nam đồng và ngược lại để phục vụ nhu cầu đổi tiền trung quốc ngày càng cao. Ở đây đồng nhân dân tệ trở thành hàng hóa để các ngân hàng, dịch vụ chuyển tiền, đổi tiền kinh doanh và mua bán cho nên nó sẽ có tỷ giá mua vào và bán ra để các đơn vị này có thể ăn chênh lệch.</span><br><br>
                <span>Trước khi quy đổi tiền nhân dân tệ – VNĐ chúng ta cần chú ý đến 2 điểm như sau:</span><br><br>
                <ul tyle="disc">
                    <li>Đó là tỷ giá nhân dân tệ chợ đen ngày hôm này bao gồm: tỷ giá mua vào và tỷ giá bán ra.
                        <ul tyle="none">
                            <li>Khi bạn đổi từ tiền nhân dân tệ sang tiền việt nam thì bạn sử dụng tỷ giá mua vào.</li>
                            <li>Khi bạn đổi từ tiền việt nam đồng sang tiền nhân dân tệ thì bạn sử dụng tỷ giá bán ra.</li>
                        </ul>
                    </li>
                    <li>Mỗi một thời điểm quy đổi tỷ giá sẽ luôn khác nhau do ngân hàng nhà nước của Trung Quốc và Việt Nam quy định, các đơn vị chuyển tiền, dịch vụ đổi tiền đều chiếu theo tỷ giá này.</li>
                </ul>
                <p>Sau đây chúng tôi sẽ có một vài ví dụ về cách đổi tiền nhân dân tệ <=> Việt Nam Đồng.</p>
                <a href="https://chuyentienviettrung.vn/wp-content/uploads/2019/02/ty-gia-nhan-dan-te-viet-nam-dong-ngay-hom-nay.jpg" target="_blank"><img class="aligncenter wp-image-526 size-large" src="https://chuyentienviettrung.vn/wp-content/uploads/2019/02/ty-gia-nhan-dan-te-viet-nam-dong-ngay-hom-nay-1024x344.jpg" alt="" width="640" height="215" srcset="https://chuyentienviettrung.vn/wp-content/uploads/2019/02/ty-gia-nhan-dan-te-viet-nam-dong-ngay-hom-nay-1024x344.jpg 1024w, https://chuyentienviettrung.vn/wp-content/uploads/2019/02/ty-gia-nhan-dan-te-viet-nam-dong-ngay-hom-nay-300x101.jpg 300w, https://chuyentienviettrung.vn/wp-content/uploads/2019/02/ty-gia-nhan-dan-te-viet-nam-dong-ngay-hom-nay-768x258.jpg 768w, https://chuyentienviettrung.vn/wp-content/uploads/2019/02/ty-gia-nhan-dan-te-viet-nam-dong-ngay-hom-nay.jpg 1224w" sizes="(max-width: 640px) 100vw, 640px"></a><br><br>
                <span>Chúng tôi sẽ quy đổi từ tiền nhân dân tệ sang việt nam đồng theo tỷ giá ngày 09/02/2019. Ở đây chúng ta sử dụng tỷ giá mua vào là 3350.</span>
                <h2>Giá một nhân dân tệ bằng bao nhiêu tiền Việt Nam</h2>
                <ul tyle="disc">
                    <li>Theo tỷ giá 3350 thì 1 nhân dân tệ = 3,350 VNĐ<br>
                        Tức là một nhân dân tệ đổi được giá là ba nghìn ba trăm năm mươi việt nam đồng.</li>
                    <li>Nếu chúng ta đổi từ tiền việt sang tiền nhân dân tệ thì sử dụng tỷ giá bán ra là 3400 <br>
                        Tức là 3,400 VNĐ = 1 nhân dân tệ<br>
                        Ba nghìn bốn trăm đồng bằng 1 đồng nhân dân tệ.</li>
                </ul>
                <h2>99 nhân dân tệ bằng bao nhiều tiền việt nam </h2>
                <ul tyle="disc">
                    <li>
                        Đổi 99 nhân dân tệ sang tiền Việt theo tỷ giá mua vào 3350 thì <br>
                        99 nhân dân tệ  x 3,350 = 331,650 VNĐ <br>
                        99 nhân dân tệ bằng ba trăm ba mươi mốt nghìn sáu trăm năm mươi đồng.
                    </li>
                    <li>
                        Đổi tiền Việt sang 99 nhân dân tệ Trung Quốc thì theo tỷ giá bán ra 3400 thì <br>
                        99 nhân dân tệ x 3,400 = 336,600 Việt Nam Đồng <br>
                        Ba trăm ba mươi sáu nghìn sáu trăm đồng bằng 99 nhân dân tệ
                    </li>
                </ul>
                <h2>100 nhân dân tệ trung quốc bằng bao nhiều tiền việt nam đồng</h2>
                <ul tyle="disc">
                    <li>
                        Đổi một trăm nhân dân tệ sang tiền Việt theo tỷ giá mua vào 3350 thì <br>
                        100 nhân dân tệ  x 3,350 = 335,000 VNĐ <br>
                        Một trăm nhân dân tệ bằng ba trăm ba mươi lăm nghìn đồng.
                    </li>
                    <li>
                        Đổi tiền Việt sang 100 nhân dân tệ Trung Quốc thì theo tỷ giá bán ra 3400 thì <br>
                        100 nhân dân tệ x 3,400 = 340,000 Việt Nam Đồng <br>
                        Ba trăm bốn mươi nghìn đồng bằng một trăm nhân dân tệ
                    </li>
                </ul>
                <h2>400 nhân dân tệ  bằng bao nhiều tiền việt nam </h2>
                <ul tyle="disc">
                    <li>
                        Đổi 400 nhân dân tệ sang tiền Việt theo tỷ giá mua vào 3350 thì <br>
                        400 nhân dân tệ  x 3,350 = 1,340,000 VNĐ<br>
                        400 nhân dân tệ bằng một triệu ba trăm bốn mươi nghìn đồng.
                    </li> 
                    <li>
                        Đổi tiền Việt sang 400 nhân dân tệ Trung Quốc thì theo tỷ giá bán ra 3400 thì <br>
                        400 nhân dân tệ x 3,400 = 1,360,000 Việt Nam Đồng <br>
                        Một triệu ba trăm sáu mươi nghìn đồng bằng 400 nhân dân tệ
                    </li>
                </ul>
                <h2>600 nhân dân tệ  bằng bao nhiều tiền việt nam </h2>
                <ul tyle="disc">
                    <li>
                        Đổi 600 nhân dân tệ sang tiền Việt theo tỷ giá mua vào 3350 thì <br>
                        600 nhân dân tệ  x 3,350 = 2,010,000 VNĐ <br>
                        600 nhân dân tệ bằng hai triệu không trăm mười nghìn đồng.
                    </li>
                    <li>
                        Đổi tiền Việt sang 600 nhân dân tệ Trung Quốc thì theo tỷ giá bán ra 3400 thì <br>
                        600 nhân dân tệ x 3,400 = 2,040,000 Việt Nam Đồng <br>
                        Hai triệu không trăm bốn mươi nghìn đồng bằng 600 nhân dân tệ
                    </li>
                </ul>
                <h2>1000 nhân dân tệ đổi ra bằng bao nhiều tiền việt nam </h2>
                <ul tyle="disc">
                    <li>
                        Đổi 1000 nhân dân tệ sang tiền Việt theo tỷ giá mua vào 3350 thì <br>
                        1000 nhân dân tệ  x 3,350 = 3,350,000 VNĐ <br>
                        1000 nhân dân tệ bằng ba triệu ba trăm ba mươi lăm nghìn đồng.
                    </li>
                    <li>
                        Đổi tiền Việt sang 1000 nhân dân tệ Trung Quốc thì theo tỷ giá bán ra 3400 thì <br>
                        1000 nhân dân tệ x 3,400 = 3,400,000 Việt Nam Đồng <br>
                        Ba triệu bốn trăm nghìn đồng bằng 1000 nhân dân tệ
                    </li>
                </ul>
                <h2>2000 nhân dân tệ đổi ra bằng bao nhiều tiền việt nam </h2>
                <ul tyle="disc">
                    <li>
                        Đổi 2000 nhân dân tệ sang tiền Việt theo tỷ giá mua vào 3350 thì <br>
                        2000 nhân dân tệ  x 3,350 = 6,700,000 VNĐ <br>
                        2000 nhân dân tệ bằng sáu triệu bảy trăm nghìn đồng.
                    </li>
                    <li>
                        Đổi tiền Việt sang 2000 nhân dân tệ Trung Quốc thì theo tỷ giá bán ra 3400 thì <br>
                        2000 nhân dân tệ x 3,400 = 6,800,000 Việt Nam Đồng <br>
                        Sáu triệu tám trăm nghìn đồng bằng 2000 nhân dân tệ
                    </li>
                </ul>
                <h2>3000 nhân dân tệ bằng bao nhiều tiền việt nam</h2>
                <ul tyle="disc">
                    <li>
                        Đổi 3000 nhân dân tệ sang tiền Việt theo tỷ giá mua vào 3350 thì <br>
                        3000 nhân dân tệ  x 3,350 = 10,050,000 VNĐ <br>
                        3000 nhân dân tệ bằng mười triệu không trăm năm mươi nghìn đồng.
                    </li>
                    <li>
                        Đổi tiền Việt sang 3000 nhân dân tệ Trung Quốc thì theo tỷ giá bán ra 3400 thì <br>
                        3000 nhân dân tệ x 3,400 = 10,200,000 Việt Nam Đồng <br>
                        Mười triệu hai trăm nghìn đồng bằng 3000 nhân dân tệ
                    </li>
                </ul>
                <h2>4000 nhân dân tệ bằng bao nhiều tiền việt nam</h2>
                <ul tyle="disc">
                    <li>
                        Đổi 4000 nhân dân tệ sang tiền Việt theo tỷ giá mua vào 3350 thì <br>
                        4000 nhân dân tệ  x 3,350 = 13,400,000 VNĐ <br>
                        4000 nhân dân tệ bằng mười ba triệu bốn trăm nghìn đồng.
                    </li>
                    <li>
                        Đổi tiền Việt sang 4000 nhân dân tệ Trung Quốc thì theo tỷ giá bán ra 3400 thì <br>
                        4000 nhân dân tệ x 3,400 = 13,600,000 Việt Nam Đồng <br>
                        Mười ba triệu sáu trăm nghìn đồng bằng 4000 nhân dân tệ
                    </li>
                </ul>
                <p>Để quy đổi số tiền hiện tại bạn đang cần, hãy cập nhật ngay tỷ giá nhân dân tệ ngày hôm nay tại <span style="color: #1030e6;"><strong><a style="color: #1030e6;" href="https://chuyentienviettrung.vn/" target="_blank">Chuyển tiền việt trung</a></strong></span>&nbsp;để có thể quy đổi chính xác nhất số tiền bạn cần đổi.</p>
            </div>
        </div>
        <div class="content-right">
            @include('taskbar.contentRight')
        </div>
    </div>
@endsection