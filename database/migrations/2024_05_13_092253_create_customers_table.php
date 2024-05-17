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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name',50); //buraya gelecek veriler en fazla 20 karakter olacaktir. daha fazla karakterde veri yazdirilmaya calisilirsa 20. karakterden sonrasini almayacaktir. 
            $table->date('date');//sadece tarih girilen veri tipi olusturuldugunda kullaniliyor.
            $table->dateTime('date_time');//sadece saat girilen veri tipi olusturuldugunda kullaniliyor.
            $table->decimal('amount')->default(0);// sadece tam sayılar girilen veri tipi olusturuldugunda kullaniliyor.
            $table->float('tax')->nullable();// sadece virgullu sayilar tarih girilen veri tipi olusturuldugunda kullaniliyor.
            $table->integer('piece');//sadece rakamla girilen veri tipi olusturuldugunda kullaniliyor.
            $table->time('time');//sadece zaman girilen veri tipi olusturuldugunda kullaniliyor.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
