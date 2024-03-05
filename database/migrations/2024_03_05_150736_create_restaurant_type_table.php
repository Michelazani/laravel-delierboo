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
        Schema::create('restaurant_type', function (Blueprint $table) {
            //creo colonna rest_user_id e la posiziono dopo id nella tab dip 
            $table->unsignedBigInteger('restaurant_id');
            //creo vincolo foreign key e faccio riferimento alla colonna rest_user_id che fa riferimento alla colonna 'id' della tabella 'rest_users'
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->cascadeOnDelete();

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types')->cascadeOnDelete();

            $table->primary(['restaurant_id','type_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_type');
    }
};
