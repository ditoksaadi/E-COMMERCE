@extends('template.layout1')
@section('title', 'Dashbord')
@section('content')
    <!-- Home -->
    <div class="home animate__animated animate__fadeIn">
        <div class="home_slider_container">
            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">
                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background"
                        style="
                            background-image: url('{{ url('sublime/images/home_slider_1.jpg') }}');
                        ">
                    </div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content" data-animation-in="fadeIn"
                                        data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title">
                                            A new Online Shop
                                            experience.
                                        </div>
                                        <div class="home_slider_subtitle">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                            Nullam a ultricies metus.
                                            Sed nec molestie eros. Sed
                                            viverra velit venenatis
                                            fermentum luctus.
                                        </div>
                                        <div class="button button_light home_button">
                                            <a href="{{ url('produk') }}">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background"
                        style="
                            background-image: url('{{ url('sublime/images/home_slider_1.jpg') }}');
                        ">
                    </div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content" data-animation-in="fadeIn"
                                        data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title">
                                            A new Online Shop
                                            experience.
                                        </div>
                                        <div class="home_slider_subtitle">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                            Nullam a ultricies metus.
                                            Sed nec molestie eros. Sed
                                            viverra velit venenatis
                                            fermentum luctus.
                                        </div>
                                        <div class="button button_light home_button">
                                            <a href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background"
                        style="
                            background-image: url('{{ url('sublime/images/home_slider_1.jpg') }}');
                        ">
                    </div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content" data-animation-in="fadeIn"
                                        data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title">
                                            A new Online Shop
                                            experience.
                                        </div>
                                        <div class="home_slider_subtitle">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                            Nullam a ultricies metus.
                                            Sed nec molestie eros. Sed
                                            viverra velit venenatis
                                            fermentum luctus.
                                        </div>
                                        <div class="button button_light home_button">
                                            <a href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Home Slider Dots -->

            <div class="home_slider_dots_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_slider_dots">
                                <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                                    <li class="home_slider_custom_dot active">
                                        01.
                                    </li>
                                    <li class="home_slider_custom_dot">
                                        02.
                                    </li>
                                    <li class="home_slider_custom_dot">
                                        03.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ads -->

    <div class="avds">
        <div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
            <div class="avds_small">
                <div class="avds_background" style="background-image: url({{ asset('sublime/images/avds_small.jpg') }})">
                </div>
                <div class="avds_small_inner">
                    <div class="avds_discount_container">
                        <img src="{{ asset('sublime/images/discount.png') }}" alt="" />
                        <div>
                            <div class="avds_discount">
                                <div>20<span>%</span></div>
                                <div>Discount</div>
                            </div>
                        </div>
                    </div>
                    <div class="avds_small_content">
                        <div class="avds_title">Smart Phones</div>
                        <div class="avds_link">
                            <a href="categories.html">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="avds_large">
                <div class="avds_background" style="background-image: url({{ asset('sublime/images/avds_large.jpg') }})">
                </div>
                <div class="avds_large_container">
                    <div class="avds_large_content">
                        <div class="avds_title">
                            Professional Cameras
                        </div>
                        <div class="avds_text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Nullam a ultricies metus.
                            Sed nec molestie eros. Sed viver ra velit
                            venenatis fermentum luctus.
                        </div>
                        <div class="avds_link avds_link_large">
                            <a href="categories.html">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product_grid">
                        @foreach ($stok as $value)
                            <div class="product">
                                @foreach (json_decode($value->foto) as $i => $path)
                                    @php
                                        $i += 1;
                                    @endphp
                                    @if ($i == 1)
                                        <div class="product_image">
                                            <a href="{{ url('detail/' . $value->id) }}">
                                                <img src="{{ Storage::url($path) }}" alt="{{ $value->nama }}"
                                                    style="width: 250px; height: 200px; object-fit: cover;" />
                                            </a>
                                        </div>
                                    @endif
                                @endforeach

                                <div class="product_extra product_sale">
                                    <a href="categories.html">Sale</a>
                                </div>
                                <div class="product_content">
                                    <div class="product_title">
                                        <a href="{{ url('detail' . $value->id) }}">{{ $value->nama }}</a>
                                    </div>
                                    <div class="product_price">IDR {{ number_format($value->hargajual, 0, ',', '.') }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ad -->

    <div class="avds_xl">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="avds_xl_container clearfix">
                        <div class="avds_xl_background"
                            style="
                                        background-image: url('{{ asset('sublime/images/avds_xl.jpg') }}');
                                    ">
                        </div>
                        <div class="avds_xl_content">
                            <div class="avds_title">
                                Amazing Devices
                            </div>
                            <div class="avds_text">
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Nullam a ultricies
                                metus.
                            </div>
                            <div class="avds_link avds_xl_link">
                                <a href="categories.html">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Icon Boxes -->

    <div class="icon_boxes">
        <div class="container">
            <div class="row icon_box_row">
                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image">
                            <img src="{{ asset('sublime/images/icon_1.svg') }}" alt="" />
                        </div>
                        <div class="icon_box_title">
                            Free Shipping Worldwide
                        </div>
                        <div class="icon_box_text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Nullam a ultricies
                                metus. Sed nec molestie.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image">
                            <img src="{{ asset('sublime/images/icon_2.svg') }}" alt="" />
                        </div>
                        <div class="icon_box_title">Free Returns</div>
                        <div class="icon_box_text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Nullam a ultricies
                                metus. Sed nec molestie.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image">
                            <img src="{{ asset('sublime/images/icon_3.svg') }}" alt="" />
                        </div>
                        <div class="icon_box_title">
                            24h Fast Support
                        </div>
                        <div class="icon_box_text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Nullam a ultricies
                                metus. Sed nec molestie.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

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
                        <div class="newsletter_title">
                            Subscribe to our newsletter
                        </div>
                        <div class="newsletter_text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Nullam a ultricies
                                metus. Sed nec molestie eros
                            </p>
                        </div>
                        <div class="newsletter_form_container">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <input type="email" class="newsletter_input" required="required" />
                                <button class="newsletter_button trans_200">
                                    <span>Subscribe</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
