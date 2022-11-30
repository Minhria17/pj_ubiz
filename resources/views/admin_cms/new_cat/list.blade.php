@extends('layouts.master_admin')    

 @section('title')
     Quản lý Thể loại tin tức
 @endsection

@section('heading')
   Danh sách Thể loại tin tức
@endsection

@section('news_cat')
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
  
            <a href="{{ url('admin_ubiz@2022/add_news_cat') }}" class="btn btn-block btn-primary" style="width: 100px; background-color : blue;">
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
          <th style="text-align: center">Tên Danh mục tin tức</th>
          <th style="text-align: center">Trạng thái</th>
 
          <th style="text-align: center"><i class="fas fa-sliders-h"></i></th>
        </tr>
        </thead>
        <tbody>
            @if (isset($NewsCategory) && count($NewsCategory) > 0)
            @foreach ($NewsCategory as $k => $v)
                
          
           
        <tr>
          <td style="text-align: center">{{ $k + 1 }}</td>
          <td style="text-align: center">{{ $v->Name }}</td>
          <td style="text-align: center">
            @if ($v->Status == 1)
                Bật
            @else
                Tắt
            
            @endif
        </td>
          
    
          <td style="text-align: center">
            <a href="{{ url('admin_ubiz@2022/edit_news_cat/'.$v->id ) }}" title="Chỉnh sửa" style="padding : 1px 7px 3px 8px ; margin-right: 2px; margin-left: 2px; background-color: #007bff; color: #FFF; display :inline-block; border-radius: 4px;">
              <i style="font-size : 14px" class="fas fa-edit"></i>
            </a>
            <a href="{{ url('admin_ubiz@2022/delete_news_cat/'.$v->id  ) }}" title="Xóa" style="padding : 1px 7px 3px 8px ; margin-right: 2px; margin-left: 2px; background-color: #FF0000; color: #FFF; display :inline-block; border-radius: 4px;">
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