<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Kosh;
use App\Models\User;

class KoshController extends Controller
{
    // عرض كل الكوشات
    public function index()
    {
        $koshat = Kosh::latest()->get();

        return view('admin.kosh.index', ['koshat'=>$koshat]);
    }

    // نموذج إضافة كوشة جديدة
    public function create()
    {
        return view('admin.kosh.create');
    }

    // حفظ الكوشة الجديدة
public function store(Request $request)
{
    $request->validate([
        'name'  => 'required|string',
        'price' => 'required|numeric',
        'images' => 'required|image|mimes:jpg,jpeg,png,webp',
    ]);

    $imageName = time().'.'.$request->images->extension();
    $request->images->move(public_path('uploads/kosh'), $imageName);

    Kosh::create([
        'name'        => $request->name,
        'price'       => $request->price,
        'description' => $request->description,
        'images'      => $imageName,
        'status'      => 'available',
    ]);

    return redirect()->back()->with('success','تمت الإضافة بنجاح');
}


    // نموذج تعديل كوشة
    public function edit($id)
    {
        $kosh = Kosh::findOrFail($id);
        return view('admin.kosh.edit', compact('kosh'));
    }

    // حفظ التعديلات
 public function update(Request $request, $id)
{
    $request->validate([
        'name'  => 'required|string',
        'price' => 'required|numeric',
        'images' => 'nullable|image|mimes:jpg,jpeg,png,webp',
    ]);

    $kosh = Kosh::findOrFail($id);

    // تحديث البيانات الأساسية
    $kosh->name  = $request->name;
    $kosh->price = $request->price;
    $kosh->description = $request->description;
    $kosh->status = $request->status;

    // إذا تم رفع صورة جديدة
    if ($request->hasFile('images')) {
        // حذف الصورة القديمة
        if ($kosh->images && file_exists(public_path('uploads/kosh/'.$kosh->images))) {
            unlink(public_path('uploads/kosh/'.$kosh->images));
        }

        // رفع الصورة الجديدة
        $imageName = time().'.'.$request->images->extension();
        $request->images->move(public_path('uploads/kosh'), $imageName);
        $kosh->images = $imageName;
    }

    $kosh->save();

    return redirect()->route('kosh.index')->with('success', 'تم تعديل الكوشة بنجاح');
}


    // حذف كوشة
    public function destroy($id)
    {
        $kosh = Kosh::findOrFail($id);
        $kosh->delete();

        return redirect()->route('kosh.index')->with('success', 'تم حذف الكوشة بنجاح');
    }

    //  عرض المدونه في الاادمن
    public function blogadmin(){
        $blog=Blog::all();

        return view('admin.kosh.blog',['blog'=>$blog]);
    }
     //  اضافه المدونه في الموقع
    public function addblogadmin(){
        return view('admin.kosh.addblog');
    }
    // تخزين المدونه
 public function storeaddblogadmin(Request $request)
{
    $request->validate([
        'title'  => 'required|string',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpg,jpeg,png,webp',
    ]);

    // توليد اسم جديد للصورة
    $imageName = time() . '.' . $request->image->extension();

    // نقل الصورة إلى المجلد
    $request->image->move(public_path('uploads/blogs'), $imageName);

    // حفظ البيانات في قاعدة البيانات
    Blog::create([
        "title" => $request->title,
        "description" => $request->description,
        "image" => $imageName, // هنا التعديل الصحيح
    ]);

    return redirect()->back()->with('success', 'تمت الإضافة بنجاح');
}

    // تعديل المدونه
    public function updatebog($id){
        $updateblog=Blog::findOrFail($id);
       return view('admin.kosh.editeaddblog',compact('updateblog'));
    }
    // حفظ تعديل المدونه
    public function updatelogadmin(Request $request,$id){
            $request->validate([
                'title'  => 'required|string',
                'description' => 'required|string',
    ]);
     $blog = Blog::findOrFail($id);

    // تحديث المدونه الأساسية
    $blog->title  = $request->title;
    $blog->description = $request->description;
    $blog->save();

     return redirect()->back()->with('success','تمت التعديل المدونه بنجاح');
    }
    // حذف المدونه
      public function deletelogadmin($id)
    {
        $deletelogadmin = Blog::findOrFail($id);
        $deletelogadmin->delete();

        return redirect('/blogadmin')->with('success', 'تم حذف المدونه بنجاح');
    }


}

