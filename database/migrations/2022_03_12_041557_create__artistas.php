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
        Schema::create('_artistas', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->text('imagen');
            $table->text('descripcion');
            $table->text('pais');
            $table->text('alias');
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
        Schema::dropIfExists('_artistas');
    }
};
