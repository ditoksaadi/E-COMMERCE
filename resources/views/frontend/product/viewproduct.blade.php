@extends('template.layout1')
@section('title', 'Produk')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ url('sublime/styles/product.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('sublime/styles/product_responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection
@section('content')
    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url({{ url('sublime/images/categories.jpg') }})"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">Smart Phones<span>.</span></div>
                                <div class="home_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.
                                        Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details -->

    <div class="product_details">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="details_image">
                        @foreach (json_decode($item->foto) as $i => $path)
                            @php
                                $i += 1;
                            @endphp

                            @if ($i == 1)
                                <div class="details_image_large"><img src="{{ Storage::url($path) }}"
                                        alt="{{ $item->nama }}">
                                    <div class="product_extra product_new"><a href="categories.html">New</a></div>
                                </div>
                            @endif
                        @endforeach
                        <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                            @foreach (json_decode($item->foto) as $a => $path)
                                @php
                                    $a += 1;
                                @endphp
                                <div class="details_image_thumbnail {{ $a == 1 ? 'active' : '' }}"
                                    data-image="{{ Storage::url($path) }}">
                                    <img src="{{ Storage::url($path) }}" alt="">
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-6">
                    <div class="details_content">
                        <div class="details_name">{{ $item->nama }}</div>
                        <div class="details_discount">IDR {{ number_format($item->hargabeli) }}</div>
                        <div class="details_price">IDR {{ number_format($item->hargajual) }}</div>

                        <!-- In Stock -->
                        <div class="in_stock_container">
                            <div class="availability">Availability:</div>
                            <span>In Stock</span>
                        </div>
                        <div class="details_text">
                            <p>{{ $item->desk }}</p>
                        </div>

                        <!-- Product Quantity -->
                        <div class="product_quantity_container d-flex">
                            @if (Auth::check())
                                <form class="" action="{{ url('addcart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_produk" value="{{ $item->id }}">
                                    <div class="product_quantity clearfix">
                                        <span>Qty</span>
                                        <input id="quantity_input" type="text" name="quantity" pattern="[0-9]*"
                                            value="1">
                                        <div class="quantity_buttons">
                                            <div id="quantity_inc_button" class="quantity_inc quantity_control">
                                                <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                            </div>
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control">
                                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <button style="height: 60px" class="btn btn-outline-secondary ml-2 text-dark"
                                        type="submit">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart
                                    </button>
                                </form>
                            @else
                                <div>
                                    <button style="height: 60px" class="btn btn-outline-secondary ml-2 text-dark"
                                        id="loginPromptButton">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart
                                    </button>
                                </div>
                            @endif
                        </div>



                        <!-- Share -->
                        <div class="details_share">
                            <span>Share:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row description_row">
                <div class="col">
                    <div class="description_title_container">
                        <div class="description_title">Description</div>
                        <div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div>
                    </div>
                    <div class="description_text">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo
                            tempus
                            mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam.
                            Nullam
                            sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title">Subscribe to our newsletter</div>
                        <div class="newsletter_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed
                                nec
                                molestie eros</p>
                        </div>
                        <div class="newsletter_form_container">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <input type="email" class="newsletter_input" required="required">
                                <button class="newsletter_button trans_200"><span>Subscribe</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ url('sublime/js/product.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('loginPromptButton').addEventListener('click', function() {
            Swal.fire({
                title: 'Login Diperlukan',
                text: 'Anda perlu login untuk menambahkan barang ke keranjang. Silakan login atau daftar.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Login/Register',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '{{ url('auth') }}'; // URL untuk login
                } else if (result.isDenied) {
                    Swal.close();
                }
            });
        });
    </script>

@endsection
