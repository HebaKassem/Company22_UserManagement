<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanysystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companysystem', function (Blueprint $table) {
            $table->bigIncrements('companyID')->unique();
            $table->integer('interest1');
            $table->integer('interest2');
            $table->integer('interest3');
            $table->integer('interest4');
            $table->integer('interest5');
            $table->integer('numOfEmp');
            $table->string('name');
            $table->string('email');
            $table->string('password');

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
        Schema::dropIfExists('companysystem');
    }
}
