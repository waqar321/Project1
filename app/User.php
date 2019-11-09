<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = ['name','email','password'];
    public $timestamps = false;
}
