@extends('site.layouts.master')
@section('contact')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url({{ asset('site/assets/img/h.jpg') }});">
            <div class="container position-relative">
                <h1>من نحن</h1>
                <p>نحن فريق متخصص في تصميم وتنفيذ كوش الزفاف الفاخر، نسعى لجعل كل لحظة في يومك الخاص ذكرى لا تُنسى. خبرتنا
                    الطويلة وشغفنا بالتفاصيل يجعلانا نبتكر تصاميم مبتكرة تجمع بين الفخامة والذوق الرفيع.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">الصفحه الرئيسيه</a></li>
                        <li class="current">من نحن</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- About 3 Section -->
        <section id="about-3" class="about-3 section">

            <div class="container">
              <div class="row align-items-center gy-4">

                <!-- الصورة -->
                <div class="col-lg-6" data-aos="zoom-in">
                    <img src="{{ asset('site/assets/img/h9.jpg') }}"
                         class="img-fluid rounded-4 shadow-lg"
                         alt="كوش أعراس">
                </div>

                <!-- النص -->
                <div class="col-lg-6 text-end" data-aos="fade-up">
                    <h3 class="fw-bold mb-4">الكوشة عنوان الفخامة في ليلة العمر</h3>
                    <p class="text-muted mb-4">
                        نقدم تصاميم كوش نسائية تجمع بين الذوق الراقي والتفاصيل الدقيقة،
                        ونهتم بكل عنصر من عناصر الديكور لنصنع أجواءً ساحرة تليق بكِ.
                    </p>

                    <ul class="list-unstyled mb-4">
                        <li class="mb-2">✔ تصاميم مخصصة حسب ذوق العروس</li>
                        <li class="mb-2">✔ تنسيق متكامل للورد والإضاءة</li>
                        <li class="mb-2">✔ التزام بالمواعيد وجودة عالية</li>
                    </ul>

                    <a href="/Contact" class="btn btn-dark px-4 py-2 rounded-pill">
                        تواصل معنا
                    </a>
                </div>

            </div>
            </div>

        </section><!-- /About 3 Section -->


        <!-- Team Section -->
        <section class="team-15 team section" id="team">

            <!-- Section Title -->
            <div class="container section-title text-center" data-aos="fade-up">
                <h2>فريق العمل</h2>
                <p>فريقنا المتخصص في تصميم كوش الأعراس بكل احترافية</p>
            </div>
            <!-- End Section Title -->

            <div class="content">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="person text-center">
                                <figure>
                                    <img src="{{ asset('site/assets/img/testimonials/testimonials-4.jpg') }}"
                                        alt="صورة عضو الفريق" class="img-fluid">

                                </figure>
                                <div class="person-contents">
                                    <h3>أ. محمد علي</h3>
                                    <span class="position">مصمم كوش محترف</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="person text-center">
                                <figure>
                                    <img src="{{ asset('site/assets/img/testimonials/testimonials-3.jpg') }}"
                                        alt="صورة عضو الفريق" class="img-fluid">

                                </figure>
                                <div class="person-contents">
                                    <h3>أ. نورة خالد</h3>
                                    <span class="position">منسقة ديكور وأزهار</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="person text-center">
                                <figure>
                                    <img src="{{ asset('site/assets/img/testimonials/testimonials-2.jpg') }}"
                                        alt="صورة عضو الفريق" class="img-fluid">

                                </figure>
                                <div class="person-contents">
                                    <h3>أ. سارة أحمد</h3>
                                    <span class="position">مسؤولة تنسيق حفلات</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="person text-center">
                                <figure>
                                    <img src="{{ asset('site/assets/img/testimonials/testimonials-1.jpg') }}"
                                        alt="صورة عضو الفريق" class="img-fluid">

                                </figure>
                                <div class="person-contents">
                                    <h3>أ. يوسف عبدالله</h3>
                                    <span class="position">إدارة الحجوزات وخدمة العملاء</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section><!-- /Team Section -->


        <!-- Services Section -->
        <section class="steps section py-5" >
            <div class="container">

                <!-- العنوان -->
                <div class="text-center mb-5">
                    <h2>خطوات حجز الكوشة</h2>
                    <p style="color:#777;">احجزي كوشة أحلامك بسهولة في خطوات بسيطة</p>
                </div>

                <div class="row text-center g-4" style="direction: rtl">

                    <!-- خطوة 1 -->
                    <div class="col-md-3">
                        <div class="step-box p-4 shadow-sm h-100">
                            <div class="step-number">1</div>
                            <h5 class="mt-3">اختيار الكوشة</h5>
                            <p>تصفحي التصاميم واختاري الكوشة التي تناسب ذوقك.</p>
                        </div>
                    </div>

                    <!-- خطوة 2 -->
                    <div class="col-md-3">
                        <div class="step-box p-4 shadow-sm h-100">
                            <div class="step-number">2</div>
                            <h5 class="mt-3">تحديد التاريخ</h5>
                            <p>اختاري موعد الحفل وتحققي من توفر الكوشة.</p>
                        </div>
                    </div>

                    <!-- خطوة 3 -->
                    <div class="col-md-3">
                        <div class="step-box p-4 shadow-sm h-100">
                            <div class="step-number">3</div>
                            <h5 class="mt-3">تأكيد الحجز</h5>
                            <p>أكملي بياناتك وقومي بتأكيد الحجز بسهولة.</p>
                        </div>
                    </div>

                    <!-- خطوة 4 -->
                    <div class="col-md-3">
                        <div class="step-box p-4 shadow-sm h-100">
                            <div class="step-number">4</div>
                            <h5 class="mt-3">تنفيذ وتجهيز</h5>
                            <p>نقوم بتنفيذ الكوشة بأدق التفاصيل في يومك المميز.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>




    </main>
@endsection
