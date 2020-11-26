<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwosemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twosemesters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('semestre');
            $table->string('estudiante');
            $table->string('formador');
            $table->string('curso');
            $table->decimal('nota_1');
            $table->decimal('nota_2');
            $table->decimal('nota_3');
            $table->decimal('nota_4');
            $table->decimal('nota_5');
            $table->decimal('nota_6');
            $table->decimal('nota_7');
            $table->decimal('nota_8');
            $table->decimal('nota_9');
            $table->decimal('nota_10');
            $table->decimal('nota_11');
            $table->decimal('nota_12');
            $table->decimal('nota_13');
            $table->decimal('nota_14');
            $table->decimal('nota_15');
            $table->decimal('nota_16');
            $table->decimal('nota_definitiva');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('twosemesters');
    }
}
