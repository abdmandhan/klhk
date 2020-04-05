<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eselon extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'level'];
}
