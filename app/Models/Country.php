<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "vertical",
        "horizontal"
    ];

    public function getProduct(){
        return $this->hasMany(Product::class);
    }
}
