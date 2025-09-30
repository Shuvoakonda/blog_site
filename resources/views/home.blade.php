@extends('layouts.app')

@section('content')
    @include('components.header')
    <!--Home 1 Section 9-->
    <section class="sec-9-home-1">
        <div class="custom-container position-relative">
            <div class="swiper-btn d-none align-items-center justify-content-between">
                <div class="swiper-btn-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M10.25 6.75L4.75 12L10.25 17.25" stroke="#0e0e0f" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M19.25 12H5" stroke="#0e0e0f" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="swiper-btn-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0e0e0f" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 12H4.75" stroke="#0e0e0f" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="block-card-swiper" id="gallery-background">
                <div class="container">
                    <div class="row align-items-stretch g-5">
                        <div class="col-lg-6">
                            <div class="swiper gallery-left overflow-y-visible">
                                <div class="swiper-wrapper">
                                    @foreach ($posts as $post)
                                        <div class="swiper-slide w-100" data-bg="{{ $post->featured_image_url }}">
                                            <div class="article">
                                                <div class="card-body">
                                                    <a href="{{ route('post.show', $post->slug) }}"
                                                        class="badge bg-2 fs-8 mb-3">{{ $post->category->name ?? '-' }}</a>
                                                    <h5 class="card-title mb-0 text-white changeless">{{ $post->title }}
                                                    </h5>
                                                    <p class="card-text text-white mb-0 fs-7 mt-3 changeless">
                                                        {{ $post->excerpt }}</p>
                                                    <div
                                                        class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-5">
                                                        <a href="#" class="author d-flex align-items-center gap-2">
                                                            <img class="avatar avatar-md rounded-circle"
                                                                src="{{ $post->user->avatar ?? asset('assets/img/default.jpg') }}"
                                                                alt="author">
                                                            <span
                                                                class="fs-7 text-white fw-regular changeless">{{ $post->user->name ?? $post->author }}</span>
                                                        </a>
                                                        <ul
                                                            class="d-flex align-items-center gap-4 text-white m-0 ps-3 changeless">
                                                            <li>
                                                                <p class="fs-7 m-0 text-white changeless">
                                                                    {{ $post->published_at ? $post->published_at->format('M d, Y') : '-' }}
                                                                </p>
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="right ms-md-auto ms-5 d-flex align-items-center gap-3 me-5 pe-5">
                                                            <a href="#" class="comment fs-8">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z"
                                                                        fill="#fff" />
                                                                </svg>
                                                                {{-- <span class="text-white changeless">
                                                                    <span class="odometer text-nowrap"
                                                                        data-count="{{ $post->comments_count ?? 0 }}"></span>
                                                                </span> --}}
                                                            </a>
                                                            <a href="#" class="readers fs-8">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z"
                                                                        fill="#fff" />
                                                                </svg>
                                                                <span class="text-white changeless">
                                                                    <span class="odometer text-nowrap"
                                                                        data-count="{{ $post->view_count ?? 0 }}"></span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 ms-lg-auto align-self-stretch">
                            <div class="swiper gallery-thumbs h-100">
                                <div class="swiper-wrapper">
                                    @foreach ($posts as $post)
                                        <div class="swiper-slide w-100">
                                            <div class="card-swiper-thumb">
                                                <div class="thumb changeless">
                                                    <img src="{{ $post->featured_image_url }}" alt="thumb">
                                                </div>
                                                <div class="card-content">
                                                    <h6 class="text-white mb-0 changeless">{{ $post->title }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Home 3 Section 1-->
    @php
        $time = $post->reading_time ?? 6; // default 6
        if ($time < 60) {
            $formattedTime = $time . ' mins read';
        } else {
            $hours = floor($time / 60);
            $minutes = $time % 60;
            $formattedTime =
                $hours . ' hr' . ($hours > 1 ? 's' : '') . ($minutes > 0 ? ' ' . $minutes . ' mins' : '') . ' read';
        }
    @endphp
    <section class="sec-1-home-3 sec-padding">
        <div class="container">
            <div class="rounded-16 p-4 bg" data-background="{{ asset('assets/imgs/page/bg-home3-sec1.png') }}">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper swiper-popup-search">
                            <div class="swiper-wrapper">
                                @foreach ($posts as $post)
                                    <div class="swiper-slide p-3 rounded-16 border-200 hover-up">
                                        <div class="article card-10 style-1">
                                            <div class="hover-effect-1">
                                                <a href="{{ route('post.show', $post->slug) }}" class="card-img">
                                                    <img class="w-100" src="{{ $post->featured_image_url }}"
                                                        alt="{{ $post->title }}">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <a href="{{ route('post.show', $post->slug) }}">
                                                    <h6 class="fs-7 mb-2 text-truncate-2">{{ $post->title }}</h6>
                                                </a>
                                                <div class="d-flex align-items-center text-600">
                                                    <span
                                                        class="fs-8">{{ $post->published_at ? $post->published_at->format('d M, Y') : '-' }}</span>
                                                    <ul class="ps-4 m-0">
                                                        <li>
                                                            <span class="fs-8">{{ $formattedTime }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @if ($posts->isEmpty())
                                    <div class="swiper-slide p-3 rounded-16 border-200 hover-up">
                                        <div class="article card-10 style-1">
                                            <div class="card-body">
                                                <h6 class="fs-7 mb-2 text-truncate-2">No posts found.</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Home 2 Section 6-->
    <section class="sec-6-home-2 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 d-none">
                    <div
                        class="section-title dark @@classList d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div class="d-flex">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z"
                                        fill="#0E0E0F" />
                                </svg>
                                <h5 class="mb-0 text-anime-style-2">For you</h5>
                            </div>
                            <p class="fs-7 ms-3 mb-2 d-none d-lg-block text-anime-style-1">Handpicked Just for You</p>
                        </div>
                        <div class="d-flex d-none d-md-block">
                            <a href="#" class="view-more white">
                                <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">View More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-block">
                    <div class="section-title d-flex align-items-center justify-content-between gap-3">
                        <div class="d-flex">
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z"
                                        fill="#0E0E0F" />
                                </svg>
                                <h5 class="mb-0 text-anime-style-2">Top Trending</h5>
                            </div>
                            <p class="fs-7 ms-3 mb-2 d-none d-lg-block text-anime-style-1">Today’s Most Popular Stories</p>
                        </div>
                        <div class="d-flex d-none d-md-block">
                            <a href="#" class="view-more">
                                <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">View More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 g-4">
                <div class="col-lg-6">
                    <div class="article card-1">
                        <div class="hover-effect-1">
                            <div class="card-img-top thumbnail">
                                <a href="single-3.html">
                                    <img src="assets/imgs/page/img-71.png" alt="magzin" class="cover-image">
                                </a>
                                <a href="#"
                                    class="badge bg-2 fs-8 position-absolute top-0 start-0 m-3">Lifestyle</a>
                            </div>
                        </div>
                        <div class="card-body position-relative hover-up">
                            <div class="card-corner">
                                <a href="#" class="arrow-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="curve-one"></div>
                                <div class="curve-two"></div>
                            </div>
                            <div class="left">
                                <a href="single-3.html" class="hover-underline">
                                    <h5 class="card-title mb-0">From Street to Runway: How Urban Fashion is Redefining
                                        Style</h5>
                                </a>
                                <p class="card-text text-600 fs-7 mb-0 mt-4 text-truncate-3">Once dismissed as
                                    counterculture, urban fashion has climbed its way from city sidewalks to the catwalks of
                                    major fashion capitals.</p>
                                <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-4">
                                    <a href="#" class="author d-flex align-items-center gap-2">
                                        <img class="avatar avatar-md rounded-circle"
                                            src="assets/imgs/template/author/author-4.png" alt="magzin">
                                        <span class="fs-7 text-dark fw-regular">Evara Rose</span>
                                    </a>
                                    <ul class="d-flex align-items-center gap-4 text-600 m-0 ps-3">
                                        <li>
                                            <p class="fs-8 m-0">Jun 13, 2025</p>
                                        </li>
                                    </ul>
                                    <div class="right ms-md-auto ms-5 d-flex flex-row align-items-center gap-3 me-5 pe-5">
                                        <a href="#" class="comment fs-8">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z"
                                                    fill="#626568" />
                                            </svg>
                                            <span class="odometer text-nowrap" data-count="25"></span>
                                        </a>
                                        <a href="#" class="readers fs-8">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z"
                                                    fill="#626568" />
                                            </svg>
                                            <span class="odometer text-nowrap" data-count="162"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <!-- prettier-ignore -->
                            <div class="col-12 col-md-6">
                        <div class="article card-5">
                            <div class="post-link">
                                <div class="hover-effect-1">
                                    <div class="position-relative card-img-top thumbnail">
                                        <a href="single-3.html">
                                            <img src="assets/imgs/page/img-26.png" alt="magzin" class="cover-image">
                                        </a>
                                        <a href="#" class="badge bg-1 fs-8">Culture</a>
                                    </div>
                                </div>
                                <div class="card-corner @@corner-bg-color no-border">
                                    <a href="single-3.html" class="arrow-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <div class="curve-one"></div>
                                    <div class="curve-two"></div>
                                </div>
                            </div>
                            <div class="card-body mt-4">
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-0">The Rise of Mindful Living in a Digital World</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="article card-5">
                            <div class="post-link">
                                <div class="hover-effect-1">
                                    <div class="position-relative card-img-top thumbnail">
                                        <a href="single-3.html">
                                            <img src="assets/imgs/page/img-27.png" alt="magzin" class="cover-image">
                                        </a>
                                        <a href="#" class="badge bg-1 fs-8">Education</a>
                                    </div>
                                </div>
                                <div class="card-corner @@corner-bg-color no-border">
                                    <a href="single-3.html" class="arrow-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <div class="curve-one"></div>
                                    <div class="curve-two"></div>
                                </div>
                            </div>
                            <div class="card-body mt-4">
                                <a href="single-3.html" class="hover-underline">
                                    <h6 class="card-title mb-0">Plant-Based Living: Trends, Recipes, and Real Talk</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- prettier-ignore -->
                            <div class="mt-lg-5">
                    <div class="article card-6 @@cardClass">
                        <a href="single-3.html" class="thumbnail overflow-hidden">
                            <img src="assets/imgs/page/img-69.png" alt="magzin">
                        </a>
                        <div class="card-body mt-md-0 mt-4">
                            <a href="single-3.html" class="hover-underline">
                                <h6 class="card-title @@cardTitle mb-2">Fashion, Tips, Trends and Celebrity
                                    Style</h6>
                            </a>
                            <ul class="d-flex align-items-center gap-4 text-600 @@text-color m-0 ps-0">
                                <li class="list-unstyled">
                                    <p class="fs-8 m-0 @@text-color">Jun 13, 2025</p>
                                </li>
                                <li>
                                    <p class="fs-8 m-0 @@text-color">6 mins read</p>
                                </li>
                            </ul>
                            <a href="#" class="comment ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z"
                                        fill="#626568" />
                                </svg>
                                <span class="odometer text-nowrap" data-count="98"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="article card-6 @@cardClass">
                        <a href="single-3.html" class="thumbnail overflow-hidden">
                            <img src="assets/imgs/page/img-66.png" alt="magzin">
                        </a>
                        <div class="card-body mt-md-0 mt-4">
                            <a href="single-3.html" class="hover-underline">
                                <h6 class="card-title @@cardTitle mb-2">The Science of Happiness: What
                                    Actually Works</h6>
                            </a>
                            <ul class="d-flex align-items-center gap-4 text-600 @@text-color m-0 ps-0">
                                <li class="list-unstyled">
                                    <p class="fs-8 m-0 @@text-color">Jun 13, 2025</p>
                                </li>
                                <li>
                                    <p class="fs-8 m-0 @@text-color">6 mins read</p>
                                </li>
                            </ul>
                            <a href="#" class="comment ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z"
                                        fill="#626568" />
                                </svg>
                                <span class="odometer text-nowrap" data-count="36"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!--Home 3 Section 2-->
    <section class="sec-2-home-3 overflow-hidden">
        <div class="container">
            <div class="row g-lg-4 g-5">
                <div class="col-lg-8">
                    <div>
                        <div class="section-title d-flex align-items-center justify-content-between gap-3">
                            <div class="d-flex">
                                <div class="d-flex align-items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z"
                                            fill="#0E0E0F" />
                                    </svg>
                                    <h5 class="mb-0 text-anime-style-2">Latest</h5>
                                </div>
                                <p class="fs-7 ms-3 mb-2 d-none d-lg-block text-anime-style-1">Real-Time Updates That
                                    Matter</p>
                            </div>
                            <div class="d-flex d-none d-md-block">
                                <a href="#" class="view-more">
                                    <span class="circle" aria-hidden="true">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">View More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 g-4">
                        <!-- prettier-ignore -->
                            <div class="col-md-6 col-12">
                        <div class="article card-7">
                            <div class="card-body">
                                <div class="card-corner">
                                    <a href="single-3.html" class="arrow-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <div class="curve-one"></div>
                                    <div class="curve-two"></div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                        <a href="#" class="badge bg-1 fs-8">Lifestyle</a>
                                        <a href="#" class="badge bg-3 fs-8">Model</a>
                                        <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                            <li>
                                                <p class="fs-8 m-0">6 mins readTime</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="book-mark ms-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z"
                                                    stroke="#626568" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                    <a href="single-3.html" class="hover-underline">
                                        <h6 class="card-title mb-4">Gallery to Garment: Art Meets Design</h6>
                                    </a>
                                    <div class="position-relative card-img">
                                        <div class="hover-effect-30 rounded-16 overflow-hidden">
                                            <a href="single-3.html">
                                                <img class=" cover-image w-100 h-100" src="assets/imgs/page/img-56.png"
                                                    alt="magzin">
                                            </a>
                                        </div>
                                        <a href="#"
                                            class="d-none play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                    <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">When brushstrokes
                                        inspire hemlines and canvases shape silhouettes, the result is a striking fusion of
                                        visual art and fashion design.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="article card-7">
                            <div class="card-body">
                                <div class="card-corner">
                                    <a href="single-3.html" class="arrow-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <div class="curve-one"></div>
                                    <div class="curve-two"></div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="card-info d-flex flex-wrap align-items-center gap-2 mb-3">
                                        <a href="#" class="badge bg-3 fs-8">Lifestyle</a>
                                        <a href="#" class="badge d-none fs-8"></a>
                                        <ul class="d-flex align-items-center text-600 m-0 ps-3">
                                            <li>
                                                <p class="fs-8 m-0">6 mins readTime</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="book-mark ms-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M5.625 5.62498C5.625 4.7045 6.37119 3.95831 7.29167 3.95831H12.7083C13.6288 3.95831 14.375 4.7045 14.375 5.62498V16.0416L10 12.2916L5.625 16.0416V5.62498Z"
                                                    stroke="#626568" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                    <a href="single-3.html" class="hover-underline">
                                        <h6 class="card-title mb-4">Sustainable Eating in a Climate-Conscious World</h6>
                                    </a>
                                    <div class="position-relative card-img">
                                        <div class="hover-effect-30 rounded-16 overflow-hidden">
                                            <a href="single-3.html">
                                                <img class=" cover-image w-100 h-100" src="assets/imgs/page/img-7.png"
                                                    alt="magzin">
                                            </a>
                                        </div>
                                        <a href="https://www.youtube.com/watch?v=_H9g5p9IP6E"
                                            class="d-flex play-btn popup-video z-2 rounded-circle icon-shape icon-xl position-absolute top-50 start-50 translate-middle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M7.6464 4.96873L18.1434 10.2052C19.6152 10.9418 19.6148 13.0388 18.1428 13.7748L7.6457 19.0391C6.3158 19.704 4.75 18.7388 4.75 17.2541L4.75 6.75335C4.75 5.26832 6.3165 4.30314 7.6464 4.96873Z"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                    <p class="card-text text-600 fs-7 mb-0 mt-4 pe-5 text-truncate-3">As climate concerns
                                        grow, our plates are becoming powerful tools for change. Sustainable eating—centered
                                        on plant-based choices, local sourcing, and reducing food waste.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="article card-9 d-flex flex-md-row align-items-stretch flex-column">
                            <!-- <div class="hover-effect-1"> -->
                            <a href="single-3.html" class="card-img-top">
                                <span class="hover-effect-1">
                                    <img src="assets/imgs/page/img-83.png" alt="magzin" class="cover-image thumbnail">
                                </span>
                            </a>
                            <!-- </div> -->
                            <div class="card-body">
                                <div class="card-corner">
                                    <a href="single-3.html" class="arrow-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <div class="curve-one"></div>
                                    <div class="curve-two"></div>
                                </div>

                                <div class="left">
                                    <div class="card-info d-flex align-items-center mb-3">
                                        <a href="#" class="badge bg-1 fs-8">Art</a>
                                        <ul class="d-flex align-items-center text-600 m-0 ps-4">
                                            <li>
                                                <p class="fs-8 m-0">6 mins read</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="single-3.html" class="hover-underline">
                                        <h5 class="card-title mb-0 mt-3 text-truncate-2">Embracing the Art of Slowing Down
                                            in a Fast-Paced World</h5>
                                    </a>
                                    <p class="card-text text-600 fs-7 mb-0 mt-3 text-truncate-2">Once dismissed as
                                        counterculture, urban fashion has climbed its way from city sidewalks to the
                                        catwalks of major fashion capitals.</p>
                                    <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-5">
                                        <div class="right d-flex align-items-center gap-3 me-5 pe-5">
                                            <a href="#" class="comment fs-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z"
                                                        fill="#626568" />
                                                </svg>
                                                <span class="odometer text-nowrap" data-count="98"></span>
                                            </a>
                                            <a href="#" class="readers fs-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z"
                                                        fill="#626568" />
                                                </svg>
                                                <span class="odometer text-nowrap" data-count="162"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="article card-9 d-flex flex-md-row align-items-stretch flex-column">
                            <!-- <div class="hover-effect-1"> -->
                            <a href="single-3.html" class="card-img-top">
                                <span class="hover-effect-1">
                                    <img src="assets/imgs/page/img-69.png" alt="magzin" class="cover-image thumbnail">
                                </span>
                            </a>
                            <!-- </div> -->
                            <div class="card-body">
                                <div class="card-corner">
                                    <a href="single-3.html" class="arrow-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <div class="curve-one"></div>
                                    <div class="curve-two"></div>
                                </div>

                                <div class="left">
                                    <div class="card-info d-flex align-items-center mb-3">
                                        <a href="#" class="badge bg-3 fs-8">Technology</a>
                                        <ul class="d-flex align-items-center text-600 m-0 ps-4">
                                            <li>
                                                <p class="fs-8 m-0">6 mins read</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="single-3.html" class="hover-underline">
                                        <h5 class="card-title mb-0 mt-3 text-truncate-2">The Emotional Impact of
                                            Architecture and Space</h5>
                                    </a>
                                    <p class="card-text text-600 fs-7 mb-0 mt-3 text-truncate-2">Once dismissed as
                                        counterculture, urban fashion has climbed its way from city sidewalks to the
                                        catwalks of major fashion capitals.</p>
                                    <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-5">
                                        <div class="right d-flex align-items-center gap-3 me-5 pe-5">
                                            <a href="#" class="comment fs-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z"
                                                        fill="#626568" />
                                                </svg>
                                                <span class="odometer text-nowrap" data-count="98"></span>
                                            </a>
                                            <a href="#" class="readers fs-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z"
                                                        fill="#626568" />
                                                </svg>
                                                <span class="odometer text-nowrap" data-count="162"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="article card-9 d-flex flex-md-row align-items-stretch flex-column">
                            <!-- <div class="hover-effect-1"> -->
                            <a href="single-3.html" class="card-img-top">
                                <span class="hover-effect-1">
                                    <img src="assets/imgs/page/img-68.png" alt="magzin" class="cover-image thumbnail">
                                </span>
                            </a>
                            <!-- </div> -->
                            <div class="card-body">
                                <div class="card-corner">
                                    <a href="single-3.html" class="arrow-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <div class="curve-one"></div>
                                    <div class="curve-two"></div>
                                </div>

                                <div class="left">
                                    <div class="card-info d-flex align-items-center mb-3">
                                        <a href="#" class="badge bg-2 fs-8">Science</a>
                                        <ul class="d-flex align-items-center text-600 m-0 ps-4">
                                            <li>
                                                <p class="fs-8 m-0">6 mins read</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="single-3.html" class="hover-underline">
                                        <h5 class="card-title mb-0 mt-3 text-truncate-2">Minimalist Design: Finding Beauty
                                            in Simplicity</h5>
                                    </a>
                                    <p class="card-text text-600 fs-7 mb-0 mt-3 text-truncate-2">Once dismissed as
                                        counterculture, urban fashion has climbed its way from city sidewalks to the
                                        catwalks of major fashion capitals.</p>
                                    <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-5">
                                        <div class="right d-flex align-items-center gap-3 me-5 pe-5">
                                            <a href="#" class="comment fs-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z"
                                                        fill="#626568" />
                                                </svg>
                                                <span class="odometer text-nowrap" data-count="98"></span>
                                            </a>
                                            <a href="#" class="readers fs-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z"
                                                        fill="#626568" />
                                                </svg>
                                                <span class="odometer text-nowrap" data-count="162"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="article card-9 d-flex flex-md-row align-items-stretch flex-column">
                            <!-- <div class="hover-effect-1"> -->
                            <a href="single-3.html" class="card-img-top">
                                <span class="hover-effect-1">
                                    <img src="assets/imgs/page/img-67.png" alt="magzin" class="cover-image thumbnail">
                                </span>
                            </a>
                            <!-- </div> -->
                            <div class="card-body">
                                <div class="card-corner">
                                    <a href="single-3.html" class="arrow-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <div class="curve-one"></div>
                                    <div class="curve-two"></div>
                                </div>

                                <div class="left">
                                    <div class="card-info d-flex align-items-center mb-3">
                                        <a href="#" class="badge bg-4 fs-8">Health</a>
                                        <ul class="d-flex align-items-center text-600 m-0 ps-4">
                                            <li>
                                                <p class="fs-8 m-0">6 mins read</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="single-3.html" class="hover-underline">
                                        <h5 class="card-title mb-0 mt-3 text-truncate-2">The Science of Happiness: What
                                            Actually Works</h5>
                                    </a>
                                    <p class="card-text text-600 fs-7 mb-0 mt-3 text-truncate-2">Once dismissed as
                                        counterculture, urban fashion has climbed its way from city sidewalks to the
                                        catwalks of major fashion capitals.</p>
                                    <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-5">
                                        <div class="right d-flex align-items-center gap-3 me-5 pe-5">
                                            <a href="#" class="comment fs-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z"
                                                        fill="#626568" />
                                                </svg>
                                                <span class="odometer text-nowrap" data-count="98"></span>
                                            </a>
                                            <a href="#" class="readers fs-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z"
                                                        fill="#626568" />
                                                </svg>
                                                <span class="odometer text-nowrap" data-count="162"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="article card-9 d-flex flex-md-row align-items-stretch flex-column">
                            <!-- <div class="hover-effect-1"> -->
                            <a href="single-3.html" class="card-img-top">
                                <span class="hover-effect-1">
                                    <img src="assets/imgs/page/img-66.png" alt="magzin" class="cover-image thumbnail">
                                </span>
                            </a>
                            <!-- </div> -->
                            <div class="card-body">
                                <div class="card-corner">
                                    <a href="single-3.html" class="arrow-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M13.75 6.75L19.25 12L13.75 17.25" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19 12H4.75" stroke="#0E0E0F" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <div class="curve-one"></div>
                                    <div class="curve-two"></div>
                                </div>

                                <div class="left">
                                    <div class="card-info d-flex align-items-center mb-3">
                                        <a href="#" class="badge bg-5 fs-8">Lifestyle</a>
                                        <ul class="d-flex align-items-center text-600 m-0 ps-4">
                                            <li>
                                                <p class="fs-8 m-0">6 mins read</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="single-3.html" class="hover-underline">
                                        <h5 class="card-title mb-0 mt-3 text-truncate-2">Why Freelancers Are Changing the
                                            Future of Work</h5>
                                    </a>
                                    <p class="card-text text-600 fs-7 mb-0 mt-3 text-truncate-2">Once dismissed as
                                        counterculture, urban fashion has climbed its way from city sidewalks to the
                                        catwalks of major fashion capitals.</p>
                                    <div class="bottom mt-auto d-flex flex-wrap align-items-center gap-2 pt-5">
                                        <div class="right d-flex align-items-center gap-3 me-5 pe-5">
                                            <a href="#" class="comment fs-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M2.50018 5.43423C2.50018 4.26961 3.44494 3.3255 4.61035 3.3255H15.39C16.5554 3.3255 17.5002 4.26961 17.5002 5.43422V13.1078C17.5002 14.2724 16.5554 15.2165 15.39 15.2165H6.3295L3.41902 17.3786C3.24443 17.5083 3.01159 17.5285 2.81722 17.4309C2.62285 17.3333 2.50018 17.1345 2.50018 16.9171V5.43423ZM4.61035 4.47571C4.08062 4.47571 3.65118 4.90485 3.65118 5.43423V15.7729L5.79569 14.1799C5.89495 14.1062 6.01534 14.0663 6.13902 14.0663H15.39C15.9197 14.0663 16.3492 13.6372 16.3492 13.1078V5.43422C16.3492 4.90485 15.9197 4.47571 15.39 4.47571H4.61035Z"
                                                        fill="#626568" />
                                                </svg>
                                                <span class="odometer text-nowrap" data-count="98"></span>
                                            </a>
                                            <a href="#" class="readers fs-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.186 10.3224C15.734 13.039 12.9803 14.7266 10.001 14.7266C7.01977 14.7266 4.26612 13.039 2.81407 10.3224C2.70224 10.1114 2.70224 9.88843 2.81407 9.67767C4.26612 6.96107 7.01977 5.27366 10.001 5.27366C12.9803 5.27366 15.7339 6.96107 17.186 9.67767C17.2998 9.88843 17.2998 10.1114 17.186 10.3224ZM18.1135 9.13905C16.4744 6.07185 13.366 4.16669 10.001 4.16669C6.63409 4.16669 3.52561 6.07185 1.88652 9.13905C1.59341 9.68631 1.59341 10.3137 1.88652 10.8606C3.52561 13.9278 6.63409 15.8334 10.001 15.8334C13.366 15.8334 16.4744 13.9278 18.1135 10.8606C18.4066 10.3138 18.4066 9.68631 18.1135 9.13905ZM10.001 12.2707C11.2024 12.2707 12.18 11.2522 12.18 9.99993C12.18 8.7477 11.2024 7.72912 10.001 7.72912C8.79769 7.72912 7.82002 8.7477 7.82002 9.99993C7.82002 11.2522 8.79773 12.2707 10.001 12.2707ZM10.001 6.62215C8.21147 6.62215 6.75752 8.13757 6.75752 9.99997C6.75752 11.8628 8.21151 13.3776 10.001 13.3776C11.7886 13.3776 13.2425 11.8627 13.2425 9.99997C13.2425 8.13757 11.7886 6.62215 10.001 6.62215Z"
                                                        fill="#626568" />
                                                </svg>
                                                <span class="odometer text-nowrap" data-count="162"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <!-- prettier-ignore -->
                            <div class="col-12 d-flex justify-content-start align-items-center">
                    <nav>
                        <ul class="pagination gap-2">
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape" href="#"
                                    aria-label="Previous">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none">
                                        <path d="M9.49993 6.5L4.78564 11L9.49993 15.5" stroke="#0E0E0F"
                                            stroke-width="1.28571" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.2143 11H5" stroke="#0E0E0F" stroke-width="1.28571"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold current"
                                    href="#"> 1 </a>
                            </li>
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold"
                                    href="#"> 2 </a>
                            </li>
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold"
                                    href="#"> 3 </a>
                            </li>
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold"
                                    href="#"> 4 </a>
                            </li>
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold"
                                    href="#"> 5 </a>
                            </li>
                            <li class="page-item d-none d-md-block">
                                <a class="icon-lg pagination_item rounded-circle icon-shape fs-18 fw-semi-bold"
                                    href="#"> ... </a>
                            </li>
                            <li class="page-item">
                                <a class="icon-lg pagination_item rounded-circle icon-shape" href="#"
                                    aria-label="Next">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none">
                                        <path d="M12.5 6.5L17.2143 11L12.5 15.5" stroke="#0E0E0F" stroke-width="1.28571"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.9999 11H4.78564" stroke="#0E0E0F" stroke-width="1.28571"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-md-6 col-lg-12 col-12">
                    <div class="author-card">
                        <div class="card-img mb-4 d-flex justify-content-center">
                            <a href="page-author.html" class="author-avartar rounded-circle avatar-154 overflow-hidden">
                                <img class="cover-image" src="assets/imgs/template/author/author-16.png" alt="magzin">
                            </a>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="mb-3">John Doe</h5>
                            <p class="mb-4">Step into a space where thoughts bloom, stories breathe, and imagination
                                roams free. Here, I write not just to share—but to connect, to wander, and to wonder.</p>
                            <p class="text-dark mb-0">Follow me</p>
                            <div class="d-inline-flex group-social-icons mt-2">
                                <a href="#" class="icon-shape icon-46">
                                    <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="10"
                                        height="17" viewBox="0 0 10 17" fill="none">
                                        <path
                                            d="M8.84863 9.20312H6.5415V16.0938H3.46533V9.20312H0.942871V6.37305H3.46533V4.18896C3.46533 1.72803 4.94189 0.34375 7.1875 0.34375C8.26416 0.34375 9.40234 0.559082 9.40234 0.559082V2.98926H8.14111C6.91064 2.98926 6.5415 3.72754 6.5415 4.52734V6.37305H9.2793L8.84863 9.20312Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a href="#" class="icon-shape icon-46">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                        <path
                                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                    </svg>
                                </a>
                                <a href="#" class="icon-shape icon-46">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                    </svg>
                                </a>
                                <a href="#" class="icon-shape icon-46">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-behance" viewBox="0 0 16 16">
                                        <path
                                            d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391s.497.426.641.747c.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922s.461.957.461 1.563c0 .496-.105.922-.285 1.278a2.3 2.3 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.3 5.3 0 0 1-1.278.176L0 12.803V3zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a1 1 0 0 0-.32-.355 1.8 1.8 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305zm6.858-.035q.428.427 1.278.426c.39 0 .746-.106 1.032-.286q.426-.32.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.1 4.1 0 0 1-1.527-.285 2.8 2.8 0 0 1-1.137-.782 2.85 2.85 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4 4 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396m2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176s-.356.25-.496.39a.96.96 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-12 col-12">
                    <div class="d-flex align-items-center gap-2 mt-5 mt-lg-5 mt-md-0 mb-3">
                        <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none">
                            <path
                                d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z"
                                fill="#0E0E0F" />
                        </svg>
                        <h5 class="mb-0">Weekly trending</h5>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                        <!--prettier-ignore-->
                                    <div class=" hover-up">
                        <div class="article card-10 style-2">
                            <div class="hover-effect-1">
                                <a href="#" class="card-img">
                                    <img class="w-100" src="assets/imgs/other/img-other-1.png" alt="magzin">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#">
                                    <h6 class="fs-7 mb-2 text-truncate-2">Stay Informed with Global Headlines</h6>
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
                    <div class=" hover-up">
                        <div class="article card-10 style-2">
                            <div class="hover-effect-1">
                                <a href="#" class="card-img">
                                    <img class="w-100" src="assets/imgs/other/img-other-2.png" alt="magzin">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#">
                                    <h6 class="fs-7 mb-2 text-truncate-2">The Rise of Mindful Living in a Digital World
                                    </h6>
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
                    <div class=" hover-up">
                        <div class="article card-10 style-2">
                            <div class="hover-effect-1">
                                <a href="#" class="card-img">
                                    <img class="w-100" src="assets/imgs/other/img-other-14.png" alt="magzin">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#">
                                    <h6 class="fs-7 mb-2 text-truncate-2">The Quiet Power of Present Living</h6>
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
                    <div class="d-none d-lg-block hover-up">
                        <div class="article card-10 style-2">
                            <div class="hover-effect-1">
                                <a href="#" class="card-img">
                                    <img class="w-100" src="assets/imgs/other/img-other-15.png" alt="magzin">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#">
                                    <h6 class="fs-7 mb-2 text-truncate-2">Minimalism in Design: Why Less is Still More
                                    </h6>
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
        <div class="row">
            <div class="col-md-6 col-lg-12 col-12">
                <div class="d-flex align-items-center gap-2 mt-5 mb-3">
                    <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none">
                        <path
                            d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z"
                            fill="#0E0E0F" />
                    </svg>
                    <h5 class="mb-0">Popular tags</h5>
                </div>
                <ul class="list-unstyled d-flex flex-wrap gap-3 ps-0">
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
                </ul>
            </div>
            <div class="col-md-6 col-lg-12 col-12">
                <div class="swiper slider-1 mt-5 rounded-16 overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="rounded-16 overflow-hidden cover-image" src="assets/imgs/page/img-84.png"
                                alt="magzin">
                        </div>
                        <div class="swiper-slide">
                            <img class="rounded-16 overflow-hidden cover-image" src="assets/imgs/page/img-85.png"
                                alt="magzin">
                        </div>
                        <div class="swiper-slide">
                            <img class="rounded-16 overflow-hidden cover-image" src="assets/imgs/page/img-84.png"
                                alt="magzin">
                        </div>
                        <div class="swiper-slide">
                            <img class="rounded-16 overflow-hidden cover-image" src="assets/imgs/page/img-85.png"
                                alt="magzin">
                        </div>
                    </div>
                    <div class="swiper-pagination mb-3"></div>
                </div>
            </div>
        </div>

    </section>
    <!-- Home 3 Section 3 -->
    <section class="sec-3-home-3 sec-padding position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="block-newsletter style-2 position-relative"
                        data-background="assets/imgs/page/bg-home3-sec3.png">
                        <div class="newsletter text-center">
                            <div class="decorate position-absolute top-0 end-0 m-4">
                                <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M0.582044 11.7285C8.79451 13.4712 10.252 14.8614 12.125 22.7372C13.8067 14.8768 15.2308 13.4992 23.4018 11.8279C15.1894 10.0852 13.7319 8.69503 11.8589 0.81924C10.1769 8.67956 8.75306 10.0571 0.582044 11.7285Z"
                                        fill="#0E0E0F" />
                                </svg>
                            </div>
                            <div class="block-title">
                                <h4 class="mb-4 text-anime-style-3">Subscribe to our newsletter</h4>
                            </div>
                            <form action="#" class="position-relative">
                                <div
                                    class="d-flex flex-wrap flex-md-nowrap justify-content-center gap-2 align-items-center mb-4">
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
    <!--Home 3 Section 4-->
    <div class="sec-4-home-3 bg-white pt-4 pb-5">
        <div class="text-center mb-5">
            <p class="text-dark fs-5 mb-0 mt-3">@magzine</p>
            <p class="fs-7 mt-0">Join me on Instagram for a peek into my daily news!</p>
        </div>
        <div class="wow img-custom-anim-top block-insta style-2">
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
@endsection
