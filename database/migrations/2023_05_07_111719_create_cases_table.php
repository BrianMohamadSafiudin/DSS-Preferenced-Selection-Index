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
        Schema::create('cases', function (Blueprint $table) {
            $table->bigIncrements('cases_id')->unique();
            for ($i = 1; $i <= 15; $i++) {
                $table->string('alternative'.$i)->default(0);
            }
            for ($i = 1; $i <= 15; $i++) {
                for ($j = 1; $j <= 7; $j++) {
                    $columnName = 'a'.$i.'c'. $j;
                    $table->float($columnName)->default(0);
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
        Schema::dropIfExists('cases');
    }
};
