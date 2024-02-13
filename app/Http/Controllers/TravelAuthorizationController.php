<?php

namespace App\Http\Controllers;

use App\Models\TravelAuthorization;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TravelAuthorizationExport;

class TravelAuthorizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'travel_authorizations' => TravelAuthorization::all()
        ];
        return view('travel_authorization.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('travel_authorization.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "id_ta" => "required",
            "request_by" => "required",
            "approve_by" => "required",
            "departement" => "required",
            "purpose" => "required",
            "start_date" => "required",
            "end_date" => "required",
            "status" => "required",
            // "bn_1" => "required",
            // "bn_name_1" => "required",
            // "departement_1" => "required",
            // "charge_1" => "required",
            // "passport_1" => "required",
            // "bn_2" => "required",
            // "bn_name_2" => "required",
            // "departement_2" => "required",
            // "charge_2" => "required",
            // "passport_2" => "required",
            // "bn_3" => "required",
            // "bn_name_3" => "required",
            // "departement_3" => "required",
            // "charge_3" => "required",
            // "passport_3" => "required",
            // "bn_4" => "required",
            // "bn_name_4" => "required",
            // "departement_4" => "required",
            // "charge_4" => "required",
            // "passport_4" => "required",
            // "aircraft_name" => "required",
            // "total_airfare" => "required",
            // "hotel_name_1" => "required",
            // "city_1" => "required",
            // "checkin_date_1" => "required",
            // "checkout_date_1" => "required",
            // "hotel_price_1" => "required",
            // "hotel_name_2" => "required",
            // "city_2" => "required",
            // "checkin_date_2" => "required",
            // "checkout_date_2" => "required",
            // "hotel_price_2" => "required",
        ], [
            "id_ta" => "ID TA tidak boleh kosong",
            "request_by" => "Request By tidak boleh kosong",
            "approve_by" => "Approve By tidak boleh kosong",
            "departement" => "Departement tidak boleh kosong",
            "purpose" => "Purpose tidak boleh kosong",
            "start_date" => "Start Date tidak boleh kosong",
            "end_date" => "End Date tidak boleh kosong",
            "status" => "Status tidak boleh kosong",
            // "bn_1" => "BN 1 tidak boleh kosong",
            // "bn_name_1" => "BN Name 1 tidak boleh kosong",
            // "departement_1" => "Departement 1 tidak boleh kosong",
            // "charge_1" => "Charge 1 tidak boleh kosong",
            // "passport_1" => "Passport 1 tidak boleh kosong",
            // "bn_2" => "BN 2 tidak boleh kosong",
            // "bn_name_2" => "BN Name 2 tidak boleh kosong",
            // "departement_2" => "Departement 2 tidak boleh kosong",
            // "charge_2" => "Charge 2 tidak boleh kosong",
            // "passport_2" => "Passport 2 tidak boleh kosong",
            // "bn_3" => "BN 3 tidak boleh kosong",
            // "bn_name_3" => "BN Name 3 tidak boleh kosong",
            // "departement_3" => "Departement 3 tidak boleh kosong",
            // "charge_3" => "Charge 3 tidak boleh kosong",
            // "passport_3" => "Passport 3 tidak boleh kosong",
            // "bn_4" => "BN 4 tidak boleh kosong",
            // "bn_name_4" => "BN Name 4 tidak boleh kosong",
            // "departement_4" => "Departement 4 tidak boleh kosong",
            // "charge_4" => "Charge 4 tidak boleh kosong",
            // "passport_4" => "Passport 4 tidak boleh kosong",
            // "aircraft_name" => "Aircraft Name tidak boleh kosong",
            // "total_airfare" => "Total Airfare tidak boleh kosong",
            // "hotel_name_1" => "Hotel Name 1 tidak boleh kosong",
            // "city_1" => "City 1 tidak boleh kosong",
            // "checkin_date_1" => "Checkin Date 1 tidak boleh kosong",
            // "checkout_date_1" => "Checkout Date 1 tidak boleh kosong",
            // "hotel_price_1" => "Hotel Price 1 tidak boleh kosong",
            // "hotel_name_2" => "Hotel Name 2 tidak boleh kosong",
            // "city_2" => "City 2 tidak boleh kosong",
            // "checkin_date_2" => "Checkin Date 2 tidak boleh kosong",
            // "checkout_date_2" => "Checkout Date 2 tidak boleh kosong",
            // "hotel_price_2" => "Hotel Price 2 tidak boleh kosong",
        ]);

        $travelAuthorization = new TravelAuthorization;
        $travelAuthorization->id_ta = $request->id_ta;
        $travelAuthorization->request_by = $request->request_by;
        $travelAuthorization->approve_by = $request->approve_by;
        $travelAuthorization->departement = $request->departement;
        $travelAuthorization->purpose = $request->purpose;
        $travelAuthorization->start_date = $request->start_date;
        $travelAuthorization->end_date = $request->end_date;
        $travelAuthorization->status = $request->status;
        $travelAuthorization->bn_1 = $request->bn_1 ?? null;
        $travelAuthorization->bn_name_1 = $request->bn_name_1 ?? null;
        $travelAuthorization->departement_1 = $request->departement_1 ?? null;
        $travelAuthorization->charge_1 = $request->charge_1 ?? null;
        $travelAuthorization->passport_1 = $request->passport_1 ?? null;
        $travelAuthorization->bn_price_1 = $request->bn_price_1 ?? null;
        $travelAuthorization->bn_2 = $request->bn_2 ?? null;
        $travelAuthorization->bn_name_2 = $request->bn_name_2 ?? null;
        $travelAuthorization->departement_2 = $request->departement_2 ?? null;
        $travelAuthorization->charge_2 = $request->charge_2 ?? null;
        $travelAuthorization->passport_2 = $request->passport_2 ?? null;
        $travelAuthorization->bn_price_2 = $request->bn_price_2 ?? null;
        $travelAuthorization->bn_3 = $request->bn_3 ?? null;
        $travelAuthorization->bn_name_3 = $request->bn_name_3 ?? null;
        $travelAuthorization->departement_3 = $request->departement_3 ?? null;
        $travelAuthorization->charge_3 = $request->charge_3 ?? null;
        $travelAuthorization->passport_3 = $request->passport_3 ?? null;
        $travelAuthorization->bn_price_3 = $request->bn_price_3 ?? null;
        $travelAuthorization->bn_4 = $request->bn_4 ?? null;
        $travelAuthorization->bn_name_4 = $request->bn_name_4 ?? null;
        $travelAuthorization->departement_4 = $request->departement_4 ?? null;
        $travelAuthorization->charge_4 = $request->charge_4 ?? null;
        $travelAuthorization->passport_4 = $request->passport_4 ?? null;
        $travelAuthorization->bn_price_4 = $request->bn_price_4 ?? null;
        $travelAuthorization->aircraft_name = $request->aircraft_name ?? null;
        $travelAuthorization->total_airfare = $request->total_airfare ?? null;
        $travelAuthorization->hotel_name_1 = $request->hotel_name_1 ?? null;
        $travelAuthorization->city_1 = $request->city_1 ?? null;
        $travelAuthorization->checkin_date_1 = $request->checkin_date_1 ?? null;
        $travelAuthorization->checkout_date_1 = $request->checkout_date_1 ?? null;
        $travelAuthorization->hotel_price_1 = $request->hotel_price_1 ?? null;
        $travelAuthorization->hotel_name_2 = $request->hotel_name_2 ?? null;
        $travelAuthorization->city_2 = $request->city_2 ?? null;
        $travelAuthorization->checkin_date_2 = $request->checkin_date_2 ?? null;
        $travelAuthorization->checkout_date_2 = $request->checkout_date_2 ?? null;
        $travelAuthorization->hotel_price_2 = $request->hotel_price_2 ?? null;
        $travelAuthorization->save();

        return redirect()->route('travel_authorizations.index')->with('success', 'Travel Authorization berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(TravelAuthorization $travelAuthorization)
    {
        return view('travel_authorization.show', compact('travelAuthorization'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TravelAuthorization $travelAuthorization)
    {
        return view('travel_authorization.edit', compact('travelAuthorization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TravelAuthorization $travelAuthorization)
    {
        $request->validate([
            "id_ta" => "required",
            "request_by" => "required",
            "approve_by" => "required",
            "departement" => "required",
            "purpose" => "required",
            "start_date" => "required",
            "end_date" => "required",
            "status" => "required",
            // "bn_1" => "required",
            // "bn_name_1" => "required",
            // "departement_1" => "required",
            // "charge_1" => "required",
            // "passport_1" => "required",
            // "bn_2" => "required",
            // "bn_name_2" => "required",
            // "departement_2" => "required",
            // "charge_2" => "required",
            // "passport_2" => "required",
            // "bn_3" => "required",
            // "bn_name_3" => "required",
            // "departement_3" => "required",
            // "charge_3" => "required",
            // "passport_3" => "required",
            // "bn_4" => "required",
            // "bn_name_4" => "required",
            // "departement_4" => "required",
            // "charge_4" => "required",
            // "passport_4" => "required",
            // "aircraft_name" => "required",
            // "total_airfare" => "required",
            // "hotel_name_1" => "required",
            // "city_1" => "required",
            // "checkin_date_1" => "required",
            // "checkout_date_1" => "required",
            // "hotel_price_1" => "required",
            // "hotel_name_2" => "required",
            // "city_2" => "required",
            // "checkin_date_2" => "required",
            // "checkout_date_2" => "required",
            // "hotel_price_2" => "required",
        ], [
            "id_ta" => "ID TA tidak boleh kosong",
            "request_by" => "Request By tidak boleh kosong",
            "approve_by" => "Approve By tidak boleh kosong",
            "departement" => "Departement tidak boleh kosong",
            "purpose" => "Purpose tidak boleh kosong",
            "start_date" => "Start Date tidak boleh kosong",
            "end_date" => "End Date tidak boleh kosong",
            "status" => "Status tidak boleh kosong",
            // "bn_1" => "BN 1 tidak boleh kosong",
            // "bn_name_1" => "BN Name 1 tidak boleh kosong",
            // "departement_1" => "Departement 1 tidak boleh kosong",
            // "charge_1" => "Charge 1 tidak boleh kosong",
            // "passport_1" => "Passport 1 tidak boleh kosong",
            // "bn_2" => "BN 2 tidak boleh kosong",
            // "bn_name_2" => "BN Name 2 tidak boleh kosong",
            // "departement_2" => "Departement 2 tidak boleh kosong",
            // "charge_2" => "Charge 2 tidak boleh kosong",
            // "passport_2" => "Passport 2 tidak boleh kosong",
            // "bn_3" => "BN 3 tidak boleh kosong",
            // "bn_name_3" => "BN Name 3 tidak boleh kosong",
            // "departement_3" => "Departement 3 tidak boleh kosong",
            // "charge_3" => "Charge 3 tidak boleh kosong",
            // "passport_3" => "Passport 3 tidak boleh kosong",
            // "bn_4" => "BN 4 tidak boleh kosong",
            // "bn_name_4" => "BN Name 4 tidak boleh kosong",
            // "departement_4" => "Departement 4 tidak boleh kosong",
            // "charge_4" => "Charge 4 tidak boleh kosong",
            // "passport_4" => "Passport 4 tidak boleh kosong",
            // "aircraft_name" => "Aircraft Name tidak boleh kosong",
            // "total_airfare" => "Total Airfare tidak boleh kosong",
            // "hotel_name_1" => "Hotel Name 1 tidak boleh kosong",
            // "city_1" => "City 1 tidak boleh kosong",
            // "checkin_date_1" => "Checkin Date 1 tidak boleh kosong",
            // "checkout_date_1" => "Checkout Date 1 tidak boleh kosong",
            // "hotel_price_1" => "Hotel Price 1 tidak boleh kosong",
            // "hotel_name_2" => "Hotel Name 2 tidak boleh kosong",
            // "city_2" => "City 2 tidak boleh kosong",
            // "checkin_date_2" => "Checkin Date 2 tidak boleh kosong",
            // "checkout_date_2" => "Checkout Date 2 tidak boleh kosong",
            // "hotel_price_2" => "Hotel Price 2 tidak boleh kosong",
        ]);

        $travelAuthorization->id_ta = $request->id_ta;
        $travelAuthorization->request_by = $request->request_by;
        $travelAuthorization->approve_by = $request->approve_by;
        $travelAuthorization->departement = $request->departement;
        $travelAuthorization->purpose = $request->purpose;
        $travelAuthorization->start_date = $request->start_date;
        $travelAuthorization->end_date = $request->end_date;
        $travelAuthorization->status = $request->status;
        $travelAuthorization->bn_1 = $request->bn_1 ?? null;
        $travelAuthorization->bn_name_1 = $request->bn_name_1 ?? null;
        $travelAuthorization->departement_1 = $request->departement_1 ?? null;
        $travelAuthorization->charge_1 = $request->charge_1 ?? null;
        $travelAuthorization->passport_1 = $request->passport_1 ?? null;
        $travelAuthorization->bn_price_1 = $request->bn_price_1 ?? null;
        $travelAuthorization->bn_2 = $request->bn_2 ?? null;
        $travelAuthorization->bn_name_2 = $request->bn_name_2 ?? null;
        $travelAuthorization->departement_2 = $request->departement_2 ?? null;
        $travelAuthorization->charge_2 = $request->charge_2 ?? null;
        $travelAuthorization->passport_2 = $request->passport_2 ?? null;
        $travelAuthorization->bn_price_2 = $request->bn_price_2 ?? null;
        $travelAuthorization->bn_3 = $request->bn_3 ?? null;
        $travelAuthorization->bn_name_3 = $request->bn_name_3 ?? null;
        $travelAuthorization->departement_3 = $request->departement_3 ?? null;
        $travelAuthorization->charge_3 = $request->charge_3 ?? null;
        $travelAuthorization->passport_3 = $request->passport_3 ?? null;
        $travelAuthorization->bn_price_3 = $request->bn_price_3 ?? null;
        $travelAuthorization->bn_4 = $request->bn_4 ?? null;
        $travelAuthorization->bn_name_4 = $request->bn_name_4 ?? null;
        $travelAuthorization->departement_4 = $request->departement_4 ?? null;
        $travelAuthorization->charge_4 = $request->charge_4 ?? null;
        $travelAuthorization->passport_4 = $request->passport_4 ?? null;
        $travelAuthorization->bn_price_4 = $request->bn_price_4 ?? null;
        $travelAuthorization->aircraft_name = $request->aircraft_name ?? null;
        $travelAuthorization->total_airfare = $request->total_airfare ?? null;
        $travelAuthorization->hotel_name_1 = $request->hotel_name_1 ?? null;
        $travelAuthorization->city_1 = $request->city_1 ?? null;
        $travelAuthorization->checkin_date_1 = $request->checkin_date_1 ?? null;
        $travelAuthorization->checkout_date_1 = $request->checkout_date_1 ?? null;
        $travelAuthorization->hotel_price_1 = $request->hotel_price_1 ?? null;
        $travelAuthorization->hotel_name_2 = $request->hotel_name_2 ?? null;
        $travelAuthorization->city_2 = $request->city_2 ?? null;
        $travelAuthorization->checkin_date_2 = $request->checkin_date_2 ?? null;
        $travelAuthorization->checkout_date_2 = $request->checkout_date_2 ?? null;
        $travelAuthorization->hotel_price_2 = $request->hotel_price_2 ?? null;
        $travelAuthorization->update();

        return redirect()->route('travel_authorizations.index')->with('success', 'Travel Authorization berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TravelAuthorization $travelAuthorization)
    {
        $travelAuthorization->delete();
        return redirect()->route('travel_authorizations.index')->with('success', 'Travel Authorization berhasil dihapus');
    }

    public function print($id)
    {
        $travelAuthorization = TravelAuthorization::findOrFail($id);
        $pdf = PDF::loadView('print.travel_authorization', compact('travelAuthorization'));
        return $pdf->stream();
    }

    public function printAll()
    {
        $travel_authorizations = TravelAuthorization::all();
        $pdf = PDF::loadView('print.travel_authorizations', compact('travel_authorizations'));
        $pdf->setPaper('F4', 'landscape');
        return $pdf->stream();
    }

    public function export()
    {
        return Excel::download(new TravelAuthorizationExport, 'travel authorizations.xlsx');
    }
}
