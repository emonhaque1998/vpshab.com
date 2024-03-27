<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function checkout(Request $request){


        $product = Product::find($request->get("productId"));




        return view("users.checkout.checkout", [
            "product" => $product,
            "quantity" => $request->get("quantityNumber"),
        ]);
    }
}
