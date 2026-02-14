<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kosh extends Model
{
    //
     use HasFactory;//يسمح لك إنشاء بيانات تجريبية (Fake Data) بسهولة باستخدام Factories.

    protected $fillable = ['name', 'description', 'price', 'images', 'status'];

    public function bookings()//Kosh يمكن أن يكون له عدة حجزات
    {
        return $this->hasMany(Booking::class, 'kosha_id');
    }
}
