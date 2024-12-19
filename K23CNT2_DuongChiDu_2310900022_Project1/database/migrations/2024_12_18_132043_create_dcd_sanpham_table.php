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
        Schema::create('dcd_sanpham', function (Blueprint $table) {
            $table->id();
            $table->string('dcdmasanpham',255)->unique();
            $table->string('dcdtensanpham',255);
            $table->string('dcdhinhanh',255);
            $table->integer('dcdsoluong');
            $table->float('dcddongia');
            $table->bigInteger('dcdmaloai')->references('id')->on('dcd_loaisanpham');
            $table->tinyInteger('dcdtrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcd_sanpham');
    }
};
