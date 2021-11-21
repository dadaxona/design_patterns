<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->integer('idy')->nullable();
            $table->timestamp('payment_term')->nullable();
            $table->string('mani_famliy_expene')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('created_by_conclusion')->nullable();
            $table->string('monitored_by')->nullable();
            $table->string('monitored_at')->nullable();
            $table->string('committee_member')->nullable();
            $table->string('committee_conslusion')->nullable();
            $table->timestamp('committee_date')->nullable();
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
}
