<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("invoice")->unique();
            $table->string("name");
            $table->string("email", 30);
            $table->string("phone", 20);
            $table->double("amount");
            $table->string("address");
            $table->string("status", 10);
            $table->string("transaction_id")->nullable();
            $table->string("currency", 20);
            $table->dateTime('dueDate')->default(now()->addDays(30));
            $table->unsignedBigInteger("product_id")->index();
            $table->unsignedBigInteger("user_id")->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
