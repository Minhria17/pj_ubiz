@extends('layouts.master')
<link href="{{ asset('./css/news.css') }}" rel="stylesheet" type="text/css" />
@section('content')
    <div class="container-ct">
        <div class="content-left">
            <h1>Tin tức</h1>
            @foreach($news as $new)
            <div class="data-news">
                <div class="image">
                    <img src="./image/{{ $new->img }}" alt=""><br><br>
                    <a href="">Đọc tiếp <i class="fa fa-long-arrow-right" style="color:#1030e6"></i></a>
                </div>
                <div class="title-content">
                    <div class="title_date">
                        <div class="date">

                            @php
                                            $time = explode(' ', $new->created_at);
                                            $a = explode('-', $time[0]);
                                            $day_rs = $a[2];
                                            $month_rs = $a[1];
                            @endphp 

                            <div class="day"><span>{{ $day_rs }}</span></div>
                            <div class="month"><i>Th.</i><span>{{ $month_rs }}</span></div>
                        </div>
                        <div class="title">
                            <a href="{{ asset('tin-tuc/'.$new->id) }}">{{ $new->title }}</a>
                        </div>
                    </div>
                    <div class="content">
                        <span>{{ $new->content }}</span>
                    </div>
                </div>
            </div>
            @endforeach
          
        </div>
        <div class="content-right">
            @include('taskbar.contentRight')
        </div>
    </div>
@endsection