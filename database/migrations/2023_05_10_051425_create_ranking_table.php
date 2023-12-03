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
        Schema::create('ranking', function (Blueprint $table) {
            $table->bigIncrements('ranking_id')->unique();
            $table->unsignedBigInteger('cases_id');
            $table->foreign('cases_id')->references('cases_id')->on('cases')->onDelete('CASCADE');
            $table->float('rank',10,6)->default(0);
            $table->string('tabel')->default(0);
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
        Schema::dropIfExists('ranking');
    }
};
