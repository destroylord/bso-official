<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position');
            $table->string('name');
            $table->string('images')->nullable();
            $table->unsignedInteger('category_structure_id')->nullable();
            $table->timestamps();
        });

        Schema::table('structures', function(Blueprint $table){
            $table->foreign('category_structure_id')
                    ->references('id')
                    ->on('category_structures')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('structures');
    }
}
