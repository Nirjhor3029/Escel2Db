<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('region')->nullable();
            $table->string('area')->nullable();
            $table->string('territory')->nullable();

            $table->string('w0_royals_volume')->nullable();
            $table->string('w0_placement')->nullable();

            $table->string('w1_royals_volume')->nullable();
            $table->string('w1_star_royals_volume')->nullable();
            $table->string('w1_bonus')->nullable();

            $table->string('w2_royals_volume')->nullable();
            $table->string('w2_star_royals_volume')->nullable();
            $table->string('w2_bonus')->nullable();

            $table->string('w3_royals_volume')->nullable();
            $table->string('w3_star_royals_volume')->nullable();
            $table->string('w3_bonus')->nullable();

            $table->string('w4_royals_volume')->nullable();
            $table->string('w4_star_royals_volume')->nullable();
            $table->string('w4_bonus')->nullable();


            $table->string('a_w0_royals_volume')->nullable();
            $table->string('a_w0_placement')->nullable();

            $table->string('a_w1_royals_volume')->nullable();
            $table->string('a_w1_star_royals_volume')->nullable();
            $table->string('a_w1_bonus')->nullable();

            $table->string('a_w2_royals_volume')->nullable();
            $table->string('a_w2_star_royals_volume')->nullable();
            $table->string('a_w2_bonus')->nullable();

            $table->string('a_w3_royals_volume')->nullable();
            $table->string('a_w3_star_royals_volume')->nullable();
            $table->string('a_w3_bonus')->nullable();

            $table->string('a_w4_royals_volume')->nullable();
            $table->string('a_w4_star_royals_volume')->nullable();
            $table->string('a_w4_bonus')->nullable();



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
        Schema::dropIfExists('trackers');
    }
}
