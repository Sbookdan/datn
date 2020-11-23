<div class="card pd-20 pd-sm-40">
@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif
<div class="card-body">
  <h4 class="card-title">Giỏ Hàng</h4>
  <div class="table-responsive">
      <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Sản Phẩm</th>
                  <th>Người Mua</th>
                  <th>Loại Ship</th>
                  <th>Số Lượng</th>
                  <th>Giá Tiền</th>
                  <th>Tình Trạng</th>
                  <th>Xóa</th>
              </tr>
          </thead>
          <tbody>
            @foreach($ds as $row) 
              <tr>
                  <td>{{$row->id}}</td>
                  <td>
                    @php
                    if($row->cart_product_id != NULL){
                    $id=$row->cart_product_id;
                    $tl=App\Models\products::find($id);
                    echo $tl->name;
                  }else {
                    echo $row->cart_product_id;
                  }
                  @endphp
                  </td>
                  <td>
                    @php
                    if($row->cart_user_id != NULL){
                    $id=$row->cart_user_id;
                    $tl=App\Models\users::find($id);
                    echo $tl->name;
                  }else {
                    echo $row->cart_user_id;
                  }
                  @endphp
                  </td>
                  <td>
                    @php
                    if($row->cart_shipping_fee_id != NULL){
                    $id=$row->cart_shipping_fee_id;
                    $tl=App\Models\shipping_fee::find($id);
                    echo $tl->name;
                  }else {
                    echo $row->cart_shipping_fee_id;
                  }
                  @endphp
                  </td>
                  <td>{{$row->number}}</td>
                  <td>{{$row->total}}</td>
                  <td>
                    @php
                        $kq =DB::select("select token, pay_user_id from pay");
                        if($row->id != 'pay_user_id'){
                          $pay_user_id=$row->id;
                    $tl=App\Models\pay::find($pay_user_id);
                          if($tl->token !=1){ 
                    echo '<a href="pay/{{$tl->pay_user_id}}" class="btn btn-danger">Chưa Thanh Toán</a>';
                          }else{
                      echo '<a href="pay/{{$tl->pay_user_id}}" class="btn btn-success">Đã Thanh Toán</a>';
                      
                      }}else {
                        echo '<a href="pay" class="btn btn-danger">Xem trang Pay</a>';
                      }
                    @endphp
                  </td>
                  <td>
                    <form action="comments/destroy/{{$row->id }}" method="get">
                      {{ csrf_field()}}
                      {!! method_field('delete')!!}
                      <button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" onclick="return confirm('Bán Muốn Xóa Cart Này?')"><i class="ti-close" aria-hidden="true"></i></button>
                    </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</div>
        </div><!-- card -->