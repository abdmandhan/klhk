<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Web extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'id_web_category', 'id_eselon', 'url_name', 'ip_address', 'description', 'status', 'image'];

    public function eselon()
    {
        return $this->hasOne(Eselon::class, 'id', 'id_eselon');
    }

    public function webcategory()
    {
        return $this->hasOne(WebCategory::class, 'id', 'id_web_category');
    }
}
