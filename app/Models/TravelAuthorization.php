<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelAuthorization extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_ta',
        'request_by',
        'approve_by',
        'departement',
        'purpose',
        'start_date',
        'end_date',
        'status',
        //data traveller
        'bn_1',
        'bn_name_1',
        'departement_1',
        'charge_1',
        'passport_1',
        'bn_price_1',
        'bn_2',
        'bn_name_2',
        'departement_2',
        'charge_2',
        'passport_2',
        'bn_price_2',
        'bn_3',
        'bn_name_3',
        'departement_3',
        'charge_3',
        'passport_3',
        'bn_price_3',
        'bn_4',
        'bn_name_4',
        'departement_4',
        'charge_4',
        'passport_4',
        'bn_price_4',
        //data flight
        'aircraft_name',
        'total_airfare',
        //data hotel
        'hotel_name_1',
        'city_1',
        'checkin_date_1',
        'checkout_date_1',
        'hotel_price_1',
        'hotel_name_2',
        'city_2',
        'checkin_date_2',
        'checkout_date_2',
        'hotel_price_2'
    ];
}
