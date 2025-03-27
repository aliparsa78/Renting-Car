<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('category_id')->index()->unsigned();
            $table->foreign('category_id')->references('id')->on('car_categories')->onDelete('cascade');
            $table->string('name');
            $table->string('model');
            $table->string('color');
            $table->string('license_plate');
            $table->string('Price_per_day');
            $table->string('available_status');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
        schema::table('cars',function(Blueprint $table){
            $table->dropSoftDeletes();
        });
    }
};
