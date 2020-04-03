<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiatProviderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiat_provider_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fiat_id')->constrained();
            $table->foreignId('payment_option_id')->constrained();
            $table->decimal('fee_fix', 8, 2);
            $table->decimal('fee_percent', 8, 2);
            $table->decimal('fee_max', 8, 2);
            $table->decimal('vip_fee_percent_difference', 8, 3);
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
        Schema::dropIfExists('fiat_provider_details');
    }
}
