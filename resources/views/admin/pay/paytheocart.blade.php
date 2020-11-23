<?php
    $dss = DB::table('pay')->select('id', 'pay_user_id', 'pay_payment_methods_id', 'pay_cart_id','token')
    ->join('cart', 'pay.pay_cart_id', '=', 'cart.id')
    ->where('pay.pay.pay_cart_id','=',$idpay_cart_id)
    ->offset(0)->limit(4)->get();
?>
<div class="card pd-20 pd-sm-40">
@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif
<div class="card-body">
  <h4 class="card-title">Thanh Toán</h4>
  <div class="table-responsive">
      <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Người Mua</th>
                  <th>Phương Thức Thanh Toán</th>
                  <th>Giá Tiền</th>
                  <th>Tình Trạng</th>
                  <th>Xóa</th>
              </tr>
          </thead>
          <tbody>
            @foreach($dss as $row) 
              <tr>
                  <td>{{$row->id}}</td>
                  <td>
                    @php
                    if($row->pay_user_id != NULL){
                    $id=$row->pay_user_id;
                    $tl=App\Models\users::find($id);
                    echo $tl->name;
                  }else {
                    echo $row->pay_user_id;
                  }
                  @endphp
                  </td>
                  <td>
                    @php
                    if($row->pay_payment_methods_id != NULL){
                    $id=$row->pay_payment_methods_id;
                    $tl=App\Models\payment_methods::find($id);
                    echo $tl->name;
                  }else {
                    echo $row->pay_payment_methods_id;
                  }
                  @endphp
                  </td>
                  <td>
                    @php
                    if($row->pay_cart_id != NULL){
                    $id=$row->pay_cart_id;
                    $tl=App\Models\Cart::find($id);
                    echo $tl->total;
                  }else {
                    echo $row->pay_cart_id;
                  }
                  @endphp
                  </td>
                  <td>
                    @if($row->token!=1) 
                    <a href="tkup/{{$row->id }}/1" class="btn btn-danger">Chưa Thanh Toán</a>
                      @else
                      <a href="tkup/{{$row->id }}/0" class="btn btn-success">Đã Thanh Toán</a>
                      @endif
                  </td>
                  <td>
                    <form action="pay/destroy/{{$row->id }}" method="get">
                      {{ csrf_field()}}
                      {!! method_field('delete')!!}
                      <button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" onclick="return confirm('Bán Muốn Xóa Pay Này?')"><i class="ti-close" aria-hidden="true"></i></button>
                    </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</div>
        </div><!-- card -->