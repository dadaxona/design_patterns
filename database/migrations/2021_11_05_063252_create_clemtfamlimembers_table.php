<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClemtfamlimembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clemtfamlimembers', function (Blueprint $table) {          
            $table->id();
            $table->integer('idy')->nullable();
            $table->string('full_name')->nullable();
            $table->string('relation_type')->nullable();
            $table->string('work')->nullable();         
            $table->string('work_adress')->nullable();
            $table->integer('income')->nullable();
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clemtfamlimembers');
    }
}
