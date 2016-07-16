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
            $table->increments('id');
            $table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->date('birthday');
			$table->enum('gender', ['m', 'f']);
			$table->string('avatar')->default('default.jpg');
			$table->string('biography', 350);
			$table->enum('role', ['administrator', 'moderator', 'author'])->default('author');
            $table->string('email')->unique();
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
        Schema::drop('users');
    }
}
