@extends('site.layouts.master')
@section('contact')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('site/assets/img/h.jpg') }});">
            <div class="container position-relative">
                <h1>الخدمات</h1>

                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">الصفحه الرئيسيه</a></li>
                        <li class="current">الخدمات</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title text-center" data-aos="fade-up">
                <h1>خدماتنا</h1>
                <p>نصمم لكِ كوشة أحلامك بأناقة وفخامة لا تُنسى</p>
            </div>

            <div class="content">
                <div class="container">
                    <div class="row g-4">

                        <!-- Service 1 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item text-center p-4 shadow rounded">
                                <span class="number">01</span>
                                <div class="service-item-icon mb-3">
                                    <i class="bi bi-flower1 fs-1 text-danger"></i>
                                </div>
                                <h3 class="service-heading">تصميم كوش مخصص</h3>
                                <p>
                                    تنفيذ كوشة حسب طلبك وبألوان تناسب ذوقك الخاص.
                                </p>
                            </div>
                        </div>

                        <!-- Service 2 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item text-center p-4 shadow rounded">
                                <span class="number">02</span>
                                <div class="service-item-icon mb-3">
                                    <i class="bi bi-stars fs-1 text-warning"></i>
                                </div>
                                <h3 class="service-heading">تنسيق ورد طبيعي</h3>
                                <p>
                                    تنسيق ورد فاخر يضفي لمسة رومانسية ساحرة.
                                </p>
                            </div>
                        </div>

                        <!-- Service 3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item text-center p-4 shadow rounded">
                                <span class="number">03</span>
                                <div class="service-item-icon mb-3">
                                    <i class="bi bi-lightbulb fs-1 text-info"></i>
                                </div>
                                <h3 class="service-heading">إضاءة احترافية</h3>
                                <p>
                                    أنظمة إضاءة حديثة تضيف فخامة وجمال للحفل.
                                </p>
                            </div>
                        </div>

                        <!-- Service 4 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item text-center p-4 shadow rounded">
                                <span class="number">04</span>
                                <div class="service-item-icon mb-3">
                                    <i class="bi bi-gem fs-1 text-primary"></i>
                                </div>
                                <h3 class="service-heading">باقات VIP</h3>
                                <p>
                                    باقات متكاملة تشمل الكوش والتنسيق والديكور.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>


        <!-- About Section -->
        <section id="about" class="about section" style="direction: rtl">

            <div class="content">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{ asset('site/assets/img/h8.jpg') }}" alt="من نحن" class="img-fluid img-overlap"
                                data-aos="zoom-out">
                        </div>

                        <div class="col-lg-5 ml-auto text-end" data-aos="fade-up" data-aos-delay="100">

                            <h3 class="content-subtitle text-white opacity-50">لماذا تختارينا</h3>

                            <h2 class="content-title mb-4">
                                أكثر من 10 سنوات خبرة في تصميم كوش
                            </h2>

                            <p class="opacity-50">
                                نقدم تصاميم فاخرة ومميزة تناسب جميع الأذواق، ونهتم بأدق التفاصيل
                                لنصنع لكِ ليلة لا تُنسى مليئة بالأناقة والجمال.
                            </p>

                            <div class="row my-5">

                                <div class="col-lg-12 d-flex align-items-start mb-4">
                                    <i class="bi bi-flower1 me-4 display-6"></i>
                                    <div>
                                        <h4 class="m-0 h5 text-white">تصاميم عصرية راقية</h4>
                                        <p class="text-white opacity-50">نواكب أحدث صيحات تصميم الكوش.</p>
                                    </div>
                                </div>

                                <div class="col-lg-12 d-flex align-items-start mb-4">
                                    <i class="bi bi-stars me-4 display-6"></i>
                                    <div>
                                        <h4 class="m-0 h5 text-white">تنسيق متكامل</h4>
                                        <p class="text-white opacity-50">تنسيق ورد، إضاءة وديكور متناسق.</p>
                                    </div>
                                </div>

                                <div class="col-lg-12 d-flex align-items-start">
                                    <i class="bi bi-gem me-4 display-6"></i>
                                    <div>
                                        <h4 class="m-0 h5 text-white">جودة وفخامة</h4>
                                        <p class="text-white opacity-50">نستخدم أفضل الخامات لضمان أعلى مستوى من الجودة.</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /About Section -->


        <!-- Testimonials Section -->
        <section class="testimonials-12 testimonials section" id="testimonials">

            <!-- Section Title -->
            <div class="container section-title text-center" data-aos="fade-up">
                <h2>آراء عملائنا</h2>
                <p>ثقة عملائنا هي سر تميزنا</p>
            </div>
            <!-- End Section Title -->

            <div class="testimonial-wrap">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 mb-4 mb-md-4">
                            <div class="testimonial text-end">
                                <img src="{{ asset('site/assets/img/testimonials/testimonials-1.jpg') }}" alt="عميلة">
                                <blockquote>
                                    <p>
                                        “الكوشة كانت أكثر من رائعة! كل التفاصيل كانت فخمة ومرتبة
                                        بشكل احترافي، شكراً لكم على هذا الإبداع.”
                                    </p>
                                </blockquote>
                                <p class="client-name">خالد وليد</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 mb-md-4">
                            <div class="testimonial text-end">
                                <img src="{{ asset('site/assets/img/testimonials/testimonials-2.jpg') }}" alt="عميلة">
                                <blockquote>
                                    <p>
                                        “تعامل راقٍ وتنفيذ أجمل من المتوقع، جعلتم ليلة زفافي
                                        ذكرى لا تُنسى.”
                                    </p>
                                </blockquote>
                                <p class="client-name">نورة خالد</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 mb-md-4">
                            <div class="testimonial text-end">
                                <img src="{{ asset('site/assets/img/testimonials/testimonials-3.jpg') }}" alt="عميلة">
                                <blockquote>
                                    <p>
                                        “الدقة في المواعيد والجودة العالية في التنفيذ
                                        شيء يستحق الإشادة فعلاً.”
                                    </p>
                                </blockquote>
                                <p class="client-name">سارة أحمد</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 mb-md-4">
                            <div class="testimonial text-end">
                                <img src="{{ asset('site/assets/img/testimonials/testimonials-4.jpg') }}" alt="عميلة">
                                <blockquote>
                                    <p>
                                        “أفضل اختيار اتخذته لحفل زفافي، الكوشة كانت
                                        تحفة فنية بكل معنى الكلمة.”
                                    </p>
                                </blockquote>
                                <p class="client-name">محمد علي</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section><!-- /Testimonials Section -->




    </main>
@endsection