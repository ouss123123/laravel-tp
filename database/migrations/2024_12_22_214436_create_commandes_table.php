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
    Schema::create('commandes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('serveur_id');
        $table->integer('numero_table')->nullable();
        $table->enum('etat', ['en cours', 'terminé', 'servi', 'emporté'])->default('en cours');
        $table->boolean('payé')->default(false);
        $table->timestamps();

        $table->foreign('serveur_id')->references('id')->on('serveurs');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
};
