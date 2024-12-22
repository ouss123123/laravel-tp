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
    Schema::create('plats', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('categorie_id');
        $table->string('intitule');
        $table->text('description');
        $table->decimal('prix', 8, 2);
        $table->string('photo')->nullable();
        $table->timestamps();

        $table->foreign('categorie_id')->references('id')->on('categories');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plats');
    }
};
