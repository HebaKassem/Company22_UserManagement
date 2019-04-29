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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('numOfEmp')->unsigned();
            $table->string('interest1');
            $table->string('interest2')->nullable();
            $table->string('interest3')->nullable();
            $table->string('interest4')->nullable();
            $table->string('interest5')->nullable();
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
