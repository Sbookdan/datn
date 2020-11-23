<div class="card pd-20 pd-sm-40">
@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif
<div class="card-body">
  <h4 class="card-title">Bình luận</h4>
  <div class="table-responsive">
      <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Người comments</th>
                  <th>Sản Phẩm</th>
                  <th>Nội Dung</th>
                  <th>Xóa</th>
              </tr>
          </thead>
          <tbody>
            @foreach($ds as $row) 
              <tr>
                  <td>{{$row->id}}</td>
                  <td>
                    @php
                    if($row->com_user_id != NULL){
                    $id=$row->com_user_id;
                    $tl=App\Models\users::find($id);
                    echo $tl->name;
                  }else {
                    echo $row->com_user_id;
                  }
                  @endphp
                  </td>
                  <td>
                    @php
                    if($row->com_product_id != NULL){
                    $id=$row->com_product_id;
                    $tl=App\Models\products::find($id);
                    echo $tl->name;
                  }else {
                    echo $row->com_product_id;
                  }
                  @endphp
                  </td>
                  <td>{{$row->content_comment}}</td>
                  <td>
                    <form action="comments/destroy/{{$row->id }}" method="get">
                      {{ csrf_field()}}
                      {!! method_field('delete')!!}
                      <button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" onclick="return confirm('Bán Muốn Xóa Comments Này?')"><i class="ti-close" aria-hidden="true"></i></button>
                    </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</div>
        </div><!-- card -->