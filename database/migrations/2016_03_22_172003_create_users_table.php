<?php

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
            $table->integer('id', true, true);
            $table->string('username')->unique();
            $table->index('username');
            $table->string('email')->unique();
            $table->index('email');
            $table->string('password');
            $table->string('name');
            $table->integer('language_id', false, true);
            $table->index('language_id');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->timestamp('created');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
