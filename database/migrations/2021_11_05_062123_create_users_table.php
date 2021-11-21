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
            $table->string('full_name');          
            $table->timestamp('birth_data')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('education_degree')->nullable();
            $table->string('merrige')->nullable();
            $table->string('address_registred')->nullable();
            $table->string('address_living')->nullable();
            $table->string('image')->nullable();
            $table->string('home_type')->nullable();
            $table->string('home_owning')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->bigInteger('phone_additional')->nullable();
            $table->string('target_adress')->nullable();        
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
