<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('clients', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name')->nullable();
            $table->string('spouse')->nullable();
            $table->string('spouse_work')->nullable();
            $table->integer('children_count')->nullable();
            $table->integer('famliy_member_count')->nullable();
            $table->integer('income_generators_count')->nullable();
            $table->string('pasport_series')->nullable();
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
        // Schema::dropIfExists('clients');
    }
}
