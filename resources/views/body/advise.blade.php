@extends('layouts.master')
<link href="{{ asset('./css/advise.css') }}" rel="stylesheet" type="text/css" />
@section('content')
    <div class="container-ct">
        <div class="content-left">
            <h1>Góc tư vấn</h1>
            <div class="data-advise"></div>
        </div>
        <div class="content-right">
            @include('taskbar.contentRight')
        </div>
    </div>
@endsection