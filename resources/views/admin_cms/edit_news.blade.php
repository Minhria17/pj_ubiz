@extends('layouts.master_admin')    


 @section('title')
     Quản lý Danh sách tin tức
 @endsection

@section('heading')
   Chỉnh sửa tin tức
@endsection

@section('news')
active
@endsection
 @section('content')
 <div class="col-md-12">
    <!-- general form elements -->
    <a href="{{ url('admin_ubiz@2022/news') }}" class="btn btn-block btn-primary" style="width : 100px ; background-color: green">Quay lại </a>
    <br>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Thông tin </h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="{{ url('admin_ubiz@2022/edit_news/'.$news->id)}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="card-body">
           
          <div class="form-group">
            <select  class="form-control" name="idcat">

                @if (isset($NewsCategory) && count($NewsCategory)>0)
                @foreach ($NewsCategory as $k=>$v )
                <option value="{{ $v->id }}"  @if($news->idcat == $v->id ) selected="" @endif>
                   Danh mục :  {{ $v->Name }}
                </option>
                @endforeach
                @endif
              
            
            </select>
          </div>  


            <div class="form-group">
                <label for="exampleInputEmail1">Tên Tin tức <span style="color: red">*</span> </label>
                <input type="text" class="form-control" name="Title" value="{{ $news->title }}" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Thêm Ảnh  </label>
                <textarea name="Img" id="" class="form-control" rows="2">{{ $news->img }}</textarea>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Mô tả tin tức <span style="color: red">*</span> </label>
                <textarea name="Content" id="editor" class="form-control" rows="8">{{ $news->content }}</textarea>
               
              </div>
         
          
         
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

 
    
  </div>
@endsection    