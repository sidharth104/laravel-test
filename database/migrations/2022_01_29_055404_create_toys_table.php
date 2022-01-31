<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */php artisan migrate --path=/database/migrations/2020_04_01_064006_create_posts_table.php
    public function up()
    {
        Schema::create('toys', function (Blueprint $table) {
           
             $table->string('name');
             $table->string('lastname');
             $table->string('raghu');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toys');
    }
}
