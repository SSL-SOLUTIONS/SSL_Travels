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
        Schema::create('internationalspackages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('image');
            $table->string('price');
            $table->unsignedBigInteger('international_id');
            $table->foreign('international_id')->references('id')->on('internationals')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internationalpackages');
    }
};
