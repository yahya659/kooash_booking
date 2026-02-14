<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', 'أحلى اللحظات')</title>

    <meta name="description" content="@yield('description', 'موقع حجز كوش أعراس نسائية')">
    <meta name="keywords" content="كوش أعراس, حفلات, مناسبات, أعراس نسائية">

    <!-- Favicons -->
    <link href="{{ asset('site/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('site/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Marcellus&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('site/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('site/assets/css/main.css') }}" rel="stylesheet">
</head>
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <!-- اللوقو -->
        <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('site/assets/img/logo3.png') }}" alt="">
        </a>

        <!-- القائمة -->
        <nav id="navmenu" class="navmenu" style="direction: rtl;">
            <ul>
                <li>
                    <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
                        الصفحة الرئيسية
                    </a>
                </li>

                <li>
                    <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">
                        من نحن
                    </a>
                </li>

                <li>
                    <a href="/services" class="{{ request()->is('services') ? 'active' : '' }}">
                        الخدمات
                    </a>
                </li>

                <li>
                    <a href="/blog" class="{{ request()->is('blog') ? 'active' : '' }}">
                        المدونة
                    </a>
                </li>

                <li>
                    <a href="/Contact" class="{{ request()->is('Contact') ? 'active' : '' }}">
                        التواصل
                    </a>
                </li>


                @guest
                    <li><a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">تسجيل الدخول</a></li>
                    <li><a href="{{ route('register') }}" class="btn btn-primary btn-sm">إنشاء حساب</a></li>
                @endguest

                @auth
                    <li>
                        <a href="#" class="fw-bold text-dark">
                            {{ Auth::user()->name }}
                        </a>
                    </li>

                    <li>
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                                تسجيل الخروج
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>

</header>




@yield('contact')





<footer class="footer bg-dark text-light py-4 mt-5">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">

            <!-- اسم الموقع -->
            <div class="col-md-4 mb-3 mb-md-0">
                <h5 class="fw-bold mb-0"> احلى اللحظات</h5>
                <small>نجعل مناسبتك ذكرى لا تُنسى</small>
            </div>

            <!-- روابط سريعة -->
            <div class="col-md-4 mb-3 mb-md-0">
                <a href="/" class="text-light text-decoration-none mx-2">الرئيسية</a>
                <a href="/services" class="text-light text-decoration-none mx-2">الخدمات</a>
                <a href="/Contact" class="text-light text-decoration-none mx-2">تواصل معنا</a>
            </div>

            <!-- سوشيال ميديا -->
            <div class="col-md-4 text-md-end">
                <a href="#" class="text-light mx-2"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-light mx-2"><i class="bi bi-snapchat"></i></a>
                <a href="#" class="text-light mx-2"><i class="bi bi-whatsapp"></i></a>
            </div>

        </div>

        <hr class="border-light opacity-25 my-3">

        <div class="text-center small">
            © {{ date('Y') }} جميع الحقوق محفوظة
        </div>
    </div>
</footer>


<!-- Vendor JS Files -->
<!-- Vendor JS Files -->
<script src="{{ asset('site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('site/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('site/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('site/assets/vendor/aos/aos.js') }}"></script>

<script src="{{ asset('site/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('site/assets/js/main.js') }}"></script>
