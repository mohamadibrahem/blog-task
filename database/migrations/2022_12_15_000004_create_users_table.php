<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->string('username')->nullable()->unique();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}