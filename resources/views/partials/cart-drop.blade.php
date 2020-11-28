@if(count(\Cart::getContent()) > 0)
<li class="list-group-item" style="height: 400px; overflow: auto;font-size: 18px;">
    @foreach(\Cart::getContent() as $item)
    <div class="row">
        <div class="col-lg-3">
            <img src="/img/product/{{ $item->attributes->avatar }}" style="width: 80px; height: 90px;">
        </div>
        <div class="col-lg-6">
            <b>{{$item->name}}</b>
            <br><small>Qty: {{$item->quantity}}</small>
        </div>
        <hr>
    </div>
    @endforeach
</li>
<br>
<li class="list-group-item" style="font-size: 18px;">
    <div class="row">
        <div class="col-lg-10">
            <b>Tổng Cộng: </b>{{ \Cart::getTotal() }}.000 VND
        </div>
        <div class="col-lg-2">
            <form action="{{ route('cart.clear') }}" method="POST">
                {{ csrf_field() }}
                <button class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></button>
            </form>
        </div>
    </div>
</li>
<br>
<div class="row" style="margin: 0px;">
    <a class="btn btn-dark btn-sm btn-block" href="{{ route('cart.index') }}">
        CART <i class="fa fa-arrow-right"></i>
    </a>
    <a class="btn btn-dark btn-sm btn-block" href="{{ route('cart.checkout') }}">
        CHECKOUT <i class="fa fa-arrow-right"></i>
    </a>
</div>
@else
<li class="list-group-item">Your Cart is Empty</li>
@endif