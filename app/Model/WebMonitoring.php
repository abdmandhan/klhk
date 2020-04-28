<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WebMonitoring extends Model
{
    use SoftDeletes;

    protected $fillable = ['id_web','status','visitors'];

    public function web()
    {
        return $this->hasOne(Web::class,'id','id_web');
    }
}
