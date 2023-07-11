@extends('layouts.app')
@section('welcome')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/images/ugive-logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-wrap" id="navbarSupportedContent">
                <form class="d-flex search-form">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>

                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="ugive-btn" href="#">Create Donation</a>
                    </li>
                    <li class="nav-item">
                        <a class="ugive-btn" href="#">Create Request</a>
                    </li>
                    @if(Auth::check())
                        <li class="nav-item ">
                            <img class="" src="assets/icons/message.png">
                        </li>
                        <li class="nav-item ">
                            <img class="" src="{{asset('assets/icons/noti.png')}}">
                        </li>
                        <li class="nav-item ">
                            <img class="" src="assets/icons/help.png">
                        </li>
                        <a href="{{url('/logout')}}">{{Auth::user()->name}}</a>
                    @else
                        <li class="nav-item">
                            <a class="ugive-btn" href="{{url('/login')}}">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <body>
    <!-- Start Hero Here -->
    <section id="hero" class="spacing">
        <div class="container">
            <div class="row align-items-center col-rev">
                <div class="col-md-6">
                    <div class="hero-content">
                        <h1 class="title-h1">Lorem ipsum dolor sit amet, adipiscing elit. A risus sit etiam.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu lorem volutpat aliquet ac
                            lectus amet ac. Est faucibus luctus eget quam aliquam arcu.</p>

                        <div class="btn-inline mt-4">
                            <a href="#" class="ugive-btn ugive-btn__solid">Donate</a>
                            <a href="#" class="ugive-btn">How it work</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-image">
                        <img src="{{asset('assets/images/cuate.png')}}" alt="cuate">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Hero Here -->

    <!-- Start Item Donations Here -->
    <section id="item-donations" class="spacing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-box text-center mb-4">
                        <h2 class="title-h2">Item Donations</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium lectus felis rutrum nisl,
                            sagittis in nunc, quam suscipit. Orci eget risus </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- Single Product Box -->
                    <div class="product-box">
                        <div class="product-box__image">
                            <img src="assets/images/unsplash_6V-vJpPzvh8.png" alt="Product Image">
                        </div>

                        <div class="product-box__content">
                            <a href="#" class="product-title">Item Name</a>

                            <ul class="product-metabox">
                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/ellipse-1.png" alt="">
                                    </div>
                                    <p class="metabox-title">Admin</p>
                                </li>

                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/clock-icon.png" alt="">
                                    </div>
                                    <p class="metabox-title">3 days ago</p>
                                </li>

                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/map-location-icon.png" alt="">
                                    </div>
                                    <p class="metabox-title">300 m</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Product Box -->
                </div>

                <div class="col-md-4">
                    <!-- Single Product Box -->
                    <div class="product-box">
                        <div class="product-box__image">
                            <img src="assets/images/unsplash_4uD9w-pxBTA.jpg" alt="Product Image">
                        </div>

                        <div class="product-box__content">
                            <a href="#" class="product-title">Item Name</a>

                            <ul class="product-metabox">
                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/ellipse-1.png" alt="">
                                    </div>
                                    <p class="metabox-title">Admin</p>
                                </li>

                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/clock-icon.png" alt="">
                                    </div>
                                    <p class="metabox-title">3 days ago</p>
                                </li>

                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/map-location-icon.png" alt="">
                                    </div>
                                    <p class="metabox-title">300 m</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Product Box -->
                </div>

                <div class="col-md-4">
                    <!-- Single Product Box -->
                    <div class="product-box">
                        <div class="product-box__image">
                            <img src="assets/images/unsplash_ojZ4wJNUM5w.jpg" alt="Product Image">
                        </div>

                        <div class="product-box__content">
                            <a href="#" class="product-title">Item Name</a>

                            <ul class="product-metabox">
                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/ellipse-1.png" alt="">
                                    </div>
                                    <p class="metabox-title">Admin</p>
                                </li>

                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/clock-icon.png" alt="">
                                    </div>
                                    <p class="metabox-title">3 days ago</p>
                                </li>

                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/map-location-icon.png" alt="">
                                    </div>
                                    <p class="metabox-title">300 m</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Product Box -->
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center mt-4">
                    <a href="#" class="ugive-btn">View All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Item Donations Here -->

    <!-- Start Food Donations Here -->
    <section id="food-donations" class="spacing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-box text-center mb-4">
                        <h2 class="title-h2">Food Donations</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium lectus felis rutrum nisl,
                            sagittis in nunc, quam suscipit. Orci eget risus </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- Single Product Box -->
                    <div class="product-box">
                        <div class="product-box__image">
                            <img src="assets/images/unsplash_hnM2YmTeNAs.jpg" alt="Product Image">
                        </div>

                        <div class="product-box__content">
                            <a href="#" class="product-title">Food Name</a>

                            <ul class="product-metabox">
                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/ellipse-1.png" alt="">
                                    </div>
                                    <p class="metabox-title">Admin</p>
                                </li>

                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/clock-icon.png" alt="">
                                    </div>
                                    <p class="metabox-title">3 days ago</p>
                                </li>

                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/map-location-icon.png" alt="">
                                    </div>
                                    <p class="metabox-title">300 m</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Product Box -->
                </div>

                <div class="col-md-4">
                    <!-- Single Product Box -->
                    <div class="product-box">
                        <div class="product-box__image">
                            <img src="assets/images/unsplash_Onsgzmtgz4g.jpg" alt="Product Image">
                        </div>

                        <div class="product-box__content">
                            <a href="#" class="product-title">Food Name</a>

                            <ul class="product-metabox">
                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/ellipse-1.png" alt="">
                                    </div>
                                    <p class="metabox-title">Admin</p>
                                </li>

                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/clock-icon.png" alt="">
                                    </div>
                                    <p class="metabox-title">3 days ago</p>
                                </li>

                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/map-location-icon.png" alt="">
                                    </div>
                                    <p class="metabox-title">300 m</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Product Box -->
                </div>

                <div class="col-md-4">
                    <!-- Single Product Box -->
                    <div class="product-box">
                        <div class="product-box__image">
                            <img src="assets/images/unsplash_RgyCzCu2kvw.jpg" alt="Product Image">
                        </div>

                        <div class="product-box__content">
                            <a href="#" class="product-title">Food Name</a>

                            <ul class="product-metabox">
                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/ellipse-1.png" alt="">
                                    </div>
                                    <p class="metabox-title">Admin</p>
                                </li>

                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/clock-icon.png" alt="">
                                    </div>
                                    <p class="metabox-title">3 days ago</p>
                                </li>

                                <li>
                                    <div class="metabox-icon">
                                        <img src="assets/images/map-location-icon.png" alt="">
                                    </div>
                                    <p class="metabox-title">300 m</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Product Box -->
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center mt-4">
                    <a href="#" class="ugive-btn">View All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Food Donations Here -->

    <!-- Start 	How it work Here -->
    <section id="how-it-work" class="spacing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-box text-center mb-5">
                        <h2 class="title-h2">How it works ?</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="image-box text-center">
                        <img src="assets/images/cuate-2.png" alt="">
                        <div class="image-box__content">
                            <h3 class="title-h3">Create an Ad</h3>
                            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-box text-center">
                        <img src="assets/images/rafiki.png" alt="">
                        <div class="image-box__content">
                            <h3 class="title-h3">Chat with Ugivers</h3>
                            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-box text-center">
                        <img src="assets/images/bro.png" alt="">
                        <div class="image-box__content">
                            <h3 class="title-h3">Give away</h3>
                            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /End 	How it work Here -->

    <!-- Start CTA Here -->
    <section id="cta">
        <div class="container">
            <div class="cta-wrap text-white">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="title-h2 text-white">Get your property <br> very easily</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu lorem volutpat aliquet ac
                            lectus amet ac.</p>

                        <div class="btn-inline mt-4">
                            <a href="#" class="btn-store"><img src="assets/images/play-store-icon.png" alt="Play Store"></a>
                            <a href="#" class="btn-store"><img src="assets/images/app-store-icon.png"
                                                               alt="App Store"></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="cta-shape-wrap">
                            <img class="cta-shape" src="assets/images/hand-icon.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /End CTA Here -->

    <!-- Start Why Ugive Here -->
    <div id="why-ugive" class="spacing">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="why-ugive-content text-center">
                        <img src="assets/images/why-ugive.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Why Ugive Here -->
    <footer>
        @include('layouts.footer')
    </footer>
@endsection

