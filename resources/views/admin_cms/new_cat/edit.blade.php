@extends('layouts.master_admin')    

@section('title')
    Quản lý Danh mục tin tức
@endsection

@section('heading')
   Chỉnh sửa Danh mục tin tức
@endsection

@section('news_cat')
active
@endsection
@section('content')
<div class="col-md-12">
   <!-- general form elements -->
   <a href="{{ url('admin_ubiz@2022/list_news_cat') }}" class="btn btn-block btn-primary" style="width : 100px ; background-color: green">Quay lại </a>
   <br>
   <div class="card card-primary">
     <div class="card-header">
       <h3 class="card-title">Thông tin </h3>
     </div>
     <!-- /.card-header -->
     <!-- form start -->
     <form role="form" action="{{ url('admin_ubiz@2022/edit_news_cat/'.$NewsCategory->id)}}" method="POST">
       <input type="hidden" name="_token" value="{{ csrf_token() }}" />
       <div class="card-body">
          
             
             <div class="form-group">
               <select  class="form-control" name="Status">
                  <option value="1" @if ($NewsCategory->Status == 1)
                      selected =""
                  @endif>
                   Trạng thái :Bật
               </option>
                  <option value="0" @if ($NewsCategory->Status == 0)
                   selected =""
               @endif>
                   Trạng thái :Tắt
               </option>
               </select>
             </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Tên Danh mục <span style="color: red">*</span> </label>
           <input type="text" class="form-control" name="Name" value="{{ $NewsCategory->Name }}" >
         </div>
         
        
       <!-- /.card-body -->

       <div class="card-footer">
         <button type="submit" class="btn btn-primary">Chỉnh sửa </button>
       </div>
     </form>
   </div>
   <!-- /.card -->


   
 </div>
@endsection    