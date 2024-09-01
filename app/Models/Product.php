<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'category_id',
        'name',
        'slug',
        'brand',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'quantity',
        'trending',
        'featured',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    protected $casts = 
    [
        'status'=>'boolean',
        'trending'=>'boolean',
        'featured'=>'boolean',
    ];



    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function productimage()
    {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
    public function productcolors()
    {
        return $this->hasMany(ProductColor::class,'product_id','id');
    }



}
