<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitioturistico', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->text('descripcion');
            $table->string('direccion', 15);
            $table->string('imagen', 255);
            $table->string('categoria', 50);

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
        Schema::dropIfExists('sitioturistico');
    }
};
