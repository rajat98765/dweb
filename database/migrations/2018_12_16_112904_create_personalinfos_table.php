<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalinfos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('bday');
            $table->string('wdlive');
            $table->string('pno')->unique();
            $table->string('profession');
            $table->string('education');
            $table->string('marriage');
            $table->string('marriedb');
            $table->string('height');
            $table->string('weight');
            $table->string('hear');
            $table->string('beforeworked');
            $table->string('ytell')->nullable() ;
            $table->string('challenge');
            $table->string('passion');
            $table->string('religion');
            $table->string('fb')->nullable() ;
            $table->string('linkedin')->nullable() ;



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
        Schema::dropIfExists('personalinfos');
    }
}
