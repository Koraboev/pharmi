<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDekansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dekans', function (Blueprint $table) {
            $table->id();
            $table->string('fio');
            $table->binary('rasm');
            $table->string('uzpost');
            $table->string('rupost');
            $table->string('enpost');
            $table->string('pochta');
            $table->string('nomer');
            $table->string('uzidu');
            $table->string('ruidu');
            $table->string('enidu');
            $table->string('uzhafta');
            $table->string('ruhafta');
            $table->string('enhafta');
            $table->string('vaqt');
            $table->string('userId');
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
        Schema::dropIfExists('dekans');
    }
}
