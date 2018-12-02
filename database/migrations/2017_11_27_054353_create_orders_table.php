<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->date('order_date');
            $table->text('booking_address');
            //$table->timestamp('start_time')->nullable();
            $table->time('start_time');
            //$table->timestamps('start_time');
            //$table->timestamp('end_time')->nullable();
            //$table->timestams('end_time');
            $table->time('end_time');
            $table->double('total_peyment');
            $table->string('status', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
