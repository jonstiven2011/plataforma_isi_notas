<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
	        $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('document');
            $table->string('email')->unique();
            $table->string('phone');
            $table->unsignedBigInteger('curso_1');
            $table->foreign('curso_1')->references('id')->on('cursos');
            $table->unsignedBigInteger('curso_2');
            $table->foreign('curso_2')->references('id')->on('cursos');
            $table->unsignedBigInteger('curso_3');
            $table->foreign('curso_3')->references('id')->on('cursos');
            $table->string('photo')->default('imgs/nophoto.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('editor');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
