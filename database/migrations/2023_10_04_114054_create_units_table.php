<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('propertie_id')->nullable();
            $table->string('residentialFlatBunglowRadio')->nullable();
            $table->string('commercialSpaceRadio')->nullable();
            $table->string('plotandRadio')->nullable();
            $table->string('propertyDetailsRadio')->nullable();
            $table->integer('total_no_unit')->nullable();
            $table->integer('min_carpet_area')->nullable();
            $table->integer('max_carpet_area')->nullable();
            $table->integer('saleable_area')->nullable();
            $table->integer('rate_per')->nullable();
            $table->integer('price_per_unit')->nullable();
            $table->integer('stamp_duty_form')->nullable();
            $table->integer('stamp_duty_to')->nullable();
            $table->integer('registration_form')->nullable();
            $table->integer('registration_to')->nullable();
            $table->integer('gst_form')->nullable();
            $table->integer('gst_to')->nullable();
            $table->integer('infra_structure_development_form')->nullable();
            $table->integer('infra_structure_development_to')->nullable();
            $table->integer('price_per_unit_form')->nullable();
            $table->integer('price_per_unit_to')->nullable();
            $table->string('ready_for_possesion')->nullable();
            $table->date('future_date')->nullable();
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
        Schema::dropIfExists('units');
    }
}
