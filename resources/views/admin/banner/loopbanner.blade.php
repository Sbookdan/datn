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
                  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Banner</th>
                  <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">ID</th>
                  <!-- <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Name</th> -->
                  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Chỉnh/Xóa</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($ds as $row)
              <tr>
                  <td class="title"><a class="link" href="javascript:void(0)"><img src="{{ asset('/img/banner/'.$row->avatar) }}" width="500px" alt="Lỗi"></a></td>
                  <td>{{ $row->id}}</td>
                  <!-- <td>{{ $row->name}}</td> -->
                  <td>                         
                    <form method="get" action="banner/destroy/{{$row->id }}"> 
                    {{ csrf_field()}} {!! method_field('delete') !!}
                    <a href="banner/edit/{{$row->id}}" class="btn btn-primary"> Chỉnh </a>
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn muốn xóa tin này?'); ">Xóa</button>
                    </form>
                  </td>
              </tr>
              @endforeach
              <tr>
                <a type="button"href="banner/create" class="btn btn-info btn-rounded" >Thêm Mới</a>
              </tr>
          </tbody>
      </table>
  </div>
</div>
        </div><!-- card -->

