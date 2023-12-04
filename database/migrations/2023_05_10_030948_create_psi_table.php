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
        Schema::create('psi', function (Blueprint $table) {
            $table->bigIncrements('psi_id')->unique();
            $table->unsignedBigInteger('cases_id');
            $table->foreign('cases_id')->references('cases_id')->on('cases')->onDelete('CASCADE');
            for ($i = 1; $i <= 45; $i++) {
                for ($j = 1; $j <= 8; $j++) {
                    $columnName = 'psia'.$i.'c'. $j;
                    $table->float($columnName, 6, 6)->default(0);
                }
            }
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
        Schema::dropIfExists('psi');
    }
};
