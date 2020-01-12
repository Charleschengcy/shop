<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];

    protected $dates = ['last_used_at']; //表示 last_used_at 字段是一个时间日期类型

    public function user()
    {
        return $this->belongsTo(User::class); //关联关系是一个 UserAddress 只能属于一个 User
    }

    public function getFullAddressAttribute()
    {
        //来获取完整的地址
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }
}
