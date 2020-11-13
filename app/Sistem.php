<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistem extends Model
{
    protected $fillable = ['nama_si','deskripsi','alamat_url','ip_host'];
}
