<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromenadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Promenade', function (Blueprint $table) {
            $table->string('titre');
            $table->string('auteur');
            $table->string('pays');
            $table->string('ville');
            $table->string('codePostal');
            $table->string('depart');
            $table->binary('descr');
            $table->string('photo');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promenades');
    }
}
