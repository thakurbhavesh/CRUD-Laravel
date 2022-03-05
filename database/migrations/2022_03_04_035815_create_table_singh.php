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
        Schema::create('table_singh', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('skill');
            $table->string('gender');
            $table->string('aadharno');
            $table->string('aadharfile');
            $table->string('attachment');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_singh');
    }
};
