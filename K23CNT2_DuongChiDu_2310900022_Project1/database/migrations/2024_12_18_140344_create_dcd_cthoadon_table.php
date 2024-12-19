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
        Schema::create('dcd_cthoadon', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dcdhoadonid')->references('id')->on('dcd_hoadon');
$table->bigInteger('dcdsanphamid')->references('id')->on('dcd_sanpham');
$table->integer('dcdssoluongmua');
$table->float('dcddongiamua');
$table->float('dcdthanhtien');
$table->tinyInteger('dcdtrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcd_cthoadon');
    }
};
