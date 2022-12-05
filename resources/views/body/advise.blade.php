@extends('layouts.master')
<link href="{{ asset('./css/data_news.css') }}" rel="stylesheet" type="text/css" />
@section('content')
    <div class="container-ct">
        <div class="content-left">
            <h1>Góc tư vấn</h1>
            <div class="data-advise">
                <div class="data-first">
                    <div class="box_news">
                        <div class="img_news"><img src="./image/Banner-chuyen-tien-trung-quoc.png" alt=""></div>
                        <div class="title_date">
                          <div class="date">
                            <div class="day"><span>09</span></div>
                            <div class="month"><i>Th.</i><span>08</span></div>
                          </div>
                          <div class="title">
                            <a href="#">{{ $new_advises->title }}</a>
                          </div>
                        </div>
                        <div class="content">
                          <span>{{ $new_advises->content }}</span>
                        </div>
                        <div class="view_more"><span>Đọc tiếp </span><i class="fa fa-long-arrow-right" style="color:#1030e6"></i></div>
                    </div>
                </div>
                <div class="data-list">
                    @foreach($new_advises_child as $new)
                    <div class="data-news">
                        <div class="image">
                            <img src="./image/5e8d886ba310aeae95382792.jpeg" alt=""><br><br>
                            <a href="">Đọc tiếp <i class="fa fa-long-arrow-right" style="color:#1030e6"></i></a>
                        </div>
                        <div class="title-content">
                            <div class="title_date">
                                <div class="date">
                                    <div class="day"><span>09</span></div>
                                    <div class="month"><i>Th.</i><span>08</span></div>
                                </div>
                                <div class="title">
                                    <a href="#">{{ $new->title }}</a>
                                </div>
                            </div>
                            <div class="content">
                                <span>{{ $new->content }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="content-right">
            @include('taskbar.contentRight')
        </div>
    </div>
@endsection