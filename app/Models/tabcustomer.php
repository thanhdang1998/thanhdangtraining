<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabcustomer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id';
    public $timestamps = FALSE;
    protected $fillable = ['customer_name','email','tel_num','address','is_active','created_at','updated_at'];
}
