<?php

namespace App\Http\Controllers;

use App\Events\Payment\ProductPayment;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PSpell\Config;

class StripeController extends Controller
{
    public function sassion(Request $request){
        \Stripe\Stripe::setApiKey(Config("stripe.sk"));

        $status = "Pending";

        $information = array();

        $information['productName'] = $request->get("productName");
        $information['totalPrice'] = $request->get("amount");
        $information['customer_name'] = Auth::user()->name;
        $information['companyName'] = Auth::user()->companyName;
        $information['invoice'] = "IN-" . uniqid();
        $information['email'] = Auth::user()->email;
        $information['phone'] = Auth::user()->mobile;
        $information['address'] = Auth::user()->addressFirst . "," . Auth::user()->addressSecond . "," . Auth::user()->stateList . "," . Auth::user()->country;
        $information['status'] = $status;
        $information["transaction_id"] = uniqid();
        $information['currency'] = "$";
        $information['product_id'] = $request->get("productId");
        $information["user_id"] = Auth::user()->id;


        $totalPrice = floatval($information['totalPrice']);
        $two0 = "00";

        $information['payAmount'] = "$totalPrice$two0";

        $session = \Stripe\Checkout\Session::create([
            "line_items" => [
                [
                    'price_data' => [
                        "currency" => "USD",
                        'product_data' => [
                            "name" => $information['productName'],
                        ],
                        "unit_amount" => $information['payAmount'],
                    ],
                    'quantity' => 1
                ]
            ],
            'mode' => "payment",
            "success_url" => route("success"),
            "cancel_url" => route("cancle")
        ]);

        if($session){
            ProductPayment::dispatch($information);
        }

        return redirect()->away($session->url);

    }

    public function success(Request $request){
        $data = session("paymentData");
        $order = Order::find($data["order_id"]);
        if($order->status === "Pending"){
            Order::find($data["order_id"])->update([
                "status" => "Processing",
                "transaction_id" => $data['transaction_id'],
            ]);
        }
        return view("invoice", ["data" => $data, "order" => $order]);
    }


    public function cancle(){
        return response("Cancle");
    }
}
