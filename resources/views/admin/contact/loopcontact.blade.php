<div class="card pd-20 pd-sm-40">
@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif
<div class="card-body">
  <h4 class="card-title">Liên Hệ</h4>
  <div class="table-responsive">
      <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Tên</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Nội Dung</th>
                  <th>Xóa</th>
              </tr>
          </thead>
          <tbody>
            @foreach($ds as $row) 
              <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->name}}</td>
                  <td><a href="mailto:{{$row->email}}">{{$row->email}}</a></td>
                  <td>{{$row->phone}}</td>
                  <td>{{$row->content}}</td>
                  <td>
                    <form action="contact/destroy/{{$row->id }}" method="get">
                      {{ csrf_field()}}
                      {!! method_field('delete')!!}
                      <button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" onclick="return confirm('Bán Muốn Xóa Contact Này?')"><i class="ti-close" aria-hidden="true"></i></button>
                    </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</div>
        </div><!-- card -->