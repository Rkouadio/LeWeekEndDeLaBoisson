<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenoms');
            $table->string('email');
            $table->string('contact');
            $table->string('adresse');
            $table->string('motivation');
            /**
             * indexation sur la table type_inscription
             */
            $table->unsignedInteger('type_inscriptions');
            $table->foreign('type_inscriptions')
                ->references('id')->on('type_inscriptions')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('inscriptions');
    }
}

