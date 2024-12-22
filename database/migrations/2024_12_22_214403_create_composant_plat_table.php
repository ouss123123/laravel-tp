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
    Schema::create('composant_plat', function (Blueprint $table) {
        $table->unsignedBigInteger('composant_id');
        $table->unsignedBigInteger('plat_id');
        $table->integer('quantite');
        $table->string('unite');
        
        $table->foreign('composant_id')->references('id')->on('composants');
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
        Schema::dropIfExists('composant_plat');
    }
};
