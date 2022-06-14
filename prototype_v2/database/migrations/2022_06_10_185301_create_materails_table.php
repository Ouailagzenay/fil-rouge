<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materails', function (Blueprint $table) {
            $table->id();
            $table->string('nom_materail');
            $table->string('slug', 191)->unique();
            $table->string('description',255);
            $table->decimal('price',8,2);
            $table->decimal('inStock',8,2);
            $table->string('image');
            $table->bigInteger('categorie_id')->unsigned();
            $table->timestamps();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('CASCADE');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materails');
    }
}
