<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
            
            $table->id(); // Auto-incrementing ID field
            $table->unsignedBigInteger('order_id'); // Foreign key for order
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade'); // Define foreign key constraint
            $table->unsignedBigInteger('product_id'); // Foreign key for product
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); // Define foreign key constraint
            $table->string('name'); // Product name
            $table->unsignedInteger('quantity'); // Product quantity
            $table->decimal('subtotal', 8, 2); // Product subtotal, up to 8 digits with 2 decimal places
            $table->timestamps(); // Timestamps for creation and updates            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_item');
    }
}