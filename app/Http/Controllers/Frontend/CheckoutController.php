<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerClasses;

class CheckoutController extends Controller
{
    public function checkout($ammount, $productId){
        $country = new ControllerClasses();
        $countryJson = $country->getCountry();

        $product = Product::where('slug', $productId)->first();



        return view("users.checkout.checkout", ["totalAmount" => $ammount, "product" => $product, "countries" => $countryJson]);
    }
}
