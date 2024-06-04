@extends('template.layout1')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ url('sublime/styles/cart.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('sublime/styles/cart_responsive.css') }}">
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
                                        <li><a href="categories.html">Your Order</a></li>
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
                <div class="col-md-12">
                    <!-- Column Titles -->
                    <div class="cart_info_columns clearfix">
                        <div class="cart_info_col cart_info_col_product">nama</div>
                        <div class="cart_info_col cart_info_col_price">Price</div>
                        <div class="cart_info_col cart_info_col_quantity">Quantity</div>
                        <div class="cart_info_col cart_info_col_total">Status</div>
                    </div>
                </div>
            </div>

            @foreach ($checkout as $item)
                <div class="row cart_items_row">
                    <div class="col">
                        <div
                            class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                            <!-- Name -->
                            <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                                <div class="cart">
                                    <div><img src="{{ url('sublime/images/cart_1.jpg') }}" width="50"></div>
                                </div>
                                <div class="cart_item_name_container">
                                    <div class="cart_item_edit"><a href="#"></a>{{ $item->waktu }}</div>
                                    <div class="cart_item_name"><a href="#">Nama Barang</a></div>
                                    <div class="cart_item_edit"><a href="#"></a> {{ session('name') }}</div>
                                </div>
                            </div>
                            <!-- Price -->
                            <div class="cart_item_price">{{ $item->total_bayar }}</div>
                            <!-- Quantity -->
                            <div class="cart_item_quantity">
                                <div class="product_quantity_container">
                                    <span>1</span>
                                </div>
                            </div>
                            <!-- Total -->
                            <div class="cart_item_total"> <span class="badge-success p-2 rounded">{{ $item->Status }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
