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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',75);//en fazla 255 karakter
            $table->text('description')->nullable();//string tipindeki veriden daha fazla karakterde yazi aliyor.  
            $table->boolean('status')->default(true);//veri tipi boolean oldugunda 2 cesit veri yazilabiliyor.
            $table->timestamps();// create_at ve update_at
        });
    }
//php artisan migrate --path=/database/migrations/tablo_adi =>bu kod ile sadece bir tabloyu migrate edebiliyoruz.
//php artisan migrate:refresh => bu kodda butun tablolardaki verileri silip yeniden migrate ediyoruz.
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
