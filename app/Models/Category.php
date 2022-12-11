<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_title',
        'slug',
        'category_description'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
