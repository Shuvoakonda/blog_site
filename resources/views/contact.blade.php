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
                <div class="col-12">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18917.178328898015!2d-81.87205212082073!3d36.244635574266084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8850f355d556abbf%3A0x7fb25598fe987c21!2s1342%20Laurel%20Creek%20Rd%2C%20Sugar%20Grove%2C%20NC%2028679%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1752052708066!5m2!1svi!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="mb-2">Address</h5>
                            <p class="m-0">1342 Laurel Creek Rd</p>
                            <p class="m-0">Boone, North Carolina (NC), 28607</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="mb-2">Contact</h5>
                            <p class="m-0">+1 (234) 567-8901</p>
                            <p class="m-0">+1 (234) 567-8901</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="mb-2">Email</h5>
                            <p class="m-0">Monay - Friday: 08:00 - 17:00</p>
                            <p class="m-0">Saturday - Sunday: 10:00 - 16:00</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <h4 class="mt-5 mb-2 pb-4 pt-3">Get in touch</h4>
                            <div class="row wow img-custom-anim-left g-3 border-top">
                                <div class="col-md-6 col-lg-4">
                                    <div class="input-group d-flex align-items-center">
                                        <div class="icon-input ps-3">
                                            <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path class="stroke-dark"
                                                    d="M12 11.25C13.7949 11.25 15.25 9.79493 15.25 8C15.25 6.20507 13.7949 4.75 12 4.75C10.2051 4.75 8.75 6.20507 8.75 8C8.75 9.79493 10.2051 11.25 12 11.25Z"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path class="stroke-dark"
                                                    d="M6.84723 19.25H17.1522C18.2941 19.25 19.1737 18.2681 18.6405 17.2584C17.856 15.7731 16.0677 14 11.9997 14C7.93174 14 6.1434 15.7731 5.35897 17.2584C4.8257 18.2681 5.70531 19.25 6.84723 19.25Z"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <input type="text" class="form-control ms-0" name="name"
                                            placeholder="Your name *" aria-label="username" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="input-group d-flex align-items-center">
                                        <div class="icon-input ps-3">
                                            <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M4.75 7.75C4.75 6.64543 5.64543 5.75 6.75 5.75H17.25C18.3546 5.75 19.25 6.64543 19.25 7.75V16.25C19.25 17.3546 18.3546 18.25 17.25 18.25H6.75C5.64543 18.25 4.75 17.3546 4.75 16.25V7.75Z"
                                                    stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M5.5 6.5L12 12.25L18.5 6.5" stroke="#0E0E0F" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <input type="text" class="form-control ms-0" name="name"
                                            placeholder="info@webmail.com" aria-label="email" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="input-group d-flex align-items-center">
                                        <div class="icon-input ps-3">
                                            <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path class="stroke-dark"
                                                    d="M6.75 19.25H17.25C18.3546 19.25 19.25 18.3546 19.25 17.25V9.75001L12 4.75L4.75 9.75001V17.25C4.75 18.3546 5.64544 19.25 6.75 19.25Z"
                                                    stroke="#111827" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path class="stroke-dark"
                                                    d="M9.75 15.7495C9.75 14.6449 10.6455 13.7495 11.75 13.7495H12.25C13.3546 13.7495 14.25 14.6449 14.25 15.7495V19.2495H9.75V15.7495Z"
                                                    stroke="#111827" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <input type="text" class="form-control ms-0" name="name"
                                            placeholder="Website" aria-label="website" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group d-flex">
                                        <div
                                            class="icon-input pt-2 ps-3 align-items-start border border-end-0 rounded-1 rounded-end-0">
                                            <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg"
                                                width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <path class="stroke-dark"
                                                    d="M5.5 2.14844H3C1.89543 2.14844 1 3.04387 1 4.14844V14.6484C1 15.753 1.89543 16.6484 3 16.6484H13.5C14.6046 16.6484 15.5 15.753 15.5 14.6484V12.1484"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path class="fill-dark"
                                                    d="M17.3285 1.20344L16.4448 0.319749C16.0185 -0.106583 15.3248 -0.106583 14.8984 0.319749L7.82915 7.38907C7.76373 7.45449 7.71914 7.53782 7.70096 7.62854L7.2591 9.83772C7.22839 9.99137 7.27647 10.1502 7.38729 10.261C7.47605 10.3498 7.59561 10.3983 7.71864 10.3983C7.74923 10.3983 7.77997 10.3953 7.81053 10.3892L10.0197 9.94732C10.1104 9.92917 10.1938 9.88455 10.2592 9.81913L17.3285 2.74984C17.3285 2.74984 17.3286 2.74984 17.3286 2.74981C17.7549 2.32351 17.7549 1.6298 17.3285 1.20344ZM9.69678 9.05607L8.31606 9.33225L8.59224 7.95153L14.3461 2.19754L15.4507 3.30214L9.69678 9.05607ZM16.6658 2.0871L16.1135 2.6394L15.0089 1.53479L15.5612 0.982524C15.6221 0.921601 15.7212 0.92157 15.7821 0.982493L16.6658 1.86618C16.7267 1.92707 16.7267 2.0262 16.6658 2.0871Z"
                                                    fill="black" />
                                            </svg>
                                        </div>
                                        <textarea class="form-control" name="name" placeholder="Your message...." aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark rounded-8 gap-2  button-effect-1">Send
                                        Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Home 1 Section 11-->
        <div class="sec-11-home-1 bg-white">
            <div class="wow img-custom-anim-top block-insta">
                <div class="swiper swiper-insta">
                    <div class="swiper-wrapper z-1">
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-46.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-47.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-48.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-49.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-50.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-51.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-52.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-53.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-54.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-46.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-47.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-48.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-49.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-50.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-51.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-52.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-53.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="picture-insta">
                                <div class="hover-effect-1">
                                    <img class="image" src="assets/imgs/page/img-54.png" alt="magzin">
                                </div>
                                <a href="#"
                                    class="btn-link position-absolute bottom-0 mb-4 start-50 translate-middle-x changeless">
                                    <img src="assets/imgs/template/icons/insta.svg" alt="magzin">
                                    <span class="fw-regular fs-7">magzin</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-50 pb-70"></div>
    </main>
@endsection
