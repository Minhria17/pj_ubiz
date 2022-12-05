@extends('layouts.master_admin')    

 @section('title')
     Quản lý danh sách phản hồi
 @endsection

@section('heading')
    Danh sách phản hồi
@endsection

@section('contact')
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
          </div>
        </div>
      </div> 
      <!-- /.card-header -->
    {{-- Body --}}
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th style="text-align: center">STT </th>
          <th style="text-align: center">Tên</th>
          <th style="text-align: center">Số điện thoại</th>
          <th style="text-align: center">Nội Dung</th>
         
          <th style="text-align: center"><i class="fas fa-sliders-h"></i></th>
        </tr>
        </thead>
        <tbody>
            @if (isset($contact) && count($contact) > 0)
            @foreach ($contact as $k => $v)
                
          
           
        <tr>
          <td style="text-align: center">{{ $k + 1 }}</td>
          <td style="text-align: center">{{ $v->name }}</td>
          <td style="text-align: center">{{ $v->phone }}</td>
          <td style="text-align: center">{{ $v->note }}</td>
          <td style="text-align: center">
            <a href="{{ url('admin_ubiz@2022/delete_contact/'.$v->id  ) }}" title="Xóa" style="padding : 1px 7px 3px 8px ; margin-right: 2px; margin-left: 2px; background-color: #FF0000; color: #FFF; display :inline-block; border-radius: 4px;">
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