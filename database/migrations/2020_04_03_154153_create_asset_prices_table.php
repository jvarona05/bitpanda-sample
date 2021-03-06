<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asset_id')->constrained();
            $table->decimal('open_price', 8, 2);
            $table->decimal('high_price', 8, 2);
            $table->decimal('close_price', 8, 2);
            $table->decimal('low_price', 8, 2);
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
        Schema::dropIfExists('asset_prices');
    }
}
