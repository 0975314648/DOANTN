<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiangVien extends Model
{
    //
    protected $table = "giangvien";

    protected $fillable = [
        'ma_gv', 'hoten','ngaysinh','gioitinh','sdt','diachi','email','chucvu'
    ];
}
