@extends('template.layout1')
@section('title', 'Checkout')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ url('sublime/styles/checkout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('sublime/styles/checkout_responsive.css') }}">
@endsection
@section('content')
    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url('{{ url('sublime/images/cart.jpg') }}')"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li>Checkout</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Checkout -->

    <div class="checkout">
        <div class="container">
            <div class="row">

                <!-- Billing Info -->
                <div class="col-lg-6">
                    <div class="billing checkout_section">
                        <div class="section_title">Billing Address</div>
                        <div class="section_subtitle">Enter your address info</div>
                        <div class="checkout_form_container">
                            <form action="" id="checkout_form" class="checkout_form">
                                <div>
                                    <label for="checkout_email">Name*</label>
                                    <input disabled type="phone" id="checkout_email" class="checkout_input"
                                        required="required" value="{{ session('name') }}">
                                </div>

                                <div>
                                    <label for="checkout_email">Email Address*</label>
                                    <input disabled type="phone" id="checkout_email" class="checkout_input"
                                        required="required" value="{{ session('email') }}">
                                </div>
                                <div>
                                    <label for="checkout_phone">Phone no*</label>
                                    <input disabled type="phone" id="checkout_phone" class="checkout_input"
                                        required="required" value="{{ session('nohp') }}">
                                </div>
                                <div>
                                    <!-- Country -->
                                    <label for="checkout_country">Country*</label>
                                    <input disabled name="checkout_country" name="alamat" id="checkout_country"
                                        class="dropdown_item_select checkout_input" value="{{ session('negara') }}"
                                        require="required">
                                </div>
                                <div>
                                    <label for="checkout_province">Province*</label>
                                    <input disabled name="checkout_province" name="alamat" id="checkout_province"
                                        class="dropdown_item_select checkout_input" value="{{ session('alamat_provinsi') }}"
                                        require="required">
                                </div>
                                <div>
                                    <!-- City / Town -->
                                    <label for="checkout_city">City/Town*</label>
                                    <input disabled name="checkout_city" name="alamat" id="checkout_city"
                                        class="dropdown_item_select checkout_input" value="{{ session('alamat_kota') }}"
                                        require="required">
                                </div>
                                <div>
                                    <label for="checkout_address">Address*</label>
                                    <textarea disabled type="text" id="checkout_address" name="alamat" class="checkout_input"
                                        value="{{ session('alamat_detail') }}" required="required" style="height: 150px;">{{ session('alamat_detail') }}</textarea>
                                </div>
                                <div class="checkout_extra">
                                    <div>
                                        <input type="checkbox" id="checkbox_terms" name="regular_checkbox"
                                            class="regular_checkbox" checked="checked">
                                        <label for="checkbox_terms"><img src="images/check.png" alt=""></label>
                                        <span class="checkbox_title">Terms and conditions</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="checkbox_account" name="regular_checkbox"
                                            class="regular_checkbox">
                                        <label for="checkbox_account"><img src="images/check.png" alt=""></label>
                                        <span class="checkbox_title">Create an account</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="checkbox_newsletter" name="regular_checkbox"
                                            class="regular_checkbox">
                                        <label for="checkbox_newsletter"><img src="images/check.png"
                                                alt=""></label>
                                        <span class="checkbox_title">Subscribe to our newsletter</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Order Info -->

                <div class="col-lg-6">
                    <div class="order checkout_section">
                        <form action="{{ url('addcheckout') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id_user" value="{{ session('id_user') }}">
                            <div class="section_title">Your order</div>
                            <div class="section_subtitle">Order details</div>

                            <!-- Order details -->
                            <div class="order_list_container">
                                <div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">Product
                                        <hr>
                                    </div>
                                    <div class="order_list_value ml-auto">Total
                                        <hr>
                                    </div>
                                </div>
                                <ul class="order_list">
                                    @php
                                        $subtotal = 0;
                                    @endphp

                                    @foreach ($cart as $item)
                                        <input type="hidden" name="id_cart[]" value="{{ $item->id }}">

                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="order_list_title">{{ $item->Stok->nama }} ({{ $item->quantity }})
                                            </div>

                                            @php
                                                $totalHarga = $item->quantity * $item->Stok->hargajual;
                                                $subtotal += $totalHarga;
                                            @endphp

                                            <div class="order_list_value ml-auto"> {{ number_format($totalHarga) }}
                                            </div>
                                        </li>
                                    @endforeach

                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="order_list_title">Subtotal</div>
                                        <div class="order_list_value ml-auto">{{ number_format($subtotal) }} </div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="order_list_title">Shipping</div>
                                        <div class="order_list_value ml-auto">Free</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="order_list_title">Total</div>
                                        <div class="order_list_value ml-auto">{{ number_format($subtotal) }}</div>
                                        <input type="hidden" name="total_bayar" value="{{ number_format($subtotal) }}">
                                    </li>
                                </ul>
                                <div class="mt-3">
                                    <div class="order_list_title">Proof of payment</div>
                                    <input class="form-control" type="file" name="foto" id="formFile"
                                        accept="image/*">
                                    <div id="imagePreview">
                                        <img class="img-thumbnail mx-auto d-block" id="imagePreviewImg"
                                            src="{{ asset('backendA/images/photo1.jpg') }}" alt="Preview"
                                            style="max-width: 100%; max-height: 300px;" hidden>
                                    </div>
                                </div>
                            </div>
                            <div class="order_text"></div>
                            <button type="submit" class="btn btn-dark" style="width: 430px; height: 50px"
                                href="#">Place
                                Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.getElementById('formFile').addEventListener('change', function(event) {
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function(event) {
                document.getElementById('imagePreviewImg').src = event.target.result;
                document.getElementById('imagePreviewImg').removeAttribute('hidden');
            }

            reader.readAsDataURL(file);
        });
    </script>

@endsection
