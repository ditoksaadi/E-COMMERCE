@extends('template.layout1')
@section('title', 'Produk')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('sublime/styles/categories.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('sublime/styles/categories_responsive.css') }}" />

@endsection
@section('content')
    <!-- Home -->
    <div class="home animate__animated animate__fadeIn">
        <div class="home_container">
            <div class="home_background"
                style="
            background-image: url('{{ asset('sublime/images/categories.jpg') }}');"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">
                                    Smart Phones<span>.</span>
                                </div>
                                <div class="home_text">
                                    <p>
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        Nullam a ultricies metus. Sed
                                        nec molestie eros. Sed viverra
                                        velit venenatis fermentum
                                        luctus.
                                    </p>
                                </div>
                            </div>
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
                    <!-- Product Sorting -->
                    <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                        @php
                            $jumlahData = count($stok);
                        @endphp
                        <div class="results">
                            Showing <span>{{ $jumlahData }}</span> results for
                        </div>
                        <div class="sorting_container ml-md-auto">
                            <div class="sorting">
                                <ul class="item_sorting">
                                    <li>
                                        <span class="sorting_text">Sort by</span>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>

                                        @php
                                            $kategori = DB::table('kategoris')->get();
                                        @endphp

                                        <ul>
                                            @foreach ($kategori as $item)
                                                <li class="product_sorting_btn">
                                                    <a href="{{ url('produk?kategori=' . $item->id) }}">
                                                        <span> {{ $item->nama }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product_grid">
                        <!-- Product -->
                        @foreach ($stok as $item => $value)
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
                                        <a href="{{ url('detail/' . $value->id) }}">{{ $value->nama }}</a>
                                    </div>
                                    <div class="product_price">IDR {{ number_format($value->hargajual, 0, ',', '.') }}
                                    </div>

                                    {{-- Tombol Add to Chart
                                    <div class="product_title mt-4 d-flex ">
                                        <form action="{{ url('addcart') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $value->id }}">
                                            <button class="btn btn-secondary" type="submit"><i class="fa fa-shopping-cart"
                                                    aria-hidden="true"></i>
                                                Add to Chart</button>
                                        </form>
                                    </div> --}}
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
