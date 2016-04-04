<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseholdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('households', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purok_id')->unsigned();
            $table->string('name');
            $table->date('year_constructed');
            $table->integer('net_value');
            $table->string('household_usage');
            $table->string('structure');
            $table->double('area');
            $table->integer('no_stories');
            $table->string('holding');
            $table->boolean('if_flooded');
            $table->date('date_flooded');
            $table->string('flood_height');
            $table->string('building_height');
            $table->date('date_entry');
            $table->double('longitude');
            $table->double('latitude');     

            $table->foreign('purok_id')->references('id')->on('puroks')->onDelete('cascade');
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
        Schema::drop('households');
    }
}
