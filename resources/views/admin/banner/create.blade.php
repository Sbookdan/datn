@extends('admin.layoutquantri')
@section('pagetitle', 'THÊM BANNER') 
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
<form action="banner/store" method="get">
  {{ csrf_field()}}
  <div class="card-body">
    <div class="form-group row">
        <label for="com1" class="col-sm-3 text-right control-label col-form-label">Banner</label>
        <div class="col-sm-9">
            <input type="text" name="name" class="form-control" id="com1" placeholder="Tên Banner">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 text-right control-label col-form-label">Banner</label>
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
</div>
<hr>
<div class="card-body">
    <div class="form-group m-b-0 text-right">
        <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
    </div>
</div>
</form>
@endsection
