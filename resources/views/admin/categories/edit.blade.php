@extends('admin.layoutquantri')
@section('pagetitle', 'THÊM categories') 
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
<form action="categories/update/{{$row->id}}" method="get">
    {{ csrf_field()}}
    {!! method_field('patch') !!}
  <div class="card-body">
    <div class="form-group row">
        <label for="com1" class="col-sm-3 text-right control-label col-form-label">categories</label>
        <div class="col-sm-9">
            <input type="text" name="name"  value="{{ $row->name }}" class="form-control" id="com1" placeholder="Tên categories">
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
