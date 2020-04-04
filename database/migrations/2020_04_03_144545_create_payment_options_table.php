<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_options', function (Blueprint $table) {
            $table->id();
            $table->string('short_name');
            $table->string('name');
            $table->longText('description');
            $table->longText('terms');
            $table->boolean('unavailable')->default(false);
            $table->boolean('is_voucher')->default(false);
            $table->boolean('is_instant')->default(false);
            $table->boolean('enabled')->default(false);
            $table->boolean('savings_enabled')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_options');
    }
}
