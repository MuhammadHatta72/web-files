@extends('layouts.app')

@section('title', 'Edit Travel Authorization - Paiton Operation & Maintenance Indonesia')
@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Travel Authorization</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Travel Authorization</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" id="form-id" action="{{ route('travel_authorizations.update', $travelAuthorization->id) }}">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="id_ta" class="form-label">ID TA<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('id_ta') is-invalid @enderror"
                                            id="id_ta" name="id_ta" value="{{ $travelAuthorization->id_ta }}" readonly/>
                                        @error('id_ta')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="request_by" class="form-label">Request By<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('request_by') is-invalid @enderror"
                                            id="request_by" name="request_by" value="{{ $travelAuthorization->request_by }}" />
                                        @error('request_by')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="approve_by" class="form-label">Aprroved By<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('approve_by') is-invalid @enderror"
                                            id="approve_by" name="approve_by" value="{{ $travelAuthorization->approve_by }}" />
                                        @error('approve_by')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="departement" class="form-label">Departement<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('departement') is-invalid @enderror"
                                            id="departement" name="departement" value="{{ $travelAuthorization->departement }}" />
                                        @error('departement')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="purpose" class="form-label">Purpose/Event<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('purpose') is-invalid @enderror"
                                            id="purpose" name="purpose" value="{{ $travelAuthorization->purpose }}" />
                                        @error('purpose')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="start_date" class="form-label">Start Date<span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                                            id="start_date" name="start_date" value="{{ $travelAuthorization->start_date }}" />
                                        @error('start_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="end_date" class="form-label">End Date<span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control @error('end_date') is-invalid @enderror"
                                            id="end_date" name="end_date" value="{{ $travelAuthorization->end_date }}" />
                                        @error('end_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="status" class="form-label">Status<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('status') is-invalid @enderror"
                                            id="status" name="status" value="{{ $travelAuthorization->status }}" />
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Data Traveller --}}
                                <div class="row">
                                    <div class="col-md-1 mb-3">
                                        <label for="bn_1" class="form-label">BN</label>
                                        <input type="text" class="form-control @error('bn_1') is-invalid @enderror"
                                            id="bn_1" name="bn_1" value="{{ $travelAuthorization->bn_1 }}" />
                                        @error('bn_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="bn_name_1" class="form-label">Nama BN</label>
                                        <input type="text" class="form-control @error('bn_name_1') is-invalid @enderror"
                                            id="bn_name_1" name="bn_name_1" value="{{ $travelAuthorization->bn_name_1 }}" />
                                        @error('bn_name_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="departement_1" class="form-label">Departement</label>
                                        <input type="text" class="form-control @error('departement_1') is-invalid @enderror"
                                            id="departement_1" name="departement_1" value="{{ $travelAuthorization->departement_1 }}" />
                                        @error('departement_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="charge_1" class="form-label">Charge To</label>
                                        <input type="text" class="form-control @error('charge_1') is-invalid @enderror"
                                            id="charge_1" name="charge_1" value="{{ $travelAuthorization->charge_1 }}" />
                                        @error('charge_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="passport_1" class="form-label">Passport</label>
                                        <input type="text" class="form-control @error('passport_1') is-invalid @enderror"
                                            id="passport_1" name="passport_1" value="{{ $travelAuthorization->passport_1 }}" />
                                        @error('passport_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="bn_price_1" class="form-label">Total BN</label>
                                        <input type="number" class="form-control @error('bn_price_1') is-invalid @enderror"
                                            id="bn_price_1" name="bn_price_1" value="{{ $travelAuthorization->bn_price_1 }}" />
                                        @error('bn_price_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 mb-3">
                                        <label for="bn_2" class="form-label">BN</label>
                                        <input type="text" class="form-control @error('bn_2') is-invalid @enderror"
                                            id="bn_2" name="bn_2" value="{{ $travelAuthorization->bn_2 }}" />
                                        @error('bn_2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="bn_name_2" class="form-label">Nama BN</label>
                                        <input type="text" class="form-control @error('bn_name_2') is-invalid @enderror"
                                            id="bn_name_2" name="bn_name_2" value="{{ $travelAuthorization->bn_name_2 }}" />
                                        @error('bn_name_2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="departement_2" class="form-label">Departement</label>
                                        <input type="text" class="form-control @error('departement_2') is-invalid @enderror"
                                            id="departement_2" name="departement_2" value="{{ $travelAuthorization->departement_2 }}" />
                                        @error('departement_2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="charge_2" class="form-label">Charge To</label>
                                        <input type="text" class="form-control @error('charge_2') is-invalid @enderror"
                                            id="charge_2" name="charge_2" value="{{ $travelAuthorization->charge_2 }}" />
                                        @error('charge_2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="passport_2" class="form-label">Passport</label>
                                        <input type="text" class="form-control @error('passport_2') is-invalid @enderror"
                                            id="passport_2" name="passport_2" value="{{ $travelAuthorization->passport_2 }}" />
                                        @error('passport_2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="bn_price_2" class="form-label">Total BN</label>
                                        <input type="number" class="form-control @error('bn_price_2') is-invalid @enderror"
                                            id="bn_price_2" name="bn_price_2" value="{{ $travelAuthorization->bn_price_2 }}" />
                                        @error('bn_price_2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 mb-3">
                                        <label for="bn_3" class="form-label">BN</label>
                                        <input type="text" class="form-control @error('bn_3') is-invalid @enderror"
                                            id="bn_3" name="bn_3" value="{{ $travelAuthorization->bn_3 }}" />
                                        @error('bn_3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="bn_name_3" class="form-label">Nama BN</label>
                                        <input type="text" class="form-control @error('bn_name_3') is-invalid @enderror"
                                            id="bn_name_3" name="bn_name_3" value="{{ $travelAuthorization->bn_name_3 }}" />
                                        @error('bn_name_3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="departement_3" class="form-label">Departement</label>
                                        <input type="text" class="form-control @error('departement_3') is-invalid @enderror"
                                            id="departement_3" name="departement_3" value="{{ $travelAuthorization->departement_3 }}" />
                                        @error('departement_3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="charge_3" class="form-label">Charge To</label>
                                        <input type="text" class="form-control @error('charge_3') is-invalid @enderror"
                                            id="charge_3" name="charge_3" value="{{ $travelAuthorization->charge_3 }}" />
                                        @error('charge_3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="passport_3" class="form-label">Passport</label>
                                        <input type="text" class="form-control @error('passport_3') is-invalid @enderror"
                                            id="passport_3" name="passport_3" value="{{ $travelAuthorization->passport_3 }}" />
                                        @error('passport_3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="bn_price_3" class="form-label">Total BN</label>
                                        <input type="number" class="form-control @error('bn_price_3') is-invalid @enderror"
                                            id="bn_price_3" name="bn_price_3" value="{{ $travelAuthorization->bn_price_3 }}" />
                                        @error('bn_price_3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 mb-3">
                                        <label for="bn_4" class="form-label">BN</label>
                                        <input type="text" class="form-control @error('bn_4') is-invalid @enderror"
                                            id="bn_4" name="bn_4" value="{{ $travelAuthorization->bn_4 }}" />
                                        @error('bn_4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="bn_name_4" class="form-label">Nama BN</label>
                                        <input type="text" class="form-control @error('bn_name_4') is-invalid @enderror"
                                            id="bn_name_4" name="bn_name_4" value="{{ $travelAuthorization->bn_name_4 }}" />
                                        @error('bn_name_4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="departement_4" class="form-label">Departement</label>
                                        <input type="text" class="form-control @error('departement_4') is-invalid @enderror"
                                            id="departement_4" name="departement_4" value="{{ $travelAuthorization->departement_4 }}" />
                                        @error('departement_4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="charge_4" class="form-label">Charge To</label>
                                        <input type="text" class="form-control @error('charge_4') is-invalid @enderror"
                                            id="charge_4" name="charge_4" value="{{ $travelAuthorization->charge_4 }}" />
                                        @error('charge_4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="passport_4" class="form-label">Passport</label>
                                        <input type="text" class="form-control @error('passport_4') is-invalid @enderror"
                                            id="passport_4" name="passport_4" value="{{ $travelAuthorization->passport_4 }}" />
                                        @error('passport_4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="bn_price_4" class="form-label">Total BN</label>
                                        <input type="number" class="form-control @error('bn_price_4') is-invalid @enderror"
                                            id="bn_price_4" name="bn_price_4" value="{{ $travelAuthorization->bn_price_4 }}" />
                                        @error('bn_price_4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Data Flight --}}
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="aircraft_name" class="form-label">Aircraft Name</label>
                                        <input type="text" class="form-control @error('aircraft_name') is-invalid @enderror"
                                            id="aircraft_name" name="aircraft_name" value="{{ $travelAuthorization->aircraft_name }}" />
                                        @error('aircraft_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="total_airfare" class="form-label">Total Airfare</label>
                                        <input type="number" class="form-control @error('total_airfare') is-invalid @enderror"
                                            id="total_airfare" name="total_airfare" value="{{ $travelAuthorization->total_airfare }}" />
                                        @error('total_airfare')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Data Hotel --}}
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="hotel_name_1" class="form-label">Hotel Name</label>
                                        <input type="text" class="form-control @error('hotel_name_1') is-invalid @enderror"
                                            id="hotel_name_1" name="hotel_name_1" value="{{ $travelAuthorization->hotel_name_1 }}" />
                                        @error('hotel_name_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="city_1" class="form-label">City</label>
                                        <input type="text" class="form-control @error('city_1') is-invalid @enderror"
                                            id="city_1" name="city_1" value="{{ $travelAuthorization->city_1 }}" />
                                        @error('city_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="checkin_date_1" class="form-label">Checkin Date</label>
                                        <input type="date" class="form-control @error('checkin_date_1') is-invalid @enderror"
                                            id="checkin_date_1" name="checkin_date_1" value="{{ $travelAuthorization->checkin_date_1 }}" />
                                        @error('checkin_date_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="checkout_date_1" class="form-label">Checkout Date</label>
                                        <input type="date" class="form-control @error('checkout_date_1') is-invalid @enderror"
                                            id="checkout_date_1" name="checkout_date_1" value="{{ $travelAuthorization->checkout_date_1 }}" />
                                        @error('checkout_date_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="hotel_price_1" class="form-label">Hotel Price</label>
                                        <input type="number" class="form-control @error('hotel_price_1') is-invalid @enderror"
                                            id="hotel_price_1" name="hotel_price_1" value="{{ $travelAuthorization->hotel_price_1 }}" />
                                        @error('hotel_price_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="hotel_name_2" class="form-label">Hotel Name</label>
                                        <input type="text" class="form-control @error('hotel_name_2') is-invalid @enderror"
                                            id="hotel_name_2" name="hotel_name_2" value="{{ $travelAuthorization->hotel_name_2 }}" />
                                        @error('hotel_name_2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="city_2" class="form-label">City</label>
                                        <input type="text" class="form-control @error('city_2') is-invalid @enderror"
                                            id="city_2" name="city_2" value="{{ $travelAuthorization->city_2 }}" />
                                        @error('city_2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="checkin_date_2" class="form-label">Checkin Date</label>
                                        <input type="date" class="form-control @error('checkin_date_2') is-invalid @enderror"
                                            id="checkin_date_2" name="checkin_date_2" value="{{ $travelAuthorization->checkin_date_2 }}" />
                                        @error('checkin_date_2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="checkout_date_2" class="form-label">Checkout Date</label>
                                        <input type="date" class="form-control @error('checkout_date_2') is-invalid @enderror"
                                            id="checkout_date_2" name="checkout_date_2" value="{{ $travelAuthorization->checkout_date_2 }}" />
                                        @error('checkout_date_2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="hotel_price_2" class="form-label">Hotel Price</label>
                                        <input type="number" class="form-control @error('hotel_price_2') is-invalid @enderror"
                                            id="hotel_price_2" name="hotel_price_2" value="{{ $travelAuthorization->hotel_price_2 }}" />
                                        @error('hotel_price_2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <a href="{{ route('travel_authorizations.index') }}" class="btn btn-warning">Kembali</a>
                                <button type="submit" class="btn btn-success">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
