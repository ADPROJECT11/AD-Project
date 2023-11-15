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
<<<<<<<< HEAD:database/migrations/2023_11_12_154348_create_user_table.php
        Schema::create('user', function (Blueprint $table) {
            $table->id("id")->autoIncrement;
            $table->string("username", 20)->unique();
            $table->string("password", 20)->unique();
            $table->string("Roles",10);
            $table->timestamps();
========
        Schema::create('cart', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foodname', 100);
            $table->tinyText('description');
            $table->float('price', 10,2);
            $table->string('categories', 20);
            $table->integer('quantity');
>>>>>>>> View-Menu:database/migrations/2023_11_11_114336_cart.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2023_11_12_154348_create_user_table.php
        Schema::dropIfExists('user');
========
        Schema::dropIfExists('cart');
>>>>>>>> View-Menu:database/migrations/2023_11_11_114336_cart.php
    }
};
