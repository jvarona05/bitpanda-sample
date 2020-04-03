<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiatWalletTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiat_wallet_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fiat_wallet_id')->constrained();
            $table->enum('actions', ['buy', 'sell', 'deposit', 'withdrawal']);
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
        Schema::dropIfExists('fiat_wallet_transactions');
    }
}
