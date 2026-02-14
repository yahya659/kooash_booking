@extends('site.layouts.master')
@section('contact')




    <body class="index-page">



        <main class="main">

            <!-- Hero Section -->
            <section id="hero" class="hero section dark-background">

                <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                    data-bs-interval="5000">

                    <div class="carousel-item active">
                        <img src="{{ asset('site/assets/img/h.jpg') }}" alt="">
                        <div class="carousel-container">
                            <h2>احجزي كوشتك بأناقة وسهولة"</h2>
                            <p>"نحن نوفر أجمل تصاميم الكوش والخدمات المميزة لجعل مناسبتك لا تُنسى."</p>
                        </div>
                    </div><!-- End Carousel Item -->

                    <div class="carousel-item">
                        <img src="{{ asset('site/assets/img/h2.jpg') }}" alt="">
                        <div class="carousel-container">
                            <h2>"لجعل يومك مميزًا"</h2>
                            <p>"اختاري كوش أحلامك واستمتعي بتجربة حجز سهلة وسريعة لمناسبتك الخاصة."</p>
                        </div>
                    </div><!-- End Carousel Item -->

                    <div class="carousel-item">
                        <img src="{{ asset('site/assets/img/h3.jpg') }}" alt="">
                        <div class="carousel-container">
                            <h2>"الكوش المثالي لكل مناسبة"</h2>
                            <p>"جمال، أناقة، وتنظيم احترافي لخدمات الكوش."</p>
                        </div>
                    </div><!-- End Carousel Item -->

                    <div class="carousel-item">
                        <img src="{{ asset('site/assets/img/h4.jpg') }}" alt="">
                        <div class="carousel-container">
                            <h2>"تحويل مناسبتك إلى حلم"</h2>
                            <p>"احجزي كوشك المثالي مع تصاميم أنيقة وخدمة مميزة تجعل يومك لا يُنسى.".</p>
                        </div>
                    </div><!-- End Carousel Item -->

                    <div class="carousel-item">
                        <img src="{{ asset('site/assets/img/h5.jpg') }}" alt="">
                        <div class="carousel-container">
                            <h2>"كوش أحلامك في متناول يدك"</h2>
                            <p>"استمتعي بتصاميم فاخرة وخدمة احترافية تجعل يوم زفافك مميزًا بلا عناء."</p>
                        </div>
                    </div><!-- End Carousel Item -->

                    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>

                    {{-- <ol class="carousel-indicators"></ol> --}}

                </div>

            </section><!-- /Hero Section -->

            <!-- Services Section -->
            <section id="services" class="services section">

                <!-- Section Title  جميع الكوش -->
                <div class="container section-title" data-aos="fade-up">
                    <div class="service-item-content">
                        <h1 class="fw-bold text-center mb-4">: جميع الكوش </h1>
                        <p class="text-center text-muted">الكوشات الفاخرة التي تحوّل مناسبتك إلى ذكرى لا تُنسى</p>

                    </div>
                </div><!-- End Section Title -->

                {{-- عرض جميع الكوش --}}
              <div class="container">
    <div class="row">
        @foreach($koash as $k)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('uploads/kosh/' . $k->images) }}" class="card-img-top kosh-img"
                        alt="{{ $k->name }}" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column text-end" dir="rtl">
                        <h5 class="card-title fw-bold">{{ $k->name }}</h5>
                        <p class="card-text text-muted small">
                            {{ $k->description ?? 'لا يوجد وصف متاح' }}
                        </p>
                        <p class="card-text mb-2">
                            <strong>السعر: </strong>
                            <span class="text-primary">{{ number_format($k->price, 2) }} ريال</span>
                        </p>
                        <p class="card-text mb-3">
                            <strong>الحالة: </strong>
                            <span class="badge bg-success">متاحة</span>
                        </p>
                        <!-- زر الحجز -->
                        <a href="/bookkoash/{{ $k->id }}" class="btn btn-outline-primary mt-auto w-100">
                            <i class="fa fa-calendar-plus ms-1"></i> حجز الكوشة
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $koash->links() }} {{-- رابط الصفحات --}}
    </div>
</div>


            </section><!-- /Services Section -->

            <!-- About Section -->
            <section id="about" class="about section" >

                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{ asset('site/assets/img/aros.jpg') }}" alt="Image "
                                    class="img-fluid img-overlap" data-aos="zoom-out">
                            </div>
                            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="content-subtitle text-white opacity-50">لماذا تختارنا</h3>
                                <h2 class="content-title mb-4">
                                    أكثر من <strong>50 عامًا من الخبرة</strong> في صناعة الكوش وتصاميم المناسبات
                                </h2>
                                <p class="opacity-50">
                                    نحن نقدم لك أفضل التصاميم وأرقى الخدمات لتجعل يومك مميزًا وفريدًا، مع الحرص على كل
                                    تفصيلة صغيرة.
                                </p>

                                <div class="row my-5">
                                    <div class="col-lg-12 d-flex align-items-start mb-4">
                                        <i class="bi bi-cloud-rain me-4 display-6"></i>
                                        <div>
                                            <h4 class="m-0 h5 text-white">تصاميم تناسب كل المناسبات</h4>
                                            <p class="text-white opacity-50">نبتكر كل كوشة بعناية لتلائم ذوقك الخاص.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 d-flex align-items-start mb-4">
                                        <i class="bi bi-heart me-4 display-6"></i>
                                        <div>
                                            <h4 class="m-0 h5 text-white">جمال وأناقة في كل تفصيلة</h4>
                                            <p class="text-white opacity-50">نهتم بكل التفاصيل لتصبح مناسبتك حلمًا حقيقيًا.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 d-flex align-items-start">
                                        <i class="bi bi-shop me-4 display-6"></i>
                                        <div>
                                            <h4 class="m-0 h5 text-white">خدمة احترافية مضمونة</h4>
                                            <p class="text-white opacity-50">فريقنا يضمن لك تجربة سهلة وممتعة دون عناء.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /About Section -->


            @include('site.layouts.services')
            @include('site.layouts.about')

        </main>



        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>




    </body>

    </html>
@endsection
