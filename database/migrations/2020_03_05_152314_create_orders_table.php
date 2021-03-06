<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('event_id');
            $table->tinyInteger('state_id')->default(0)->comment('0 => payment pending , 1 => successful , 2 => failed');
            $table->tinyInteger('type_id')->default(0)->comment('0 => event , 1 => register , 2 => upgrade . 3 => repeat');
            $table->text('comment')->nullable()->comment('explain about order');
            $table->integer('total_price');
            $table->string('reference_id')->nullable()->comment('website reference number');
            $table->string('reference_number')->nullable()->comment('bank reference number');
            $table->timestamps();
            $table->softDeletes();
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
