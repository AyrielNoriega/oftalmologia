<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('type_id')->nullable();
            $table->bigInteger('num_id');
            $table->date('f_nacimiento')->nullable();
            $table->integer('age')->nullable();
            $table->string('sex')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('email')->unique();
            $table->string('city')->nullable();
            $table->string('direction')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
