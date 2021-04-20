<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabproduct extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'product_id';
    public $timestamps = FALSE;
    protected $fillable = ['product_name','product_image','product_price','is_sales','description','created_at','updated_at'];
}
