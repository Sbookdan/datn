@extends('layouts.layout')

@section('title', 'Cart')

@section('style')
    <style>
    .product-image {
        float: left;
        width: 20%;
    }

    .product-details {
        float: left;
        width: 37%;
    }

    .product-price {
        float: left;
        width: 12%;
    }

    .product-quantity {
        float: left;
        width: 10%;
    }

    .product-removal {
        float: left;
        width: 9%;
    }

    .product-line-price {
        float: left;
        width: 12%;
        text-align: right;
    }

    /* This is used as the traditional .clearfix class */
    .group:before,
    .shopping-cart:before,
    .column-labels:before,
    .product:before,
    .totals-item:before,
    .group:after,
    .shopping-cart:after,
    .column-labels:after,
    .product:after,
    .totals-item:after {
        content: '';
        display: table;
    }

    .group:after,
    .shopping-cart:after,
    .column-labels:after,
    .product:after,
    .totals-item:after {
        clear: both;
    }

    .group,
    .shopping-cart,
    .column-labels,
    .product,
    .totals-item {
        zoom: 1;
    }

    /* Body/Header stuff */
    body {
        padding: 0px 30px 30px 20px;
        font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-weight: 100;
    }

    h1 {
        font-weight: 100;
    }

    label {
        color: #aaa;
    }

    .shopping-cart {
        margin-top: -45px;
    }

    /* Column headers */
    .column-labels label {
        padding-bottom: 15px;
        margin-bottom: 15px;
        border-bottom: 1px solid #eee;
    }

    .column-labels .product-image,
    .column-labels .product-details,
    .column-labels .product-removal {
        text-indent: -9999px;
    }

    /* Product entries */
    .product {
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
    }

    .product .product-image {
        text-align: center;
    }

    .product .product-image img {
        width: 100px;
    }

    .product .product-details .product-title {
        margin-right: 20px;
        font-family: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';
    }

    .product .product-details .product-description {
        margin: 5px 20px 5px 0;
        line-height: 1.4em;
    }

    .product .product-quantity input {
        width: 40px;
    }

    .product .remove-product {
        border: 0;
        padding: 4px 8px;
        background-color: #c66;
        color: #fff;
        font-family: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';
        font-size: 12px;
        border-radius: 3px;
    }

    .product .remove-product:hover {
        background-color: #a44;
    }

    /* Totals section */
    .totals .totals-item {
        float: right;
        clear: both;
        width: 100%;
        margin-bottom: 10px;
    }

    .totals .totals-item label {
        float: left;
        clear: both;
        width: 79%;
        text-align: right;
    }

    .totals .totals-item .totals-value {
        float: right;
        width: 21%;
        text-align: right;
    }

    .totals .totals-item-total {
        font-family: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';
    }

    .checkout {
        float: right;
        border: 0;
        margin-top: 20px;
        padding: 6px 25px;
        background-color: #6b6;
        color: #fff;
        font-size: 25px;
        border-radius: 3px;
    }

    .shipping {
        float: right;
        border: 0;
        margin-top: 20px;
        padding: 6px 25px;
        color: #fff;
        font-size: 25px;
        border-radius: 3px;
    }

    .checkout:hover {
        background-color: #494;
    }

    /* Make adjustments for tablet */
    @media screen and (max-width: 650px) {
        .shopping-cart {
            margin: 0;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .column-labels {
            display: none;
        }

        .product-image {
            float: right;
            width: auto;
        }

        .product-image img {
            margin: 0 0 10px 10px;
        }

        .product-details {
            float: none;
            margin-bottom: 10px;
            width: auto;
        }

        .product-price {
            clear: both;
            width: 70px;
        }

        .product-quantity {
            width: 100px;
        }

        .product-quantity input {
            margin-left: 20px;
        }

        .product-quantity:before {
            content: 'x';
        }

        .product-removal {
            width: auto;
        }

        .product-line-price {
            float: right;
            width: 70px;
        }
    }

    /* Make more adjustments for phone */
    @media screen and (max-width: 350px) {
        .product-removal {
            float: right;
        }

        .product-line-price {
            float: right;
            clear: left;
            width: auto;
            margin-top: 10px;
        }

        .totals .totals-item label {
            width: 60%;
        }

        .totals .totals-item .totals-value {
            width: 40%;
        }
    }
    .card-1 {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: none;
    border-radius: 0.25rem;
    }
    </style>
@stop

@section('content')
<div class="container" style="margin-top: 80px">
    @foreach($pay as $p)
    @if($p->status == 01)

    <div class="card-1 text-center">
        <div class="card-header">
            <h3>Lưu Ý</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">Giỏ Hàng Của Bạn Chưa Có Sản Phẩm Nào</h5>
            <form action="{{route('products')}}" method="get">
                <button type="button" class="btn btn-lg btn-outline-primary">Tiếp Tục Mua Sắm</button>
            </form>
        </div>
    </div>

    @else
    @foreach($carts as $item)
    <form action="{{ route('cart.id.checkout',$item->id) }}" method="get" id="apply-inquiry"
        enctype="multipart/form-data">
        @csrf
        <div class="shopping-cart">
            <div class="column-labels">
                <label class="product-image">Hình</label>
                <label class="product-details">Tên Sản Phẩm</label>
                <label class="product-price">Giá</label>
                <label class="product-quantity">Số Lượng</label>
                <label class="product-removal">Xóa Sản Phẩm</label>
                <label class="product-line-price">Tổng</label>
            </div>
            @foreach($carts as $item)
            <div class="product">
                <div class="product-image">
                    <img src="{{ asset('/img/product/'.$item->product_avatar) }}">
                </div>
                <div class="product-details">
                    <div class="product-title">{{ $item->product_name }}</div>
                    <p class="product-description"></p>
                </div>
                <div class="product-price">{{ $item->product_price }}.000 VND</div>
                <div class="product-quantity">
                    <input type="number" value="{{ $item->number }}" min="1" name="number_before">
                </div>
                <div class="product-removal">
                    <form action="{{ route('cart.remove') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                        <button class="remove-product" style="margin-right: 10px;"><i
                                class="fa fa-trash"></i>Xóa</button>
                    </form>
                </div>
                <div class="product-line-price">{{ $item->product_price }}.000</div>
            </div>
            @endforeach
            <div class="totals">
                <div class="totals-item">
                    <label>Tổng</label>
                    <div class="totals-value" id="cart-subtotal">{{ $item->product_price }}.000</div>
                </div>
                <div class="totals-item">
                    <label>Khuyến Mãi</label>
                    <div class="totals-value" id="cart-tax">3.000</div>
                </div>
                <div class="totals-item totals-item-total">
                    <label>Thanh Toán Giá</label>
                    <div class="totals-value" id="cart-total">57.000
                        <input type="hidden" name="total_all" value="57.000">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="w-75">

                </div>
                <div style="width: 30rem;">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{route('products')}}" class="btn btn-lg shipping btn-primary">Mua Sắm Tiếp</a>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-lg checkout" id="btn">Thanh Toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endforeach
    @endif
    @endforeach
    <div class="card" style="margin-top:14%">
        <div class="card-header">
            Sản Phẩm Dành Cho Bạn
        </div>
        <div class="card-body">
        <div class="card-deck">
            @foreach($products as $productitem)
            <div class="card">
                <img class="img-thumbnail" src="{{ asset('/img/product/'.$productitem->avatar) }}">
                <div class="card-body">
                
                </div>
            </div>
         @endforeach
        </div>
        </div>
    </div>  
