@extends('site.layouts.master')
@section('contact')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image:  url({{ asset('site/assets/img/h.jpg') }});">
            <div class="container position-relative">
                <h1>المدونه</h1>

                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">الصفحه الرئيسيه</a></li>
                        <li class="current">المدونه</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Blog Posts 2 Section -->
        <section id="blog-posts-2" class="blog-posts-2 section">
            <div class="container">
                <div class="row gy-4">
                    @foreach ($blog as $item)
                        <div class="col-lg-4">
                            <article class="position-relative h-100 d-flex flex-column">

                                <!-- صورة المدونة -->
                                <div class="post-img position-relative overflow-hidden" style="height: 250px;">
                                    <img src="{{ asset('uploads/blogs/' . $item->image) }}"
                                        class="img-fluid w-100 h-100 object-fit-cover" alt="{{ $item->title }}">
                                </div>

                                <!-- تاريخ الإضافة -->
                                <div class="meta d-flex align-items-end"> <span class="post-date"> {{-- 12/desaumber تاريخ
                                        الاااضافه واليوم--}}
                                        <span>{{ \Carbon\Carbon::parse($item->created_at)->format('d') }}</span>
                                        {{ \Carbon\Carbon::parse($item->created_at)->format('F') }} </span> </div>

                                <!-- محتوى المدونة -->
                                <div class="post-content d-flex flex-column mt-2 text-end" style="direction: rtl;">
                                    <h3 class="post-title">{{ $item->title }}</h3>
                                    <p>{{ $item->description }}</p>
                                    <a href="/services" class="readmore stretched-link mt-auto text-primary">
                                        <span>اقرأ المزيد</span><i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                    @endforeach
                </div>
            </div>
        </section>



 <section class="steps section py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">خطوات حجز الكوشة</h2>
                <p class="text-muted">احجزي كوشة أحلامك بسهولة في خطوات بسيطة</p>
            </div>

            <div class="row text-center g-4" style="direction: rtl">

                <div class="col-md-3">
                    <div class="step-box p-4 shadow-sm h-100">
                        <div class="step-number">1</div>
                        <h5 class="mt-3">اختيار الكوشة</h5>
                        <p>تصفحي التصاميم واختاري ما يناسب ذوقك.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="step-box p-4 shadow-sm h-100">
                        <div class="step-number">2</div>
                        <h5 class="mt-3">تحديد التاريخ</h5>
                        <p>اختاري موعد الحفل وتحققي من التوفر.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="step-box p-4 shadow-sm h-100">
                        <div class="step-number">3</div>
                        <h5 class="mt-3">تأكيد الحجز</h5>
                        <p>أكملي بياناتك وقومي بتأكيد الطلب.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="step-box p-4 shadow-sm h-100">
                        <div class="step-number">4</div>
                        <h5 class="mt-3">تنفيذ وتجهيز</h5>
                        <p>ننفذ الكوشة بأدق التفاصيل في يومك المميز.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    </main>
@endsection
