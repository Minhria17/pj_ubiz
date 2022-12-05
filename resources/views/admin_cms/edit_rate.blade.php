@extends('layouts.master_admin')    


 @section('title')
     Tỷ giá
 @endsection

@section('heading')
   Chỉnh sửa Tỷ giá
@endsection

@section('rate')
active
@endsection
 @section('content')
 <div class="col-md-12">
    <!-- general form elements -->
    
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Thông tin </h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="{{ url('admin_ubiz@2022/edit_rate/'.$rate->id)}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="card-body">

            <div class="form-group">
                <label for="exampleInputEmail1">Tỷ lệ mua <span style="color: red">*</span> </label>
                <input type="text" class="form-control" name="purchase_rate" value="{{ $rate->purchase_rate }}" >
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tỷ lệ bán  <span style="color: red">*</span> </label>
                <input type="text" class="form-control" name="selling_rate" value="{{ $rate->selling_rate }}" >
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tỷ lệ thanh toán hộ<span style="color: red">*</span> </label>
                <input type="text" class="form-control" name="payment_rate" value="{{ $rate->payment_rate }}" >
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tỷ lệ quét mã <span style="color: red">*</span> </label>
                <input type="text" class="form-control" name="sweep_rate" value="{{ $rate->sweep_rate }}" >
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