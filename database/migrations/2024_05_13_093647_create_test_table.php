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
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('amount');
            $table->decimal('price');
            $table->date('time');
            $table->timestamps();
        });
    }
    // soru 
    // test tablosuna icindeki verileri silmeden yani migrate:refresh etmeden sutun eklemek istiyorum.
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test');
    }
};
