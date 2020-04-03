<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiatWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiat_wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fiat_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->decimal('amount', 16, 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiat_wallets');
    }
}
