<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic', function (Blueprint $table) {
            $table->id();
            $table->dateTime('system_date')->nullable();
            $table->string('page');
            $table->string('city');
            $table->string('country');
            $table->integer('category_id');
            $table->string('sub_category');

            $table->string('serch_text');
            $table->string('customer_name');
            $table->string('ip_address');

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
        Schema::dropIfExists('traffic');
    }
};
