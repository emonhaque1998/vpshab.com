<?php

namespace App\Http\Controllers;

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
        $information['invoice'] = "IN-" . uniqid();
        $information['email'] = Auth::user()->email;
        $information['phone'] = Auth::user()->mobile;
        $information['address'] = Auth::user()->addressFirst . "," . Auth::user()->addressSecond . "," . Auth::user()->stateList . "," . Auth::user()->country;
        $information['status'] = $status;
        $information["transaction_id"] = uniqid();
        $information['currency'] = "$";
        $information['product_id'] = $request->get("productId");
        $information["user_id"] = Auth::user()->id;


        $totalPrice = $request->get("amount");
        $two0 = "00";

        $total = "$totalPrice$two0";

        $session = \Stripe\Checkout\Session::create([
            "line_items" => [
                [
                    'price_data' => [
                        "currency" => "USD",
                        'product_data' => [
                            "name" => $information['productName'],
                        ],
                        "unit_amount" => $total,
                    ],
                    'quantity' => 1
                ]
            ],
            'mode' => "payment",
            "success_url" => route("success"),
            "cancel_url" => route("cancle")
        ]);

        if($session){
            $placeOrder = Order::create([
                "name" => $information['customer_name'],
                "email" => $information['email'],
                "phone" => $information['phone'],
                "amount" => $information['totalPrice'],
                "address" => $information['address'],
                "status" => $information['status'],
                "currency" => $information['currency'],
                "product_id" => $information['product_id'],
                "user_id" => $information['user_id'],
                "invoice" => $information['invoice']
            ]);

            $information['order_id'] = $placeOrder->id;
        }

        session()->flash('paymentData', $information);
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
        return view("invoice", ["data" => $data]);
    }


    public function cancle(){
        return response("Cancle");
    }
}