</div>

@section('script')
<script>
    /* Set rates + misc */
    var taxRate = 0.05;
    var shippingRate = 0;
    var fadeTime = 300;


    /* Assign actions */
    $('.product-quantity input').change(function() {
        updateQuantity(this);
    });

    $('.product-removal button').click(function() {
        removeItem(this);
    });


    /* Recalculate cart */
    function recalculateCart() {
        var subtotal = 0;

        /* Sum up row totals */
        $('.product').each(function() {
            subtotal += parseFloat($(this).children('.product-line-price').text());
        });

        /* Calculate totals */
        var tax = subtotal * taxRate;
        var shipping = (subtotal > 0 ? shippingRate : 0);
        var total = subtotal - tax;

        /* Update totals display */
        $('.totals-value').fadeOut(fadeTime, function() {
            $('#cart-subtotal').html(subtotal.toFixed(3));
            $('#cart-tax').html(tax.toFixed(3));
            $('#cart-shipping').html(shipping.toFixed(2));
            $('#cart-total').html(total.toFixed(3));
            if (total == 0) {
                $('.checkout').fadeOut(fadeTime);
            } else {
                $('.checkout').fadeIn(fadeTime);
            }
            $('.totals-value').fadeIn(fadeTime);
        });
    }


    /* Update quantity */
    function updateQuantity(quantityInput) {
        /* Calculate line price */
        var productRow = $(quantityInput).parent().parent();
        var price = parseFloat(productRow.children('.product-price').text());
        var quantity = $(quantityInput).val();
        var linePrice = price * quantity;

        /* Update line price display and recalc cart totals */
        productRow.children('.product-line-price').each(function() {
            $(this).fadeOut(fadeTime, function() {
                $(this).text(linePrice.toFixed(3));
                recalculateCart();
                $(this).fadeIn(fadeTime);
            });
        });
    }


    /* Remove item from cart */
    function removeItem(removeButton) {
        /* Remove row from DOM and recalc cart total */
        var productRow = $(removeButton).parent().parent();
        productRow.slideUp(fadeTime, function() {
            productRow.remove();
            recalculateCart();
        });
    }
</script>
@stop
@endsection