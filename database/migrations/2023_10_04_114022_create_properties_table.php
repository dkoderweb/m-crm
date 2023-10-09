<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('iWantToSellRadio')->nullable();
            $table->integer('no_of_units')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('district')->nullable();
            $table->string('taluka')->nullable();
            $table->string('city')->nullable();
            $table->string('landmark')->nullable();
            $table->integer('pin_code')->nullable();
            $table->string('project_building_name')->nullable();
            $table->string('developer_name')->nullable();
            $table->string('reraregistered')->nullable();
            $table->date('rera_end_date')->nullable();
            $table->integer('min_brokerage')->nullable();
            $table->integer('max_brokerage')->nullable();
            $table->integer('mobile_no_1')->nullable();
            $table->string('contact_person_name_1')->nullable();
            $table->integer('mobile_no_2')->nullable();
            $table->string('contact_person_name_2')->nullable();
            $table->integer('landline_number')->nullable();
            $table->string('tick_if_whatsapp')->nullable();
            $table->string('contact_person_name_3')->nullable();
            $table->string('project_email')->nullable();
            $table->string('project_website')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('owner_mobile_no_1')->nullable();
            $table->integer('owner_mobile_no_2')->nullable();
            $table->string('owner_email')->nullable();
            $table->string('owner_tick_if_wp_1')->nullable();
            $table->string('owner_tick_if_wp_2')->nullable();
            $table->string('address_country')->nullable();
            $table->string('address_state')->nullable();
            $table->string('address_district')->nullable();
            $table->string('address_taluka')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('address_landmark')->nullable();
            $table->string('address_note_1')->nullable();
            $table->string('address_note_2')->nullable(); 
            $table->string('lock_or_unlock')->nullable(); 
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
        Schema::dropIfExists('properties');
    }
}
