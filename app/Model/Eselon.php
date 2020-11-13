<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eselon extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'tentang', 'pejabat', 'level', 'name_other'];
}
