<?php

namespace App\Http\Controllers\site;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Kosh;
use App\Models\Booking;
use Illuminate\Http\Request;

class UserController extends Controller
{

//     // جلب الكوش
public function koash()
{
    // جلب الكوشات مع عمل Pagination
    $koash = Kosh::latest()->paginate(6); // الاسم هنا يجب أن يكون koash مطابق للـ Blade

    // إرسال المتغير للـ Blade
    return view('site.index', compact('koash'));
}
// عرض المدونه

public function blog() {
    $blog=Blog::get();
    return view('site.Blog',['blog'=>$blog]);
}
//معرفه الكوشه الذي يريدها المستخدم
public function bookkoash($id) {
    $koash=Kosh::find($id);

    return view('site.booking.bookkoash',compact('koash'));
}

public function storebookkoash(Request $request, $id) {
    $koash = Kosh::findOrFail($id); // معرفة الكوشة

    $request->validate([
        'date' => 'required|date|after_or_equal:today',
    ]);

    // التحقق من وجود حجز مسبق في نفس التاريخ
    $exists = Booking::where('kosha_id', $koash->id)
        ->where('date', $request->date)
        ->where('status', 'accepted') // فقط الحجوزات المقبولة تمنع الحجز الجديد
        ->exists();

    if ($exists) {
        return redirect()->back()->with('error', 'هذه الكوشة محجوزة مسبقًا في هذا التاريخ.');
    }

    // إنشاء الحجز
    Booking::create([
        'user_id'  => Auth::id(),
        'kosha_id' => $koash->id,
        'date'     => $request->date,
        'status'   => 'pending',
    ]);

    return redirect()->back()->with('success', 'تم التقديم...سيتم مراجعه طلبك');
}


public function storecontact(Request $request) {
     // التحقق من البيانات قبل الحفظ
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
     // حفظ الرسالة في قاعدة البيانات فقط
    $storemassege = new Contact();
    $storemassege->name=$request->name;
    $storemassege->email=$request->email;
    $storemassege->subject=$request->subject;
    $storemassege->message=$request->message;
    $storemassege->save();
    // إعادة التوجيه مع رسالة نجاح فقط
     return redirect('/Contact')->with('success', 'تم ارسال الرساله سيتم الرد عليك  ...للاايميل الخاص بك');

}

}
