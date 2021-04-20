<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class tabuser extends Model
{
    use HasFactory;
    use Notifiable;

    public $timestamps = FALSE;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','password','remember_token','verify_email','is_active','is_delete','group_role','last_login_at','last_login_ip','created_at','updated_at'];
}
