@extends('admin.layoutquantri')
@section('pagetitle', 'THÊM attached') 
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
<form action="products/update/{{$row->id}}" method="get">
    {{ csrf_field()}}
    {!! method_field('patch') !!}
  <div class="card-body">
    <div class="form-group row">
        <label for="com1" class="col-sm-3 text-right control-label col-form-label">Sách</label>
        <div class="col-sm-9">
            <input type="text" name="name"  value="{{ $row->name }}" class="form-control" id="com1" placeholder="Tên Sách">
        </div>
    </div>
    <div class="form-group row">
        <label for="com1" class="col-sm-3 text-right control-label col-form-label">Giá</label>
        <div class="col-sm-9">
            <input type="text" name="price"  value="{{ $row->price }}" class="form-control" id="com1" placeholder="Nhập giá Sách">
        </div>
    </div>
    <div class="form-group row">
        <label for="com1" class="col-sm-3 text-right control-label col-form-label">Tác giả</label>
        <div class="col-sm-9">
            <input type="text" name="author"  value="{{ $row->author }}" class="form-control" id="com1" placeholder="Nhập Tác giả Sách">
        </div>
    </div>
    <div class="form-group row">
        <label for="com1" class="col-sm-3 text-right control-label col-form-label">Miêu tả</label>
        <div class="col-sm-9">
            <input type="text" name="description"  value="{{ $row->description }}" class="form-control" id="com1" placeholder="Miêu tả">
        </div>
    </div>
    <div class="form-group row">
        <label for="com1" class="col-sm-3 text-right control-label col-form-label">Số lượng</label>
        <div class="col-sm-9">
            <input type="text" name="total_sale"  value="{{ $row->total_sale }}" class="form-control" id="com1" placeholder="Số lượng">
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
                    <input  name="avatar" value="{{ $row->avatar }}" type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Chọn Hình</label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 text-right control-label col-form-label">attached</label>
        <div class="col-sm-9">
        <select name="pro_att_id" class="form-control custom-select">
            @php
            $kq =DB::select("select id, name from attached");
            foreach ($kq as $rowatt) {
        if($row->pro_att_id == $rowatt->id)
        echo "<option value='$rowatt->id' selected> $rowatt->name </option>";
        else
        echo "<option value='$rowatt->id' > $rowatt->name </option>";
            }
            @endphp
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 text-right control-label col-form-label">publisher</label>
        <div class="col-sm-9">
        <select name="pro_pub_id" class="form-control custom-select">
            @php
            $kq =DB::select("select id, name from publisher");
            foreach ($kq as $rowpub) {
        if($row->pro_pub_id == $rowpub->id)
        echo "<option value='$rowpub->id' selected> $rowpub->name </option>";
        else
        echo "<option value='$rowpub->id' > $rowpub->name </option>";
            }
            @endphp
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 text-right control-label col-form-label">Sale</label>
        <div class="col-sm-9">
        <select name="pro_sale_id" class="form-control custom-select">
            @php
            $kq =DB::select("select id, name from sale");
            foreach ($kq as $rowsa) {
        if($row->pro_sa_id == $rowsa->id)
        echo "<option value='$rowsa->id' selected> $rowsa->name </option>";
        else
        echo "<option value='$rowsa->id' > $rowsa->name </option>";
            }
            @endphp
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
