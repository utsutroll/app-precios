<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable = ['name', 'margin', 'slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**Relacion 1 a muchos **/

    public function products(){
        return $this->hasMany(Product::class);
    }
}
