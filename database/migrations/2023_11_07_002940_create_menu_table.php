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
<<<<<<<< HEAD:database/migrations/2023_11_07_002940_create_menu_table.php
        Schema::create('menu', function (Blueprint $table) {
            $table->string('id', 5);
========
        Schema::create('cart', function (Blueprint $table) {
            $table->bigIncrements('id');
>>>>>>>> 3246db9e82362646c50f7862218628ac31515db1:database/migrations/2023_11_11_114336_cart.php
            $table->string('foodname', 100);
            $table->tinyText('description');
            $table->float('price', 10,2);
            $table->string('categories', 20);
<<<<<<<< HEAD:database/migrations/2023_11_07_002940_create_menu_table.php
            $table->timestamps();
========
            $table->integer('quantity');
>>>>>>>> 3246db9e82362646c50f7862218628ac31515db1:database/migrations/2023_11_11_114336_cart.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2023_11_07_002940_create_menu_table.php
        Schema::dropIfExists('menu');
========
        Schema::dropIfExists('cart');
>>>>>>>> 3246db9e82362646c50f7862218628ac31515db1:database/migrations/2023_11_11_114336_cart.php
    }
};