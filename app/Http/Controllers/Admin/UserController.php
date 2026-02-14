<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    // عرض جميع المستخدمين
    public function index()
    {
        $users = User::all();
        return view('admin.kosh.user', compact('users'));
    }

    // صفحة إضافة مستخدم جديد
    public function create()
    {
        return view('admin.kosh.create_user');
    }
    // عرض ؤسايل الزوائر
    public function contactadmin()
    {
        $massege=contact::all();
        return view('admin.kosh.contact',compact('massege'));
    }

    // حذف الرساله الزوائار
    public function deletecontact($iddelete)
    {
        $massegedelete=contact::find($iddelete);
        $massegedelete->delete();
         return back()->with('success', 'تم حذف الرساله');
    }


    // حفظ مستخدم جديد
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'is_admin' => 'nullable|boolean',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin ? true : false,
        ]);

        return redirect()->route('users.index')->with('success', 'تم إضافة المستخدم بنجاح.');
    }

    // صفحة تعديل مستخدم
    public function edit(User $user)
    {
        return view('admin.kosh.edit_user', compact('user'));
    }

    // تحديث بيانات المستخدم
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
            'is_admin' => 'nullable|boolean',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->is_admin = $request->is_admin ? 1 : 0;
        $user->save();

        return redirect()->route('users.index')->with('success', 'تم تعديل بيانات المستخدم.');
    }

    // حذف المستخدم
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'تم حذف المستخدم بنجاح.');
    }
    // جلب الحجوزات المستخدمين
    public function booking(){
         $bookings = Booking::with(['user', 'kosh'])->latest()->get();

    return view('admin.kosh.booking.booking', compact('bookings'));
    }

// قبول الحجز
public function acceptBooking(Booking $booking)
{
    $booking->update([
        'status' => 'accepted'
    ]);

    return back()->with('success', 'تم قبول الحجز');
}

// رفض الحجز
public function rejectBooking(Booking $booking)
{
    $booking->update([
        'status' => 'rejected'
    ]);

    return back()->with('success', 'تم رفض الحجز');
}


}
