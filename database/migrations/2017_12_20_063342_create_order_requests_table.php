<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('state');
            $table->dateTime('requested_date');
            $table->dateTime('completed_date');
            $table->float('expected_quantity');
            $table->float('real_quantity');
            $table->integer('user_id');
            $table->integer('collected_id');


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
        Schema::dropIfExists('order_requests');
    }
}
