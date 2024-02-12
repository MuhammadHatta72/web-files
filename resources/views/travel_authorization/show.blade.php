@extends('layouts.app')

@section('title', 'Detail Travel Authorization - Paiton Operation & Maintenance Indonesia')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Travel Authorization</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Travel Authorization</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="mb-2">
                                        <label for="id_ta" class="form-label"><b>ID TA</b></label>
                                        <p>{{ $travelAuthorization->id_ta }}</p>
                                    </div>
                                    <div class="mb-2">
                                        <label for="request_by" class="form-label"><b>Request By</b></label>
                                        <p>{{ $travelAuthorization->request_by }}</p>
                                    </div>
                                    <div class="mb-2">
                                        <label for="approve_by" class="form-label"><b>Approve By</b></label>
                                        <p>{{ $travelAuthorization->approve_by }}</p>
                                    </div>
                                    <div class="mb-2">
                                        <label for="departement" class="form-label"><b>Departement</b></label>
                                        <p>{{ $travelAuthorization->departement }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="mb-2">
                                        <label for="purpose" class="form-label"><b>Purpose</b></label>
                                        <p>{{ $travelAuthorization->purpose }}</p>
                                    </div>
                                    <div class="mb-2">
                                        <label for="start_date" class="form-label"><b>Start Date</b></label>
                                        <p>{{ $travelAuthorization->start_date }}</p>
                                    </div>
                                    <div class="mb-2">
                                        <label for="end_date" class="form-label"><b>End Date</b></label>
                                        <p>{{ $travelAuthorization->end_date }}</p>
                                    </div>
                                    <div class="mb-2">
                                        <label for="status" class="form-label"><b>Status</b></label>
                                        <p>{{ $travelAuthorization->status }}</p>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label mt-2"><b>Data Traveller</b></label>
                                    <div class="row">
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>BN 1</b></label>
                                            <p>{{ $travelAuthorization->bn_1 }}</p>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="bn" class="form-label"><b>Name 1</b></label>
                                            <p>{{ $travelAuthorization->bn_name_1 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Departement 1</b></label>
                                            <p>{{ $travelAuthorization->departement_1 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Charge To 1</b></label>
                                            <p>{{ $travelAuthorization->charge_1 }}</p>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="bn" class="form-label"><b>Passport 1</b></label>
                                            <p>{{ $travelAuthorization->passport_1 }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>BN 2</b></label>
                                            <p>{{ $travelAuthorization->bn_2 }}</p>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="bn" class="form-label"><b>Name 2</b></label>
                                            <p>{{ $travelAuthorization->bn_name_2 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Departement 2</b></label>
                                            <p>{{ $travelAuthorization->departement_2 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Charge To 2</b></label>
                                            <p>{{ $travelAuthorization->charge_2 }}</p>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="bn" class="form-label"><b>Passport 2</b></label>
                                            <p>{{ $travelAuthorization->passport_2 }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>BN 3</b></label>
                                            <p>{{ $travelAuthorization->bn_3 }}</p>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="bn" class="form-label"><b>Name 3</b></label>
                                            <p>{{ $travelAuthorization->bn_name_3 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Departement 3</b></label>
                                            <p>{{ $travelAuthorization->departement_3 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Charge To 3</b></label>
                                            <p>{{ $travelAuthorization->charge_3 }}</p>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="bn" class="form-label"><b>Passport 3</b></label>
                                            <p>{{ $travelAuthorization->passport_3 }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>BN 4</b></label>
                                            <p>{{ $travelAuthorization->bn_4 }}</p>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="bn" class="form-label"><b>Name 4</b></label>
                                            <p>{{ $travelAuthorization->bn_name_4 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Departement 4</b></label>
                                            <p>{{ $travelAuthorization->departement_4 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Charge To 4</b></label>
                                            <p>{{ $travelAuthorization->charge_4 }}</p>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="bn" class="form-label"><b>Passport 4</b></label>
                                            <p>{{ $travelAuthorization->passport_4 }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label mt-2"><b>Data Flight</b></label>
                                    <div class="row">
                                        <div class="col-md-6 mb-1">
                                            <label for="bn" class="form-label"><b>Aircraft Name</b></label>
                                            <p>{{ $travelAuthorization->aircraft_name }}</p>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="bn" class="form-label"><b>Total Airfare</b></label>
                                            <p>Rp. {{ number_format($travelAuthorization->total_airfare, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label mt-2"><b>Data Hotel</b></label>
                                    <div class="row">
                                        <div class="col-md-3 mb-1">
                                            <label for="bn" class="form-label"><b>Hotel Name</b></label>
                                            <p>{{ $travelAuthorization->hotel_name_1 }}</p>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="bn" class="form-label"><b>City</b></label>
                                            <p>{{ $travelAuthorization->city_1 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Checkin Date</b></label>
                                            <p>{{ $travelAuthorization->checkin_date_1 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Checkout Date</b></label>
                                            <p>{{ $travelAuthorization->checkout_date_1 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Hotel Price</b></label>
                                            <p>Rp. {{ number_format($travelAuthorization->hotel_price_1, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 mb-1">
                                            <label for="bn" class="form-label"><b>Hotel Name</b></label>
                                            <p>{{ $travelAuthorization->hotel_name_2 }}</p>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="bn" class="form-label"><b>City</b></label>
                                            <p>{{ $travelAuthorization->city_2 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Checkin Date</b></label>
                                            <p>{{ $travelAuthorization->checkin_date_2 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Checkout Date</b></label>
                                            <p>{{ $travelAuthorization->checkout_date_2 }}</p>
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <label for="bn" class="form-label"><b>Hotel Price</b></label>
                                            <p>Rp. {{ number_format($travelAuthorization->hotel_price_2, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <div class="mb-2">
                                        <label for="purpose" class="form-label"><b>Total Price</b></label>
                                        <p>Rp. {{ number_format($travelAuthorization->total_airfare + $travelAuthorization->hotel_price_1 + $travelAuthorization->hotel_price_2, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('travel_authorizations.index') }}" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
