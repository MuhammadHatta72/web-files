<table style="text-align: center;">
    <thead>
        <tr>
            <th style="vertical-align: middle; text-align:center;" rowspan="2"><b>ID TA</b></th>
            <th style="vertical-align: middle; text-align:center;" rowspan="2"><b>Request By</b></th>
            <th style="vertical-align: middle; text-align:center;" rowspan="2"><b>Approve By</b></th>
            <th style="vertical-align: middle; text-align:center;" rowspan="2"><b>Departement</b></th>
            <th style="vertical-align: middle; text-align:center;" rowspan="2"><b>Purpose Event</b></th>
            <th style="vertical-align: middle; text-align:center;" rowspan="2"><b>Start Date</b></th>
            <th style="vertical-align: middle; text-align:center;" rowspan="2"><b>End Date</b></th>
            <th style="vertical-align: middle; text-align:center;" rowspan="2"><b>Status</b></th>
            <th style="vertical-align: middle; text-align:center;" colspan="6"><b>Data Travel</b></th>
            <th style="vertical-align: middle; text-align:center;" colspan="2"><b>Data Flight</b></th>
            <th style="vertical-align: middle; text-align:center;" colspan="5"><b>Data Hotel</b></th>
            <th style="vertical-align: middle; text-align:center;" rowspan="2" colspan="2"><b>Total</b></th>
        </tr>
        <tr>
            <th style="vertical-align: middle; text-align:center;"><b>BN</b></th>
            <th style="vertical-align: middle; text-align:center;"><b>Name</b></th>
            <th style="vertical-align: middle; text-align:center;"><b>Departement</b></th>
            <th style="vertical-align: middle; text-align:center;"><b>Charge To</b></th>
            <th style="vertical-align: middle; text-align:center;"><b>Passport</b></th>
            <th style="vertical-align: middle; text-align:center;"><b>Price</b></th>
            <th style="vertical-align: middle; text-align:center;"><b>Aircraft Name</b></th>
            <th style="vertical-align: middle; text-align:center;"><b>Price</b></th>
            <th style="vertical-align: middle; text-align:center;"><b>Hotel Name</b></th>
            <th style="vertical-align: middle; text-align:center;"><b>City</b></th>
            <th style="vertical-align: middle; text-align:center;"><b>Checkin Date</b></th>
            <th style="vertical-align: middle; text-align:center;"><b>Checkout Date</b></th>
            <th style="vertical-align: middle; text-align:center;"><b>Price</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($travel_authorizations as $travel_authorization)
            <tr>
                <td style="vertical-align: middle; text-align:center;" rowspan="4">{{ $travel_authorization->id_ta }}</td>
                <td style="vertical-align: middle; text-align:center;" rowspan="4">{{ $travel_authorization->request_by }}</td>
                <td style="vertical-align: middle; text-align:center;" rowspan="4">{{ $travel_authorization->approve_by }}</td>
                <td style="vertical-align: middle; text-align:center;" rowspan="4">{{ $travel_authorization->departement }}</td>
                <td style="vertical-align: middle; text-align:center;" rowspan="4">{{ $travel_authorization->purpose }}</td>
                <td style="vertical-align: middle; text-align:center;" rowspan="4">{{ $travel_authorization->start_date }}</td>
                <td style="vertical-align: middle; text-align:center;" rowspan="4">{{ $travel_authorization->end_date }}</td>
                <td style="vertical-align: middle; text-align:center;" rowspan="4">{{$travel_authorization->status }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->bn_1 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->bn_name_1 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->departement_1 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->charge_1 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->passport_1 }}</td>
                <td style="vertical-align: middle; text-align:center;">Rp. {{ number_format($travel_authorization->bn_price_1, 0, ',', '.') }}</td>
                <td style="vertical-align: middle; text-align:center;" rowspan="4">{{ $travel_authorization->aircraft_name }}</td>
                <td style="vertical-align: middle; text-align:center;" rowspan="4">{{ $travel_authorization->total_airfare }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->hotel_name_1 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->city_1 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->checkin_date_1 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->checkout_date_1 }}</td>
                <td style="vertical-align: middle; text-align:center;">Rp. {{ number_format($travel_authorization->hotel_price_1, 0, ',', '.') }}</td>
                <td style="vertical-align: middle; text-align:center;" rowspan="4" colspan="2">
                    Rp. {{ number_format($travel_authorization->bn_price_1 + $travel_authorization->bn_price_2 + $travel_authorization->bn_price_3 + $travel_authorization->bn_price_4 + $travel_authorization->total_airfare + $travel_authorization->hotel_price_1 + $travel_authorization->hotel_price_2, 0, ',', '.') }}
                </td>
            </tr>
            <tr>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->bn_2 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->bn_name_2 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->departement_2 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->charge_2 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->passport_2 }}</td>
                <td style="vertical-align: middle; text-align:center;">Rp. {{ number_format($travel_authorization->bn_price_2, 0, ',', '.') }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->hotel_name_2 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->city_2 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->checkin_date_2 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->checkout_date_2 }}</td>
                <td style="vertical-align: middle; text-align:center;">Rp. {{ number_format($travel_authorization->hotel_price_2, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->bn_3 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->bn_name_3 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->departement_3 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->charge_3 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->passport_3 }}</td>
                <td style="vertical-align: middle; text-align:center;">Rp. {{ number_format($travel_authorization->bn_price_3, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->bn_4 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->bn_name_4 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->departement_4 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->charge_4 }}</td>
                <td style="vertical-align: middle; text-align:center;">{{ $travel_authorization->passport_4 }}</td>
                <td style="vertical-align: middle; text-align:center;">Rp. {{ number_format($travel_authorization->bn_price_4, 0, ',', '.') }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="13" style="vertical-align: middle; text-align:right;"><b>Total Data Travel</b></td>
            <td style="vertical-align: middle; text-align:center;">
                <b>
                    Rp. {{ number_format($prices_travel, 0, ',', '.') }}
                </b>
            </td>
            <td style="vertical-align: middle; text-align:right;"><b>Total Data Flight</b></td>
            <td style="vertical-align: middle; text-align:center;">
                <b>
                    Rp. {{ number_format($prices_flight, 0, ',', '.') }}
                </b>
            </td>
            <td colspan="4" style="vertical-align: middle; text-align:right;"><b>Total Data Hotel</b></td>
            <td style="vertical-align: middle; text-align:center;">
                <b>
                    Rp. {{ number_format($prices_hotel, 0, ',', '.') }}
                </b>
            </td>
            <td style="vertical-align: middle; text-align:right;"><b>Total Keseluruhan</b></td>
            <td style="vertical-align: middle; text-align:center;">
                <b>
                    Rp. {{ number_format($prices_total, 0, ',', '.') }}
                </b>
            </td>
        </tr>
</table>
