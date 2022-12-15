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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('country_id');
            $table->string('city');
            $table->string('P_name')->nullable();
            $table->string('P_address');
            $table->string('webUrl');
            $table->string('remark');
            $table->string('image')->nullable();
            $table->string('img_resolution');
            $table->string('keyword');
            $table->string('imgstatus');
            $table->integer('user_id');
         
            $table->string('addedBy');
            $table->string('addedOn');
            $table->string('updatedBy');
            $table->string('updatedOn');
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
        Schema::dropIfExists('customers');
    }
};
