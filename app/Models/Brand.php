<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name','origin','location','rating','seller','logo'];

    public function products()
    {
        return $this->hasMany(Product::class,'brand_id');
        // return $brand(class)->hasMany(Product::class,'brand_id');
    }
}
