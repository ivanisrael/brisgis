<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('household_id')->unsigned();
            $table->string('family_identifier');
            $table->integer('monthly_income');
            $table->boolean('if_other_livelihood');
            $table->integer('livelihood');
            $table->boolean('if_4ps');

            $table->foreign('household_id')->references('id')->on('familys')->onDelete('cascade');
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
        Schema::drop('familys');
    }
}
