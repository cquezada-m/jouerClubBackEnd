<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SportBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sport_branch', function (Blueprint $table) {
            $table->integer('sport_id')->comment("field to store court's number idenfifier, it's a foreign key")->unsigned();
            $table->foreign('sport_id')->references('id')->on('sports')->onDelete('cascade');
            
            $table->integer('branch_id')->comment("field to store branch's number idenfifier, it's a foreign key")->unsigned();
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');

        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('sports');
    }
}

//
