<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;//يسمح لك إنشاء بيانات تجريبية (Fake Data) بسهولة باستخدام Factories.

    protected $fillable = ['user_id', 'kosha_id', 'date', 'status'];

    public function user()//Booking مرتبط بـ User واحد
    {
        return $this->belongsTo(User::class);
    }

    public function kosh()//كل Booking مرتبط بـ Kosh واحد
    {
        return $this->belongsTo(Kosh::class, 'kosha_id');
    }
}

