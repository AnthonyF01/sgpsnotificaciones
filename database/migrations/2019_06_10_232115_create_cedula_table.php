<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCedulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedula', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nguia',10);
            $table->string('fguia',10);
            $table->string('nsij',5);
            $table->string('nced',10);
            $table->string('fced',10);
            $table->string('nexp',10);
            $table->string('fexp',10);
            $table->string('csede',10);
            $table->string('nbarcode',50);
            $table->string('estado',20)->default(0);
            $table->integer('tblinstancia_id')->unsigned()->index();
            $table->foreign('tblinstancia_id')->references('id')->on('tblinstancia')->onDelete('cascade');
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
        Schema::dropIfExists('cedula');
    }
}
