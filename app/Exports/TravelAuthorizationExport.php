<?php

namespace App\Exports;

use App\Models\TravelAuthorization;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TravelAuthorizationExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $prices_travel = TravelAuthorization::sum('bn_price_1') + TravelAuthorization::sum('bn_price_2') + TravelAuthorization::sum('bn_price_3') + TravelAuthorization::sum('bn_price_4');
        $prices_hotel = TravelAuthorization::sum('hotel_price_1') + TravelAuthorization::sum('hotel_price_2');
        $prices_flight = TravelAuthorization::sum('total_airfare');
        $data = [
            'travel_authorizations' => TravelAuthorization::all(),
            'prices_travel' => $prices_travel,
            'prices_hotel' => $prices_hotel,
            'prices_flight' => $prices_flight,
            'prices_total' => $prices_travel + $prices_hotel + $prices_flight
        ];
        return view('exports.travel_authorizations', $data);
    }
}