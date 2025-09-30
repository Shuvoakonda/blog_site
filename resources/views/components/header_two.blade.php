<header>

    <nav class="navbar navbar-expand-lg style-2">
        <div class="navbar-collapse d-none d-lg-block start" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link link-effect-1 " href="{{ route('home') }}"><span>Home</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link link-effect-1 " href="{{ route('about') }}"><span>About</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link-effect-1 " href="{{ route('contact') }}"><span>Contact</span></a>
                </li>
            </ul>


        </div>



        <a class="navbar-brand fw-bold fs-3" href="index-2.html">
            <img class="dark-mode-invert" src="{{ asset('assets/imgs/template/logo/logo-dark.svg') }}" alt="Logo">
        </a>
        <div class="d-flex align-items-center ms-auto gap-4">
            <div class="pe-4 d-none d-lg-block">
                <a href="{{ route('author') }}" class="text-decoration-underline link-effect-2">

                    <span class="text">
                        <span class="text1">Author</span>
                        <span class="text2">Author</span>
                    </span>
                </a>
            </div>
            <div data-bs-toggle="modal" data-bs-target="#popupSearch"
                class="search-btn fs-7 d-none d-md-flex link-effect-2">
                <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                    viewBox="0 0 32 32" fill="none">
                    <path
                        d="M25.6667 25.6667L20.6667 20.6667M6.33337 14.6667C6.33337 10.0643 10.0643 6.33337 14.6667 6.33337C19.2691 6.33337 23 10.0643 23 14.6667C23 19.2691 19.2691 23 14.6667 23C10.0643 23 6.33337 19.2691 6.33337 14.6667Z"
                        stroke="#0E0E0F" stroke-width="1.74463" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="text">
                    <span class="text1">Search</span>
                    <span class="text2">Search</span>
                </span>
            </div>
            <div class="group-btn-right d-flex align-items-center">
                <div class="dark-light-switcher">
                    <svg class="svg-white dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="20"
                        height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M10.0018 0.666664C4.85543 0.666664 0.666656 4.85406 0.666656 10.0004C0.666656 15.1468 4.85543 19.3356 10.0018 19.3356C15.1482 19.3356 19.337 15.1468 19.337 10.0004C19.337 4.85406 15.1482 0.666664 10.0018 0.666664ZM10.7212 2.13629C14.7526 2.4982 17.8982 5.87269 17.8982 10.0004C17.8982 14.1282 14.7526 17.5027 10.7212 17.8646V2.13629Z"
                            fill="#75787D" />
                    </svg>
                    <svg class="svg-dark dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="20"
                        height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M10.0018 0.666992C4.85543 0.666992 0.666656 4.85439 0.666656 10.0008C0.666656 15.1471 4.85543 19.3359 10.0018 19.3359C15.1482 19.3359 19.337 15.1471 19.337 10.0008C19.337 4.85439 15.1482 0.666992 10.0018 0.666992ZM10.7212 2.13662C14.7526 2.49852 17.8982 5.87302 17.8982 10.0008C17.8982 14.1285 14.7526 17.503 10.7212 17.8649V2.13662Z"
                            fill="#0E0E0F" />
                    </svg>
                </div>
                <a href="#" class="navbar-toggler">
                    <svg class="dark-mode-invert" xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                        viewBox="0 0 26 26" fill="none">
                        <path
                            d="M6.5 5.19999C6.5 4.48205 7.08206 3.89999 7.8 3.89999H24.7C25.4179 3.89999 26 4.48205 26 5.19999C26 5.91794 25.4179 6.49999 24.7 6.49999H7.8C7.08206 6.49999 6.5 5.91789 6.5 5.19999ZM24.7 11.7H1.3C0.582055 11.7 0 12.2821 0 13C0 13.7179 0.582055 14.3 1.3 14.3H24.7C25.4179 14.3 26 13.7179 26 13C26 12.2821 25.4179 11.7 24.7 11.7ZM24.7 19.5H13C12.2821 19.5 11.7 20.082 11.7 20.8C11.7 21.5179 12.2821 22.1 13 22.1H24.7C25.4179 22.1 26 21.5179 26 20.8C26 20.082 25.4179 19.5 24.7 19.5Z"
                            fill="#0E0E0F" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>
</header>
