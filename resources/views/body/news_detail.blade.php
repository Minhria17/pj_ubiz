@extends('layouts.master')
<link href="{{ asset('./css/detail.css') }}" rel="stylesheet" type="text/css" />
@section('content')
    <div class="container-ct">
        <div class="content-left">
            <h1>{{ $news->title }}</h1>
            <div class="content-detail">
                <div class="note-content">
                    <span>{{ $news->slogan }}</span>
                </div><br><br>
                <img style="width: 100%" src="../image/{{ $news->img }}" alt=""><br><br>
                <div class="content" >
                    <span>   {{ $news->content }} </span>
                </div>
            </div>
        </div>
        <div class="content-right">
            @include('taskbar.contentRight')
        </div>
    </div>
@endsection