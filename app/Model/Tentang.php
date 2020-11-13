<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tentang extends Model
{
    // use SoftDeletes;
    protected $table = 'tentang';
    protected $fillable = ['gambar', 'deskripsi'];
}
