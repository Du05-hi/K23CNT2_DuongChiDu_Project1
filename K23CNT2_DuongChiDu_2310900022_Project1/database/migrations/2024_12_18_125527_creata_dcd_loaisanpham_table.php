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
        Schema::create('dcd_loaisanspham',function (Blueprint $table){
            $table->id();
            $table ->string('dcdmaloai',255)->unique();
            $table->string('dcdtenloai',255);
            $table->tinyInteger('dcdtrangthai');
            $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropExists('dcd_loaisanpham');
    }
};
