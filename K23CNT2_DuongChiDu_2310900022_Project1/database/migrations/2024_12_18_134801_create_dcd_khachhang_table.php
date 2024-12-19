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
        Schema::create('dcd_khachhang', function (Blueprint $table) {
            $table->id();
            $table->string('dcdmakhachhang',255)->unique();
            $table->string('dcdhovatenkhachhang',255);
            $table->string('dcdemail',255);
            $table->string('dcdmatkhau',255);
            $table->string('dcddienthoai',255);
            $table->string('dcddiachi',255);
            $table->date('dcdngaydangki');
            $table->tinyInteger('dcdtrangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcd_khachhang');
    }
};
