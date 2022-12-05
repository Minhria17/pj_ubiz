@extends('layouts.master_admin')    

 @section('title')
     Quản lý danh sách tin tức
 @endsection

@section('heading')
    Danh sách tin tức
@endsection

@section('news')
active
@endsection
 
 @section('content')
 <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        
        <div class="row">
          <div class="col-md-6">
            <h1 class="card-title">Danh sách </h1>
          </div>
          <div class="col-md-6">
  
            <a href="{{ url('admin_ubiz@2022/add_news') }}" class="btn btn-block btn-primary" style="width: 100px; background-color : blue;">
             Thêm
            </a>
          </div>
        </div>

      </div> 
      
      <!-- /.card-header -->
    {{-- Body --}}
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th style="text-align: center">STT </th>
          <th style="text-align: center">Tên Tin tức</th>
          <th style="text-align: center" class="okela" >Thuộc danh mục</th>
          <th style="text-align: center">Ảnh </th>
          <th style="text-align: center">Nội Dung</th>
         
          <th style="text-align: center"><i class="fas fa-sliders-h"></i></th>
        </tr>
        </thead>
        <tbody>
            @if (isset($news) && count($news) > 0)
            @foreach ($news as $k => $v)
                
          
           
        <tr>
          <td style="text-align: center">{{ $k + 1 }}</td>
          <td style="text-align: center">{{ $v->title }}</td>
          <td style="text-align: center">{{ $v->CategoryName }}</td>
          <td style="text-align: center">{{ $v->img }}</td>
          <td style="text-align: center">{{ $v->content }}</td>
      
    
          <td style="text-align: center">
            <a href="{{ url('admin_ubiz@2022/edit_news/'.$v->id ) }}" title="Chỉnh sửa" style="padding : 1px 7px 3px 8px ; margin-right: 2px; margin-left: 2px; background-color: #007bff; color: #FFF; display :inline-block; border-radius: 4px;">
              <i style="font-size : 14px" class="fas fa-edit"></i>
            </a>
            <a href="{{ url('admin_ubiz@2022/delete_news/'.$v->id  ) }}" title="Xóa" style="padding : 1px 7px 3px 8px ; margin-right: 2px; margin-left: 2px; background-color: #FF0000; color: #FFF; display :inline-block; border-radius: 4px;">
                <i  class="fas fa-trash-alt"></i>
              </a>
          </td>
        </tr>
        @endforeach 
        @endif
        </tbody>
      
      </table>

 
    
  </div>
@endsection    