<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_data','brand_id'];

    protected $casts = ['product_data'=>'json'];

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
