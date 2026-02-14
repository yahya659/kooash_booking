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
    @if(session('error'))
        <div style="
                            background-color: red;
                            color: #155724;
                            border: 1px solid #c3e6cb;
                            padding: 15px;
                            border-radius: 5px;
                            margin-bottom: 20px;
                            font-weight: bold;
                            text-align: center;
                        ">
            {{ session('error') }}
        </div>
    @endif
   <section id="booking" class="booking section light-background py-5">
    <div class="container" data-aos="fade">
        <div class="row align-items-center">

            <!-- صورة الكوشة -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('uploads/kosh/' . $koash->images) }}" class="card-img-top"
                        alt="{{ $koash->name }}" style="height: 300px; object-fit: cover;">
                    <div class="card-body text-end" dir="rtl">
                        <h5 class="card-title fw-bold">{{ $koash->name }}</h5>
                        <p class="card-text text-muted small">{{ $koash->description ?? 'لا يوجد وصف متاح' }}</p>
                        <p class="card-text mb-0">
                            <strong>السعر: </strong>
                            <span class="text-primary">{{ number_format($koash->price, 2) }} ريال</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- فورم الحجز -->
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 p-4">
                    <h5 class="fw-bold mb-3 text-end" dir="rtl">تاريخ حجز الكوشة</h5>
                    <form action="/storebookkoash/{{ $koash->id }}" method="POST" class="text-end" dir="rtl">
                        @csrf
                        <input type="date" name="date" class="form-control mb-3" required>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fa fa-calendar-plus ms-1"></i> ارسال الحجز
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>




@endsection
