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
    Schema::create('commande_plat', function (Blueprint $table) {
        $table->unsignedBigInteger('commande_id');
        $table->unsignedBigInteger('plat_id');
        $table->integer('nombre')->default(1);

        $table->foreign('commande_id')->references('id')->on('commandes');
        $table->foreign('plat_id')->references('id')->on('plats');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande_plat');
    }
};
