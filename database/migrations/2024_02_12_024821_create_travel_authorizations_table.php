<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('travel_authorizations', function (Blueprint $table) {
            $table->id();
            $table->string('id_ta');
            $table->string('request_by');
            $table->string('approve_by');
            $table->string('departement');
            $table->string('purpose');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('status');
            //data traveller
            $table->string('bn_1')->nullable();
            $table->string('bn_name_1')->nullable();
            $table->string('departement_1')->nullable();
            $table->string('charge_1')->nullable();
            $table->string('passport_1')->nullable();
            $table->string('bn_2')->nullable();
            $table->string('bn_name_2')->nullable();
            $table->string('departement_2')->nullable();
            $table->string('charge_2')->nullable();
            $table->string('passport_2')->nullable();
            $table->string('bn_3')->nullable();
            $table->string('bn_name_3')->nullable();
            $table->string('departement_3')->nullable();
            $table->string('charge_3')->nullable();
            $table->string('passport_3')->nullable();
            $table->string('bn_4')->nullable();
            $table->string('bn_name_4')->nullable();
            $table->string('departement_4')->nullable();
            $table->string('charge_4')->nullable();
            $table->string('passport_4')->nullable();
            //data flight
            $table->string('aircraft_name')->nullable();
            $table->string('total_airfare')->nullable();
            //data hotel
            $table->string('hotel_name_1')->nullable();
            $table->string('city_1')->nullable();
            $table->string('checkin_date_1')->nullable();
            $table->string('checkout_date_1')->nullable();
            $table->string('hotel_price_1')->nullable();
            $table->string('hotel_name_2')->nullable();
            $table->string('city_2')->nullable();
            $table->string('checkin_date_2')->nullable();
            $table->string('checkout_date_2')->nullable();
            $table->string('hotel_price_2')->nullable();
            $table->timestamps();

            //Kayak gini ada id ta, request, departemen,  approbe,  start and end data, data travel data flight, data hotel sama total karyawan dan total budget seluruh karyawann
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_authorizations');
    }
};
