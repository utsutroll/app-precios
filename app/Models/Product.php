<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table='products';

    public $timestamps=false;

    protected $fillable = [
        'name',
        'category_id',
        'brand_id',
        'presentation_id',
        'unit',
        'price',
        'slug',
    ];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function presentation(){
        return $this->belongsTo(Presentation::class);
    }
}
