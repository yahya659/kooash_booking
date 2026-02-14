@extends('site.layouts.master')
@section('contact')
    @if(session('success'))
        <div style="
                                    background-color: #d4edda;
                                    color: #155724;
                                    border: 1px solid #c3e6cb;
                                    padding: 15px;
                                    border-radius: 5px;
                                    margin-bottom: 20px;
                                    font-weight: bold;
                                    text-align: center;
                                ">
            {{ session('success') }}
        </div>
    @endif
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade "
            style="background-image: url({{ asset('site/assets/img/h.jpg') }});">
            <div class="container position-relative">
                <h1>تواصل معنا</h1>
                <p>



                </p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">الرئيسيه</a></li>
                        <li class="/Contact">تواصل معانا</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Contact Section -->
        <section id="contact" class="contact section" style="direction: rtl">


            <div class="container" data-aos="fade">

                <div class="row gy-5 gx-lg-5">

                    <div class="col-lg-4">

                        <div class="info">
                            <h3>تواصل معنا</h3>
                            <p>لا تتردد في إرسال رسالتك عبر النموذج، وسنعود إليك في أقرب وقت ممكن.</p>

                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>موقعنا:</h4>
                                    <p>شارع كليه الشرطه , امام كليه الشرطه</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>الاايميل:</h4>
                                    <p>ahlalahdat@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>رقم الواتس:</h4>
                                    <p>771940086</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                 <div class="col-lg-8">
    <form action="/storecontact" method="post" class="p-4 shadow rounded bg-light">
        @csrf
        <h3 class="mb-4 text-center">تواصل معنا</h3>

        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="الاسم" required>
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                <input type="email" name="email" class="form-control" placeholder="الايميل" required>
            </div>
        </div>

        <div class="mb-3">
            <input type="text" name="subject" class="form-control" placeholder="الموضوع" required>
        </div>

        <div class="mb-3">
            <textarea name="message" class="form-control" rows="5" placeholder="الرسالة" required></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary px-5">ارسال الرسالة</button>
        </div>
    </form>
</div>
<!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

       @include('site.layouts.services')

    </main>
@endsection
