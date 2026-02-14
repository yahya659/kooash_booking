<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KoshController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\site\UserController as setUserController  ;

// زائر الموقع
Route::get('/', [setUserController::class,'koash']);
Route::get('/bookkoash/{id}', [setUserController::class,'bookkoash'])->middleware('auth');//حجز الكوشه من المستخدم
Route::post('/storebookkoash/{id}', action: [setUserController::class,'storebookkoash'])->middleware('auth');//تخزين اختيار الكوشه من المستخدم
Route::get('/about', function () {
    return view('site.about');
});


Route::get('/services', function () {
    return view('site.services');
});
Route::get('/Contact', function () {
    return view('site.Contact');
});
// حفظ الرسايل الوارده
Route::post('/storecontact', [setUserController::class,'storecontact'])->middleware('auth');
// المدونه لعرضها للمستخدم
Route::get('/blog', [setUserController::class,'blog']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [KoshController::class, 'index'])->name('kosh.index');
    Route::get('/kosh/create', [KoshController::class, 'create'])->name('kosh.create');
    Route::post('/kosh/store', [KoshController::class, 'store'])->name('kosh.store');
    Route::get('/kosh/edit/{id}', [KoshController::class, 'edit'])->name('kosh.edit');//تعديل الكوشه
    Route::put('/kosh/update/{id}', [KoshController::class, 'update'])->name('kosh.update');
    Route::delete('/kosh/delete/{id}', [KoshController::class, 'destroy'])->name('kosh.destroy');//حذف كوشه

      // عرض جميع المستخدمين
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // صفحة إضافة مستخدم جديد
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');

    // صفحة تعديل مستخدم موجود
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

    // حذف مستخدم
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    // جلب الحجوزات المستخدمين
    Route::get('/booking',[UserController::class,'booking']);

 // قبول الحجز
Route::patch('/booking/{booking}/accept', [UserController::class, 'acceptBooking'])
    ->name('booking.accept');

// رفض الحجز
Route::patch('/booking/{booking}/reject', [UserController::class, 'rejectBooking'])
    ->name('booking.reject');

    // استقبال الؤسال لوارده من الزائر
    Route::get('/contactadmin',[UserController::class,'contactadmin']);
    // حذف الرساله الوارده
    Route::POST('/deletecontact/{iddelete}',[UserController::class,'deletecontact']);
    // المدونه خاصه ب الااادمن
    Route::get('/blogadmin',[KoshController::class,'blogadmin']);
    //اضافه المدونه خاصه ب الااادمن
    Route::get('/addblogadmin',[KoshController::class,'addblogadmin']);
    //تخزين المدونه خاصه ب الموقع
    Route::post('/storeaddblogadmin',[KoshController::class,'storeaddblogadmin']);
    //حذف المدونه خاصه ب الموقع
    Route::delete('/deletelogadmin/{id}',[KoshController::class,'deletelogadmin']);
    //تعديل المدونه خاصه ب الموقع
    Route::get('/updatebog/{id}',[KoshController::class,'updatebog']);
    Route::put('/updatelogadmin/{id}',[KoshController::class,'updatelogadmin']);
});






require __DIR__.'/auth.php';
