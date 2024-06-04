@extends('template.layout1')
@section('title', 'Cart')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('sublime/styles/cart.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('sublime/styles/cart_responsive.css') }}">
@endsection
@section('content')
    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url({{ url('sublime/images/cart.jpg') }})"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="categories.html">Categories</a></li>
                                        <li>Shopping Cart</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cart_info">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Column Titles -->
                    <div class="cart_info_columns clearfix">
                        <div class="cart_info_col cart_info_col_product">Product</div>
                        <div class="cart_info_col cart_info_col_price">Price</div>
                        <div class="cart_info_col cart_info_col_quantity">Quantity</div>
                        <div class="cart_info_col cart_info_col_total">Total</div>
                    </div>
                </div>
            </div>
            <div class="row cart_items_row">
                <div class="col">

                    @if ($cartitem->count() === 0)
                        <div class="text-center mt-5 p-5" role="alert">
                            Keranjang belanja Anda kosong. Silakan tambahkan barang ke dalam keranjang.
                        </div>
                    @else
                        @foreach ($cartitem as $item)
                            <div
                                class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">

                                    @foreach (json_decode($item->stok->foto) as $i => $photo)
                                        @php
                                            $i += 1;
                                        @endphp
                                        @if ($i == 1)
                                            <div class="cart_item_image">
                                                <div><img src="{{ Storage::url($photo) }}" alt=""></div>
                                            </div>
                                        @endif
                                    @endforeach

                                    <div class="cart_item_name_container">
                                        <div class="cart_item_name"><a href="">{{ $item->Stok->nama }}</a></div>
                                        <div class="cart_item_edit"><a class=" text-danger"
                                                href="{{ url('deletecart/' . $item->id) }}">Delete</a></div>
                                    </div>
                                </div>
                                <div class="cart_item_price">IDR {{ number_format($item->Stok->hargajual) }}</div>
                                <div class="cart_item_quantity">
                                    <div class="product_quantity_container">
                                        <p></p>
                                        <div class="product_quantity clearfix">
                                            <span>QTY</span>
                                            <input id="quantity_input" type="text" name="quantity"
                                                value="{{ $item->quantity }}" pattern="[0-9]*" value="1">
                                            <div class="quantity_buttons">
                                                <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                                        class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                                <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                                        class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                @php
                                    $quantity = 1;
                                    $hargaBarang = $item->Stok->hargajual;
                                    $totalHarga = $item->quantity * $hargaBarang;
                                @endphp

                                <div class="cart_item_total total_price">IDR {{ number_format($totalHarga) }}</div>
                            </div>
                        @endforeach

                    @endif

                </div>
            </div>
            <div class="row row_cart_buttons">
                <div class="col">
                    <div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                        <div class="button continue_shopping_button"><a href="{{ url('produk') }}">Continue shopping</a>
                        </div>

                        @if ($cartitem->count() !== 0)
                            <div class="cart_buttons_right ml-lg-auto">
                                <div class="button clear_cart_button"><a href="{{ url('deleteall/') }}">Clear cart</a>
                                </div>
                                <div class="button update_cart_button"><a href="#">Update cart</a></div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>

            @if ($cartitem->count() !== 0)
                <div class="row row_extra">
                    <div class="col-lg-4">
                        <div class="delivery">
                            <div class="section_title">Shipping method</div>
                            <div class="section_subtitle">Select the one you want</div>
                            <div class="delivery_options">
                                <label class="delivery_option clearfix">Next day delivery
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    <span class="delivery_price">$4.99</span>
                                </label>
                                <label class="delivery_option clearfix">Standard delivery
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    <span class="delivery_price">$1.99</span>
                                </label>
                                <label class="delivery_option clearfix">Personal pickup
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                    <span class="delivery_price">Free</span>
                                </label>
                            </div>
                        </div>


                        <div class="coupon">
                            <div class="section_title">Coupon code</div>
                            <div class="section_subtitle">Enter your coupon code</div>
                            <div class="coupon_form_container">
                                <form action="#" id="coupon_form" class="coupon_form">
                                    <input type="text" class="coupon_input" required="required">
                                    <button class="button coupon_button"><span>Apply</span></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 offset-lg-2">
                        @php
                            $subtotal = 0;
                            foreach ($cartitem as $item) {
                                $subtotal += $item->quantity * $item->Stok->hargajual;
                            }
                        @endphp
                        <div class="cart_total">
                            <div class="section_title">Cart total</div>
                            <div class="section_subtitle">Final info</div>
                            <div class="cart_total_container">
                                <ul>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_total_title">Subtotal</div>
                                        <div class="cart_total_value ml-auto">IDR {{ number_format($subtotal) }}</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_total_title">Shipping</div>
                                        <div class="cart_total_value ml-auto">Free</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_total_title">Total</div>
                                        <div class="cart_total_value ml-auto">IDR {{ number_format($subtotal) }}</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="button checkout_button"><a href="{{ url('checkout/') }}">Proceed
                                    to
                                    checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
@section('script')
    <script src="{{ url('sublime/js/cart.js') }}"></script>

@endsection
