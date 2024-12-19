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
        Schema::create('dcd_hoadon', function (Blueprint $table) {
            $table->id();
            $table->string('dcdMaHoaDon', 255)->unique();

$table->bigInteger('dcdmakhachhang')->references('id')->on('dcd_khachhang');
$table->date('dcdngayhoadon');
$table->string('dcdhotenkhachhang', 255);
$table->string('dcdemail', 255);
$table->string('dcddienthoai', 255);
$table->string('dcddiachi', 255);
$table->float('dcdtongtrigia');
$table->tinyInteger('dcdtrangthai');
$table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcd_hoadon');
    }
};
