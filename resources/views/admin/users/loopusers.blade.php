<div class="card pd-20 pd-sm-40">
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    <div class="card-body">
        <h4 class="card-title">Tài Khoản</h4>
        <div class="table-responsive">
            <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                <thead>
                    <tr>
                        <th>ID</th>
                        <td>Avatar</td>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Hạng</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>
                        <th>Quyền hạn</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ds as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>
                            @if($row->provider != '')
                            <img src="{{$row->avatar}}" class="rounded-circle">
                            @elseif($row->avatar != '')
                            <img src="{{ asset('/img/user/'.$row->avatar) }}" class="rounded" width="100px">
                            @else
                            <img class="rounded" src="{{ asset('/img/download.png') }}" alt="" width="100px">
                            @endif
                        </td>
                        <td>
                            {{$row->name}}
                        </td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->phone}}</td>
                        <td>
                            @php
                            if($row->user_level_id != NULL){
                            $id=$row->user_level_id;
                            $tl=App\Models\level::find($id);
                            echo $tl->name;
                            }else {
                            echo $row->user_level_id;
                            }
                            @endphp
                        </td>
                        <td>{{$row->address}}</td>
                        <td>{{($row->remember_token)? "Đang online":"Đang offline"}}</td>
                        <td>
                            @if($row->role==1)
                            <a href="tkupdate/{{$row->id }}/0" class="btn btn-danger">Admin</a>
                            @else
                            <a href="tkupdate/{{$row->id }}/1" class="btn btn-success">Khách</a>
                            @endif
                        </td>
                        <td>
                            <form action="users/destroy/{{$row->id }}" method="get">
                                {{ csrf_field()}}
                                {!! method_field('delete')!!}
                                <button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"
                                    onclick="return confirm('Bán Muốn Xóa Tài khoản Này?')"><i class="ti-close"
                                        aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2">
                            <button type="button" class="btn btn-info btn-rounded" data-toggle="modal"
                                data-target="#add-contact">Thêm Tài Khoản</button>
                        </td>
                        <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Thêm Tài Khoản</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal form-material" action="users/store" method="get">
                                            <div class="form-group">
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Tên">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="Email">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" name="phone" class="form-control"
                                                        placeholder="Số điện thoại">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Password">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" name="address" class="form-control"
                                                        placeholder="Địa chỉ">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <label class="rdiobox">
                                                        <input name="role" type="radio" value="1" checked>
                                                        <span>Admin</span>
                                                    </label> &nbsp;
                                                    <label class="rdiobox">
                                                        <input name="role" type="radio" value="0">
                                                        <span>Khách</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <label class="rdiobox">
                                                        <input name="avatar" type="radio" value="upload/nam.png"
                                                            checked>
                                                        <span>Nam</span>
                                                    </label> &nbsp;
                                                    <label class="rdiobox">
                                                        <input name="avatar" type="radio" value="upload/nu.png">
                                                        <span>Nữ</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-info waves-effect waves-light">Save</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <td colspan="7">
                            <div class="">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination float-right"></ul>
                                </nav>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div><!-- card -->