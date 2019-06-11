<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblinstanciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblinstancia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('c_instancia',10);
            $table->string('c_distrito',5);
            $table->string('c_provincia',5);
            $table->string('c_org_jurisd',5);
            $table->string('c_sede',10);
            $table->string('c_ubigeo',10);
            $table->string('x_corto',10);
            $table->string('x_nom_instancia',100);
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
        Schema::dropIfExists('tblinstancia');
    }
}
