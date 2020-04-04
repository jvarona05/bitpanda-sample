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
            $table->string('mobile')->nullable();
            $table->boolean('mobile_verified')->default(false);
            $table->date('birthday')->nullable();
            $table->string('street')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('iso')->nullable();
            $table->foreignId('country_id')->nullable()->constrained();
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
