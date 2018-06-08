<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->increments('id')->comment("field to store falicity's number idenfifier, it's a foreign key")->unsigned();;
            $table->string('name')->comment("field to store falicity's name");
            $table->string('brand')->comment("field to store falicity's brand");
            $table->string('price')->comment("field to store falicity's price");
            $table->string('avatar')->comment("field to store facility's avatar")->nullable();
            $table->integer('useful')->comment("field to store facility's useful life")->nullable();
            $table->dateTimeTz('purchased_at')->comment("field to store when the court was bought");
            $table->integer('court_id')->comment("field to store court's number idenfifier, it's a foreign key")->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facilities');
    }
}
