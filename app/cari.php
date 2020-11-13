<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cari extends Model
{
    protected $table = 'cari';
    protected $fillable = ['url', 'nama', 'ip_address', 'kategori', 'deskripsi', 'status', 'image', 'created_at', 'updated_at'];
}
