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
        Schema::create('covered_municipalities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dps_id');
            $table->unsignedBigInteger('municipality_id');
            $table->timestamps();
            $table->foreign('dps_id')->references('id')->on('dps')->onDelete('cascade');
            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covered_municipalities');
    }
};
