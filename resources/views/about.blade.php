@extends('layouts.app')

@section('content')
    @include('components.header_two')
    <div class="popup-search d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="popup-search-content position-relative">
                        <a href="#" class="close-popup position-absolute top-0 end-0 m-3">
                            <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path d="M17.25 6.75L6.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M6.75 6.75L17.25 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <h5 class="mb-4">Search</h5>
                        <form action="#" class="d-flex flex-wrap flex-lg-nowrap gap-2">
                            <input class="form-control" type="text" placeholder="What Are You Looking For?">
                            <button class="btn btn-dark button-effect-1" type="submit">Search</button>
                        </form>
                        <div class="block-tag mt-5">
                            <ul class="list-unstyled d-flex flex-wrap gap-1 ps-0">
                                <!-- prettier-ignore -->
                                <li class="carouselTicker__item mx-0">
                                <a href="#" class="tag-item link-effect-2">
                                    <span class="text">
                                        <span class="text1">Fashion</span>
                                        <span class="text2">Fashion</span>
                                    </span>

                                    <span class="number">
                                        <span class="odometer text-nowrap" data-count="68"></span>
                                    </span>
                                </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                        <span class="text">
                                            <span class="text1">Technology</span>
                                            <span class="text2">Technology</span>
                                        </span>

                                        <span class="number">
                                            <span class="odometer text-nowrap" data-count="85"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                        <span class="text">
                                            <span class="text1">Science</span>
                                            <span class="text2">Science</span>
                                        </span>

                                        <span class="number">
                                            <span class="odometer text-nowrap" data-count="120"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                        <span class="text">
                                            <span class="text1">Design</span>
                                            <span class="text2">Design</span>
                                        </span>

                                        <span class="number">
                                            <span class="odometer text-nowrap" data-count="89"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                        <span class="text">
                                            <span class="text1">Politics</span>
                                            <span class="text2">Politics</span>
                                        </span>

                                        <span class="number">
                                            <span class="odometer text-nowrap" data-count="52"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                        <span class="text">
                                            <span class="text1">Blockchain</span>
                                            <span class="text2">Blockchain</span>
                                        </span>

                                        <span class="number">
                                            <span class="odometer text-nowrap" data-count="115"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                        <span class="text">
                                            <span class="text1">Lifestyle</span>
                                            <span class="text2">Lifestyle</span>
                                        </span>

                                        <span class="number">
                                            <span class="odometer text-nowrap" data-count="89"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                        <span class="text">
                                            <span class="text1">Innovation</span>
                                            <span class="text2">Innovation</span>
                                        </span>

                                        <span class="number">
                                            <span class="odometer text-nowrap" data-count="52"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="carouselTicker__item mx-0">
                                    <a href="#" class="tag-item link-effect-2">
                                        <span class="text">
                                            <span class="text1">Pepple</span>
                                            <span class="text2">Pepple</span>
                                        </span>

                                        <span class="number">
                                            <span class="odometer text-nowrap" data-count="115"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-5">
                            <div class="block-recomment">
                                <h5 class="mb-3">Recommended for you</h5>
                                <div class="swiper swiper-popup-search">
                                    <div class="swiper-wrapper">
                                        <!--prettier-ignore-->
                                        <div class="swiper-slide hover-up">
                                        <div class="article card-10 style-1">
                                            <div class="hover-effect-1">
                                                <a href="#" class="card-img">
                                                    <img class="w-100" src="assets/imgs/other/img-other-1.png"
                                                        alt="magzin">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <a href="#">
                                                    <h6 class="fs-7 mb-2 text-truncate-2">Breaking Down the Elements of a
                                                        Masterpiece Painting</h6>
                                                </a>
                                                <div class="d-flex align-items-center text-600">
                                                    <span class="fs-8">16 Jul, 2025</span>
                                                    <ul class="ps-4 m-0">
                                                        <li>
                                                            <span class="fs-8">6 mins read</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide hover-up">
                                        <div class="article card-10 style-1">
                                            <div class="hover-effect-1">
                                                <a href="#" class="card-img">
                                                    <img class="w-100" src="assets/imgs/other/img-other-2.png"
                                                        alt="magzin">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <a href="#">
                                                    <h6 class="fs-7 mb-2 text-truncate-2">The Revival of Classical Art in a
                                                        Digital Age</h6>
                                                </a>
                                                <div class="d-flex align-items-center text-600">
                                                    <span class="fs-8">16 Jul, 2025</span>
                                                    <ul class="ps-4 m-0">
                                                        <li>
                                                            <span class="fs-8">6 mins read</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide hover-up">
                                        <div class="article card-10 style-1">
                                            <div class="hover-effect-1">
                                                <a href="#" class="card-img">
                                                    <img class="w-100" src="assets/imgs/other/img-other-3.png"
                                                        alt="magzin">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <a href="#">
                                                    <h6 class="fs-7 mb-2 text-truncate-2">Must-See Art Exhibitions Around
                                                        the World This Year</h6>
                                                </a>
                                                <div class="d-flex align-items-center text-600">
                                                    <span class="fs-8">16 Jul, 2025</span>
                                                    <ul class="ps-4 m-0">
                                                        <li>
                                                            <span class="fs-8">6 mins read</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide hover-up">
                                        <div class="article card-10 style-1">
                                            <div class="hover-effect-1">
                                                <a href="#" class="card-img">
                                                    <img class="w-100" src="assets/imgs/other/img-other-2.png"
                                                        alt="magzin">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <a href="#">
                                                    <h6 class="fs-7 mb-2 text-truncate-2">The Revival of Classical Art in a
                                                        Digital Age</h6>
                                                </a>
                                                <div class="d-flex align-items-center text-600">
                                                    <span class="fs-8">16 Jul, 2025</span>
                                                    <ul class="ps-4 m-0">
                                                        <li>
                                                            <span class="fs-8">6 mins read</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="popup-search-overlay"></div>
    <div class="sidebar-left">
        <div class="header-sidebar d-flex align-items-center justify-content-between py-3">
            <a href="index-2.html" class="sidebar-brand fw-bold fs-3 dark-mode-invert">
                <img src="assets/imgs/template/logo/logo-dark.svg" alt="Logo" />
            </a>
            <a href="#" class="close-sidebar">
                <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none">
                    <path d="M17.25 6.75L6.75 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M6.75 6.75L17.25 17.25" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
        </div>
        <ul class="sidebar-nav list-unstyled ps-0">
            <li class="nav-item collapse">
                <a class="nav-link mb-2 collapse-toggle" href="#"> Home </a>
                <ul class="collapse-menu d-flex flex-column gap-1 list-unstyled">
                    <li><a class="collapse-item" href="index-2.html">Home 1 - Magazine</a></li>
                    <li><a class="collapse-item" href="index-3.html">Home 2 - Publisher</a></li>
                    <li><a class="collapse-item" href="index-4.html">Home 3 - Blog</a></li>
                    <li><a class="collapse-item" href="index-5.html">Home 4 - Personal</a></li>
                </ul>
            </li>

            <li class="nav-item collapse">
                <a class="nav-link mb-2 collapse-toggle" href="#"> Archive layouts </a>
                <ul class="collapse-menu d-flex flex-column gap-1 list-unstyled">
                    <li><a class="collapse-item" href="archive-1.html">Archive 1</a></li>
                    <li><a class="collapse-item" href="archive-2.html">Archive 2</a></li>
                    <li><a class="collapse-item" href="archive-3.html">Archive 3</a></li>
                    <li><a class="collapse-item" href="archive-4.html">Archive 4</a></li>
                    <li><a class="collapse-item" href="archive-5.html">Archive 5</a></li>
                </ul>
            </li>

            <li class="nav-item collapse">
                <a class="nav-link mb-2 collapse-toggle" href="#"> Post Layouts </a>
                <ul class="collapse-menu d-flex flex-column gap-1 list-unstyled">
                    <li><a class="collapse-item" href="single-1.html">Single 1</a></li>
                    <li><a class="collapse-item" href="single-2.html">Single 2</a></li>
                    <li><a class="collapse-item" href="single-3.html">Single 3</a></li>
                </ul>
            </li>
            <li class="nav-item collapse">
                <a class="nav-link mb-2 collapse-toggle" href="#"> Portfolio layouts </a>
                <ul class="collapse-menu d-flex flex-column gap-1 list-unstyled">
                    <li><a class="collapse-item" href="portfolio-archive-1.html">Portfolio Archive</a></li>
                    <li><a class="collapse-item" href="portfolio-details.html">Portfolio Details</a></li>
                </ul>
            </li>
            <li class="nav-item collapse">
                <a class="nav-link mb-2 collapse-toggle" href="#">Pages </a>
                <ul class="collapse-menu d-flex flex-column gap-1 list-unstyled">
                    <li><a class="collapse-item" href="page-about.html">About us</a></li>
                    <li><a class="collapse-item" href="page-author.html">Author posts</a></li>
                    <li><a class="collapse-item" href="page-search-results.html">Search results</a></li>
                    <li><a class="collapse-item" href="page-contact.html">Contact</a></li>
                    <li><a class="collapse-item" href="page-login.html">Login</a></li>
                    <li><a class="collapse-item" href="page-404.html">404</a></li>
                </ul>
            </li>
        </ul>
        <div class="block-popular">
            <h5 class="mb-3">Popular posts</h5>
            <div class="d-flex flex-column gap-2">
                <!--prettier-ignore-->
                <div class="swiper-slide hover-up">
                <div class="article card-10 style-2">
                    <div class="hover-effect-1">
                        <a href="#" class="card-img">
                            <img class="w-100" src="assets/imgs/other/img-other-4.png" alt="magzin">
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#">
                            <h6 class="fs-7 mb-2 text-truncate-2">Iconic Film Directors and Their Influence on Cinema</h6>
                        </a>
                        <div class="d-flex align-items-center text-600">
                            <span class="fs-8">16 Jul, 2025</span>
                            <ul class="ps-4 m-0">
                                <li>
                                    <span class="fs-8">6 mins read</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hover-up">
                <div class="article card-10 style-2">
                    <div class="hover-effect-1">
                        <a href="#" class="card-img">
                            <img class="w-100" src="assets/imgs/other/img-other-5.png" alt="magzin">
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#">
                            <h6 class="fs-7 mb-2 text-truncate-2">The Role of Storytelling in Film and Television</h6>
                        </a>
                        <div class="d-flex align-items-center text-600">
                            <span class="fs-8">16 Jul, 2025</span>
                            <ul class="ps-4 m-0">
                                <li>
                                    <span class="fs-8">6 mins read</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hover-up">
                <div class="article card-10 style-2">
                    <div class="hover-effect-1">
                        <a href="#" class="card-img">
                            <img class="w-100" src="assets/imgs/other/img-other-6.png" alt="magzin">
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#">
                            <h6 class="fs-7 mb-2 text-truncate-2">The Impact of AI on Digital Art and Creativity</h6>
                        </a>
                        <div class="d-flex align-items-center text-600">
                            <span class="fs-8">16 Jul, 2025</span>
                            <ul class="ps-4 m-0">
                                <li>
                                    <span class="fs-8">6 mins read</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hover-up">
                <div class="article card-10 style-2">
                    <div class="hover-effect-1">
                        <a href="#" class="card-img">
                            <img class="w-100" src="assets/imgs/other/img-other-7.png" alt="magzin">
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#">
                            <h6 class="fs-7 mb-2 text-truncate-2">Must-See Art Exhibitions Around the World This Year</h6>
                        </a>
                        <div class="d-flex align-items-center text-600">
                            <span class="fs-8">16 Jul, 2025</span>
                            <ul class="ps-4 m-0">
                                <li>
                                    <span class="fs-8">6 mins read</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper slider-1 mt-5 rounded-16">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="w-100 rounded-16 overflow-hidden" src="assets/imgs/other/img-other-8.png"
                        alt="magzin" />
                </div>
                <div class="swiper-slide">
                    <img class="w-100 rounded-16 overflow-hidden" src="assets/imgs/other/img-other-8-1.png"
                        alt="magzin" />
                </div>
                <div class="swiper-slide">
                    <img class="w-100 rounded-16 overflow-hidden" src="assets/imgs/other/img-other-8-2.png"
                        alt="magzin" />
                </div>
            </div>
            <div class="swiper-pagination mb-3"></div>
        </div>
    </div>
    <div class="sidebar-footer">
        <div class="">
            <div class="d-flex align-items-center">
                <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none">
                    <path
                        d="M4.75 7.75C4.75 6.64543 5.64543 5.75 6.75 5.75H17.25C18.3546 5.75 19.25 6.64543 19.25 7.75V16.25C19.25 17.3546 18.3546 18.25 17.25 18.25H6.75C5.64543 18.25 4.75 17.3546 4.75 16.25V7.75Z"
                        stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5.5 6.5L12 12.25L18.5 6.5" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span class="fs-7 fw-semibold">Newsletter</span>
            </div>
            <h5 class="my-2">Subscribe our newsletter</h5>
            <p>You’ll only receive updates on new templates, no spam, just what you signed up for.</p>
        </div>
        <form action="#" class="w-auto">
            <input type="email" class="form-control fs-7 mb-2 w-100" placeholder="Your email address" />
            <button type="submit" class="btn btn-dark w-100  button-effect-1">Subscribe</button>
        </form>
    </div>
    <div class="text-center">
        <p class="fs-7">
            2025 Copyright @ <span class="text-dark">Magzine.</span> <br class="d-none d-lg-block" />
            <span> All Rights Reserved </span>
        </p>
    </div>
    </div>
    <div class="sidebar-overlay"></div>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb list-unstyled d-flex flex-row gap-2 align-items-center m-0 ps-0 py-4">
                            <li class="breadcrumb-item"><a href="index-2.html" class="text-600 fs-7 hover-dark">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="icon-shape icon-xxs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 15 15" fill="none">
                                        <path d="M6.125 4.5625L9.5625 7.84375L6.125 11.125" stroke="#626568"
                                            stroke-width="0.9375" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </li>
                            <li class="breadcrumb-item active text-dark fs-7" aria-current="page">About Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- prettier-ignore -->
        <!-- About section 1 -->
        <section class="sec-1-about sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="ds-2 mb-0 text-anime-style-2">About Magzin</h2>
                        <p class="fs-56 m-0 text-anime-style-1">
                            We are a dedicated team of creators, strategists, and specialists focused on <br
                                class="d-none d-lg-block">
                            delivering thoughtful, high-quality work.
                        </p>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-12">
                        <div class="rounded-16 overflow-hidden hover-effect-1">
                            <img class="image cover-image" src="assets/imgs/page/img-117.png" alt="magzin">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 pe-lg-5">
                        <h5 class="mb-4">What we do</h5>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex gap-3">
                                <p class="fw-semi-bold mt-0 text-dark w-25">Curated Content</p>
                                <p class="w-75 mt-0">We deliver thoughtfully crafted articles—from trending topics to
                                    timeless advice—all written with care, creativity, and precision.</p>
                            </li>
                            <li class="d-flex gap-3">
                                <p class="fw-semi-bold mt-0 text-dark w-25">Expert Insights</p>
                                <p class="w-75 mt-0">Our team of writers and contributors includes experienced
                                    professionals
                                    who share actionable tips, proven strategies, and practical wisdom you can trust.</p>
                            </li>
                            <li class="d-flex gap-3">
                                <p class="fw-semi-bold mt-0 text-dark w-25">Community</p>
                                <p class="w-75 mt-0">We’re more than a platform—we’re a space for connection. We believe in
                                    the power of shared stories, ideas, and voices. Join us and be part of something
                                    meaningful.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 ">
                        <h5 class="mb-4">Our Values</h5>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex gap-3">
                                <p class="fw-semi-bold mt-0 text-dark w-25">Inspiration</p>
                                <p class="w-75 mt-0">We aim to inspire and empower our readers—personally and
                                    professionally—by providing meaningful tools, resources, and insights that spark growth
                                    and purpose.</p>
                            </li>
                            <li class="d-flex gap-3">
                                <p class="fw-semi-bold mt-0 text-dark w-25">Authenticity</p>
                                <p class="w-75 mt-0">We believe in being real. Our content is honest, transparent, and
                                    grounded in genuine experiences that resonate with our audience.</p>
                            </li>
                            <li class="d-flex gap-3">
                                <p class="fw-semi-bold mt-0 text-dark w-25">Creativity</p>
                                <p class="w-75 mt-0">We thrive on fresh ideas and original thinking. Creativity is at the
                                    heart of everything we do—from storytelling to design.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section 2 -->
        <section class="sec-2-about">
            <div class="container">
                <div class="row g-4 bg-50">
                    <div class="col-12">
                        <h2 class="mb-4 text-center text-anime-style-2">Creative Team</h2>
                    </div>
                    <!-- prettier-ignore -->
                    <div class="col-lg-3 col-md-6 col-12">
                    <div class="author-grid-wrap h-100">
                        <div class="hover-effect-1">
                            <div class="card-img-top">
                                <a href="page-author.html">
                                    <img src="assets/imgs/page/img-9.png" alt="magzin"
                                        class="author-image-avator w-100 h-100">
                                </a>
                            </div>
                        </div>
                        <div class="author-sticky-block-left-bottom">
                            <a href="page-author.html">
                                <h6 class="fs-7 mb-0">Emma Richardson</h6>
                            </a>
                            <p class="fs-7 m-0">Travel Editor</p>
                        </div>
                        <div class="author-sticky-corner-left-top"></div>
                        <div class="author-sticky-corner-right-bottom"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="author-grid-wrap h-100">
                        <div class="hover-effect-1">
                            <div class="card-img-top">
                                <a href="page-author.html">
                                    <img src="assets/imgs/page/img-10.png" alt="magzin"
                                        class="author-image-avator w-100 h-100">
                                </a>
                            </div>
                        </div>
                        <div class="author-sticky-block-left-bottom">
                            <a href="page-author.html">
                                <h6 class="fs-7 mb-0">Liam Carter</h6>
                            </a>
                            <p class="fs-7 m-0">Tech Blogger</p>
                        </div>
                        <div class="author-sticky-corner-left-top"></div>
                        <div class="author-sticky-corner-right-bottom"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="author-grid-wrap h-100">
                        <div class="hover-effect-1">
                            <div class="card-img-top">
                                <a href="page-author.html">
                                    <img src="assets/imgs/page/img-11.png" alt="magzin"
                                        class="author-image-avator w-100 h-100">
                                </a>
                            </div>
                        </div>
                        <div class="author-sticky-block-left-bottom">
                            <a href="page-author.html">
                                <h6 class="fs-7 mb-0">Noah Martinez</h6>
                            </a>
                            <p class="fs-7 m-0">Lifestyle & Wellness</p>
                        </div>
                        <div class="author-sticky-corner-left-top"></div>
                        <div class="author-sticky-corner-right-bottom"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="author-grid-wrap h-100">
                        <div class="hover-effect-1">
                            <div class="card-img-top">
                                <a href="page-author.html">
                                    <img src="assets/imgs/page/img-12.png" alt="magzin"
                                        class="author-image-avator w-100 h-100">
                                </a>
                            </div>
                        </div>
                        <div class="author-sticky-block-left-bottom">
                            <a href="page-author.html">
                                <h6 class="fs-7 mb-0">Oliver Scott</h6>
                            </a>
                            <p class="fs-7 m-0">Finance Editor</p>
                        </div>
                        <div class="author-sticky-corner-left-top"></div>
                        <div class="author-sticky-corner-right-bottom"></div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- About section 2 -->
        <section class="sec-2-about pt-100">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <h2 class="mb-0 text-center text-anime-style-2">Our Gallery</h2>
                        <p class="fs-56 m-0 text-anime-style-1">Driven by strategy and creativity, we specialize in
                            delivering impactful and refined results.</p>
                    </div>
                </div>
                <div class="row block-insta g-4">
                    <div class="col-lg-4">
                        <div class="picture-insta position-relative">
                            <div class="rounded-16 overflow-hidden hover-effect-1">
                                <img class="image cover-image" src="assets/imgs/page/img-118.png" alt="magzin">
                            </div>
                            <a href="#"
                                class="btn-link position-absolute top-50 start-50 translate-middle icon-shape icon-xl rounded-circle p-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                    viewBox="0 0 34 34" fill="none">
                                    <path d="M14.5249 12.0503L22.1263 11.8735L21.9495 19.4749" stroke="#0E0E0F"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21.9498 12.0502L11.8735 22.1265" stroke="#0E0E0F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="picture-insta position-relative">
                            <div class="rounded-16 overflow-hidden hover-effect-1">
                                <img class="image cover-image" src="assets/imgs/page/img-119.png" alt="magzin">
                            </div>
                            <a href="#"
                                class="btn-link position-absolute top-50 start-50 translate-middle icon-shape icon-xl rounded-circle p-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                    viewBox="0 0 34 34" fill="none">
                                    <path d="M14.5249 12.0503L22.1263 11.8735L21.9495 19.4749" stroke="#0E0E0F"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21.9498 12.0502L11.8735 22.1265" stroke="#0E0E0F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="picture-insta position-relative">
                            <div class="rounded-16 overflow-hidden hover-effect-1">
                                <img class="image cover-image" src="assets/imgs/page/img-120.png" alt="magzin">
                            </div>
                            <a href="#"
                                class="btn-link position-absolute top-50 start-50 translate-middle icon-shape icon-xl rounded-circle p-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                    viewBox="0 0 34 34" fill="none">
                                    <path d="M14.5249 12.0503L22.1263 11.8735L21.9495 19.4749" stroke="#0E0E0F"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21.9498 12.0502L11.8735 22.1265" stroke="#0E0E0F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="picture-insta position-relative">
                            <div class="rounded-16 overflow-hidden hover-effect-1">
                                <img class="image cover-image" src="assets/imgs/page/img-121.png" alt="magzin">
                            </div>
                            <a href="#"
                                class="btn-link position-absolute top-50 start-50 translate-middle icon-shape icon-xl rounded-circle p-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                    viewBox="0 0 34 34" fill="none">
                                    <path d="M14.5249 12.0503L22.1263 11.8735L21.9495 19.4749" stroke="#0E0E0F"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21.9498 12.0502L11.8735 22.1265" stroke="#0E0E0F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="picture-insta position-relative">
                            <div class="rounded-16 overflow-hidden hover-effect-1">
                                <img class="image cover-image" src="assets/imgs/page/img-122.png" alt="magzin">
                            </div>
                            <a href="#"
                                class="btn-link position-absolute top-50 start-50 translate-middle icon-shape icon-xl rounded-circle p-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                    viewBox="0 0 34 34" fill="none">
                                    <path d="M14.5249 12.0503L22.1263 11.8735L21.9495 19.4749" stroke="#0E0E0F"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21.9498 12.0502L11.8735 22.1265" stroke="#0E0E0F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="picture-insta position-relative">
                            <div class="rounded-16 overflow-hidden hover-effect-1">
                                <img class="image cover-image" src="assets/imgs/page/img-123.png" alt="magzin">
                            </div>
                            <a href="#"
                                class="btn-link position-absolute top-50 start-50 translate-middle icon-shape icon-xl rounded-circle p-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                    viewBox="0 0 34 34" fill="none">
                                    <path d="M14.5249 12.0503L22.1263 11.8735L21.9495 19.4749" stroke="#0E0E0F"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21.9498 12.0502L11.8735 22.1265" stroke="#0E0E0F" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container sec-padding">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="block-newsletter position-relative">
                            <div class="newsletter text-center">
                                <div class="decorate position-absolute top-0 end-0 m-4">
                                    <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z"
                                            fill="#0E0E0F" />
                                    </svg>
                                </div>
                                <div
                                    class="block-title d-flex align-items-center justify-content-center gap-1 fs-7 text-600">
                                    <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M4.75 7.75C4.75 6.64543 5.64543 5.75 6.75 5.75H17.25C18.3546 5.75 19.25 6.64543 19.25 7.75V16.25C19.25 17.3546 18.3546 18.25 17.25 18.25H6.75C5.64543 18.25 4.75 17.3546 4.75 16.25V7.75Z"
                                            stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M5.5 6.5L12 12.25L18.5 6.5" stroke="#0E0E0F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="fs-7 fw-regular">Join Us</span>
                                </div>
                                <div class="block-title mb-5">
                                    <h3 class="my-3 text-anime-style-3">
                                        Subscribe to our newsletter <br class="d-none d-lg-block">
                                        and Stay updated each week
                                    </h3>
                                </div>
                                <form action="#" class="position-relative">
                                    <div
                                        class="d-flex flex-wrap flex-md-nowrap justify-content-center gap-2 align-items-center mb-3">
                                        <input class="form-control" type="text" placeholder="Your email address">
                                        <button class="btn btn-dark button-effect-1" type="submit">Subscribe</button>
                                    </div>
                                    <span class="fs-7 fw-regular">You’ll only receive valuable news updates—no spam.</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
