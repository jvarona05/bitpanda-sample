<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('verified')->default(false);
            $table->string('mobile');
            $table->boolean('mobile_verified')->default(false);
            $table->date('birthday');
            $table->string('street');
            $table->string('zipcode');
            $table->string('iso');
            $table->foreignId('country_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'verified', 
                'mobile', 
                'mobile_verified',
                'birthday',
                'street',
                'zipcode',
                'iso',
                'country_id'
            ]);
        });
    }
}
