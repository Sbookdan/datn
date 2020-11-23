<div class="card pd-20 pd-sm-40">
  @if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
  @endif
  <div class="card">
    <div class="card-body">
      <table class="tablesaw table-striped table-hover table-bordered table" data-tablesaw-mode="columntoggle">
        <thead>
          <tr>
            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">avatar</th>
            <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="2">ID</th>
            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" style="width: 300px;">Name</th>
            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Giá</th>
            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Tác giả</th>
            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2" style="width: 800px;">Mô tả</th>
            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">attached</th>
            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">publisher</th>
            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Sale</th>
            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Chỉnh/Xóa</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($ds as $row)
          <tr>
            <td class="title"><a class="link" href="javascript:void(0)"><img src="{{ asset('img/product/'.$row->avatar) }}" width="100px" alt="Lỗi"></a></td>
            <td>{{ $row->id}}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->price}}</td>
            <td>{{ $row->author}}</td>
            <td>{{ $row->description}}</td>
            <td>{{$row->pro_att_id}}</td>
            <td>{{$row->pro_pub_id}}</td>
            <td>{{$row->sale}}</td>
            <td>
              <form method="get" action="products/destroy/{{$row->id }}">
                {{ csrf_field()}} {!! method_field('delete') !!}
                <a href="products/edit/{{$row->id}}" class="btn btn-primary"> Chỉnh </a>
                <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn muốn xóa sản phẩm này?'); ">Xóa</button>
              </form>
            </td>
          </tr>
          @endforeach
          <tr>
            <a type="button" href="products/create" class="btn btn-info btn-rounded">Thêm Mới</a>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div><!-- card -->