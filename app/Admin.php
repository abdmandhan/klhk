<?php

namespace App;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{

    protected $table = 'admin';

    protected $fillable = ['name', 'eselon', 'email', 'password', 'user_id'];
}
