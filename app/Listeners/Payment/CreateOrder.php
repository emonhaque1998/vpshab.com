<?php

namespace App\Listeners\Payment;

use App\Models\Order;
use App\Events\Payment\ProductPayment;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;

class CreateOrder implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductPayment $event): void
    {
        $information = $event->information;
        $dueData = now()->addDays(30)->format('d-m-Y');
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
            "invoice" => $information['invoice'],
            "dueDate" => $dueData
        ]);

        $information['order_id'] = $placeOrder->id;
        Cache::forget("wp_order_count");
        session()->flash('paymentData', $information);
    }
}
