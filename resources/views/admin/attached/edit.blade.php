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
<form action="attached/update/{{$row->id}}" method="get">
    {{ csrf_field()}}
    {!! method_field('patch') !!}
  <div class="card-body">
    <div class="form-group row">
        <label for="com1" class="col-sm-3 text-right control-label col-form-label">attached</label>
        <div class="col-sm-9">
            <input type="text" name="name"  value="{{ $row->name }}" class="form-control" id="com1" placeholder="Tên attached">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 text-right control-label col-form-label">categories</label>
        <div class="col-sm-9">
        <select name="att_cate_id" class="form-control custom-select">
            @php
            $kq =DB::select("select id, name from categories");
            foreach ($kq as $rowcate) {
        if($row->att_cate_id == $rowcate->id)
        echo "<option value='$rowcate->id' selected> $rowcate->name </option>";
        else
        echo "<option value='$rowcate->id' > $rowcate->name </option>";
            }
            @endphp
            {{-- @foreach($categories as $cate)
            <option value='{{$cate->id}}'>{{ $cate->name }}</option>
          @endforeach --}}
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
