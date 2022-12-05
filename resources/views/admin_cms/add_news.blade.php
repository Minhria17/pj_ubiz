@extends('layouts.master_admin')    

 @section('title')
     Quản lý Danh sách tin tức
 @endsection

@section('heading')
   Thêm tin tức
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
      <form role="form" action="{{ url('admin_ubiz@2022/add_news')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="card-body">
           
             
          <div class="form-group">
            <select  class="form-control" name="idcat">

                @if (isset($NewsCategory) && count($NewsCategory)>0)
                @foreach ($NewsCategory as $k=>$v )
                <option value="{{ $v->id }}">
                    {{ $v->Name }}
                </option>
                @endforeach
                @endif
              
            
            </select>
          </div>
              

          <div class="form-group">
            <label for="exampleInputEmail1">Tên Tin tức <span style="color: red">*</span> </label>
            <input type="text" class="form-control" name="Title" value="" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Thêm Ảnh  </label>
            <input type="file" name="img">
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Mô tả tin tức <span style="color: red">*</span> </label>
            <textarea name="Content" class="form-control" rows="8" ></textarea>
           
          </div>

          {{-- <div class="form-group">
            <textarea id="compose-textarea" class="form-control" style="height: 300px">
             
            </textarea>
        </div> --}}

         
          
         
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

 
    
  </div>

  <script>
    $(function () {
      //Add text editor
      $('#compose-textarea').summernote()
    })
  </script>


@endsection    