@extends('template.layout1')
@section('title', 'Contact')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ url('sublime/styles/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('sublime/styles/contact_responsive.css') }}">
@endsection
@section('content')
    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url('{{ url('sublime/images/contact.jpg') }}')"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Contact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Get in touch -->
                <div class="col-lg-8 contact_col">
                    <div class="get_in_touch">
                        <div class="section_title">Get in Touch</div>
                        <div class="section_subtitle">Say hello</div>
                        <div class="contact_form_container">
                            <form action="#" id="contact_form" class="contact_form">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!-- Name -->
                                        <label for="contact_name">First Name*</label>
                                        <input type="text" id="contact_name" class="contact_input" required="required">
                                    </div>
                                    <div class="col-xl-6 last_name_col">
                                        <!-- Last Name -->
                                        <label for="contact_last_name">Last Name*</label>
                                        <input type="text" id="contact_last_name" class="contact_input"
                                            required="required">
                                    </div>
                                </div>
                                <div>
                                    <!-- Subject -->
                                    <label for="contact_company">Subject</label>
                                    <input type="text" id="contact_company" class="contact_input">
                                </div>
                                <div>
                                    <label for="contact_textarea">Message*</label>
                                    <textarea id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
                                </div>
                                <button class="button contact_button"><span>Send Message</span></button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 offset-xl-1 contact_col">
                    <div class="contact_info">
                        <div class="contact_info_section">
                            <div class="contact_info_title">Marketing</div>
                            <ul>
                                <li>Phone: <span>+53 345 7953 3245</span></li>
                                <li>Email: <span>yourmail@gmail.com</span></li>
                            </ul>
                        </div>
                        <div class="contact_info_section">
                            <div class="contact_info_title">Shippiing & Returns</div>
                            <ul>
                                <li>Phone: <span>+53 345 7953 3245</span></li>
                                <li>Email: <span>yourmail@gmail.com</span></li>
                            </ul>
                        </div>
                        <div class="contact_info_section">
                            <div class="contact_info_title">Information</div>
                            <ul>
                                <li>Phone: <span>+53 345 7953 3245</span></li>
                                <li>Email: <span>yourmail@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row map_row">
                <div class="col">

                    <!-- Google Map -->
                    <div class="map">
                        <div id="google_map" class="google_map">
                            <div class="map_container">
                                <iframe class="bordered"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.67636344592!2d101.40162007408287!3d0.4833264995119422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a9df2d269dd1%3A0xd3bc2e7453066db7!2sKos%20kosan%20Pria%20muslim!5e0!3m2!1sid!2sid!4v1715928493037!5m2!1sid!2sid"
                                    width="1500" height="950" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                {{-- <div id="map"></div> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ url('sublime/js/contact.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
@endsection
