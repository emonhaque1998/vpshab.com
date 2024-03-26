<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Country;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        "monthly_price",
        "annual_price",
        "discount",
        "ram",
        "disk",
        "operating_system",
        "bandwidth",
        "virtualization",
        "currency",
        "category_id",
        "country_id",
        "status"
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function order(){
        return $this->hasOne(Order::class);
    }
}
