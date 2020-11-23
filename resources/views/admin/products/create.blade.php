@extends('admin.layoutquantri')
@section('pagetitle', 'THÊM products') 
@section('main')
@if ($errors->any())
      <div class="alert alert-danger">
      <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
<form action="products/store" method="get">
  {{ csrf_field()}} 
  <div class="card-body">
    <div class="form-group row">
        <label for="com1" class="col-sm-3 text-right control-label col-form-label">Sách</label>
        <div class="col-sm-9">
            <input type="text" name="name" class="form-control" id="com1" placeholder="Tên Sách">
        </div>
    </div>
    <div class="form-group row">
      <label for="com1" class="col-sm-3 text-right control-label col-form-label">Giá</label>
      <div class="col-sm-9">
          <input type="text" name="price" class="form-control" id="com1" placeholder="Nhập giá sách">
      </div>
  </div>
  <div class="form-group row">
    <label for="com1" class="col-sm-3 text-right control-label col-form-label">Tác giả</label>
    <div class="col-sm-9">
        <input type="text" name="author" class="form-control" id="com1" placeholder="Tác giả">
    </div>
</div>
<div class="form-group row">
  <label for="com1" class="col-sm-3 text-right control-label col-form-label">Miêu tả</label>
  <div class="col-sm-9">
      <input type="text" name="description" class="form-control" id="com1" placeholder="Miêu tả sách">
  </div>
</div>
<div class="form-group row">
  <label for="com1" class="col-sm-3 text-right control-label col-form-label">Số Lượng</label>
  <div class="col-sm-9">
      <input type="text" name="total_sale" class="form-control" id="com1" placeholder="Số lượng sách">
  </div>
</div>
<div class="form-group row">
  <label class="col-sm-3 text-right control-label col-form-label">Avatar</label>
  <div class="col-sm-9">
      <div class="input-group mb-3">
          <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
          </div>
          <div class="custom-file">
              <input  name="avatar" type="file" class="custom-file-input" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01">Chọn Hình</label>
          </div>
      </div>
  </div>
</div>
    <div class="form-group row">
        <label class="col-sm-3 text-right control-label col-form-label">attached</label>
        <div class="col-sm-9">
        <select name="pro_att_id" class="form-control custom-select">
            <option value="0">Chọn attached</option>
            @foreach($attached as $att)
            <option value='{{$att->id}}'>{{ $att->name }}</option>
          @endforeach
        </select>
        </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-3 text-right control-label col-form-label">publisher</label>
      <div class="col-sm-9">
      <select name="pro_pub_id" class="form-control custom-select">
          <option value="0">Chọn publisher</option>
          @foreach($publisher as $pub)
          <option value='{{$pub->id}}'>{{ $pub->name }}</option>
        @endforeach
      </select>
      </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3 text-right control-label col-form-label">sale</label>
    <div class="col-sm-9">
    <select name="pro_sale_id" class="form-control custom-select">
        <option value="0">Chọn sale</option>
        @foreach($sale as $sa)
        <option value='{{$sa->id}}'>{{ $sa->name }}</option>
      @endforeach
    </select>
    </div>
</div>
</div>
<hr>
<div class="card-body">
    <div class="form-group m-b-0 text-right">
        <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
    </div>
</div>
</form>
@endsection
