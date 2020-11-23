@extends('admin.layoutquantri')
@section('pagetitle', 'Tài Khoản') 
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
<form action="users/update/{{$row->id}}" method="get">
    {{ csrf_field()}}
    {!! method_field('patch') !!}
    <div class="card">
        <div class="card-body text-center">
            <h4 class="card-title">Thông tin</h4>
            <div class="profile-pic m-b-20 m-t-20">
                <img src="{{ $row->avatar }}" width="150" class="rounded-circle" alt="user">
                <h4 class="m-t-20 m-b-0">{{$row->name}}</h4>
                <a href="mailto:{{ $row->email }}">{{ $row->email }}</a>
            </div>
            <div class="row text-center m-t-40">
                <div class="col-4">
                    <h3 class="font-bold">@php
                        if($row->user_level_id != NULL){
                        $id=$row->user_level_id;
                        $tl=App\Models\level::find($id);
                        echo $tl->name;
                      }else {
                        echo 'Không';
                      }
                      @endphp</h3>
                    <h6>Level</h6></div>
                <div class="col-4">
                    <h3 class="font-bold">
                        @php
                  if($row->provider == NULL){
                  echo 'Không';
                }else {
                  echo $row->provider;
                }
                @endphp
                </h3>
                    <h6>Provider</h6></div>
                <div class="col-4">
                    <h3 class="font-bold">@php
                        $kq =DB::select("select id, com_user_id from comments");
                        if($row->id != 'com_user_id'){
                            $com_user_id=$row->id;
                        $counttin = DB::table('comments')->count('com_user_id','==',$com_user_id);
                        echo $counttin;
                      }else {
                          echo 0;
                      }
                    @endphp</h3>
                    <h6>Comments</h6></div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12 m-b-20">
            <input type="text" name="name" value="{{ $row->name }}"class="form-control" placeholder="Tên"> </div>
        <div class="col-md-12 m-b-20">
            <input type="text" name="email" value="{{ $row->email }}" class="form-control" placeholder="Email"> </div>
        <div class="col-md-12 m-b-20">
            <input type="text" name="phone" value="{{ $row->phone }}" class="form-control" placeholder="Số điện thoại"> </div>
        <div class="col-md-12 m-b-20">
            <input type="text" name="address" value="{{ $row->address }}" class="form-control" placeholder="Địa chỉ"> </div>
    </div>
    <button type="submit" class="btn btn-info btn-rounded" data-toggle="modal" >Lưu thông tin</button>
</form>
@endsection
