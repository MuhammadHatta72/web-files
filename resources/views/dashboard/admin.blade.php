@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Selamat Datang! {{ auth()->user()->admin->nama }}</h1>
        </div>

        @if (session('password_warning'))
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Peringatan',
                    text: 'Silahkan ubah password anda terlebih dahulu',
                    showCancelButton: true,
                    confirmButtonText: 'Ubah Password Sekarang',
                    cancelButtonText: 'Ubah Nanti',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{ route('profile.edit') }}';
                    }
                });
            </script>
        @endif

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12 mb-4 shadow p-3">
                    <img src="{{ asset('assets/landing/img/carousel-1.jpg') }}" alt="carousel" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-3 mb-4">
                    <div class="card bg-warning text-white">
                        <div class="card-body py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div>
                                        <h5>Arsip Travel</h5>
                                    </div>
                                    <div class="h4 font-weight-600 text-white">{{ $count_arsip_travel }}</div>
                                </div>
                                <i class="fas fa-envelope-open-text" style="font-size:xx-large"></i>
                            </div>
                        </div>
                        <div class="card-footer py-2 d-flex align-items-center justify-content-between small shadow-dark">
                            <a class="text-white stretched-link" href="{{ route('arsip_travels.index') }}">
                                <h6>Detail</h6>
                            </a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-3 mb-4">
                    <div class="card bg-info text-white">
                        <div class="card-body py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div>
                                        <h5>Arsip Expen Report</h5>
                                    </div>
                                    <div class="h4 font-weight-600 text-white">{{ $count_arsip_expen_report }}</div>
                                </div>
                                <i class="fas fa-envelope-open-text" style="font-size:xx-large"></i>
                            </div>
                        </div>
                        <div class="card-footer py-2 d-flex align-items-center justify-content-between small shadow-dark">
                            <a class="text-white stretched-link" href="{{ route('arsip_expen_reports.index') }}">
                                <h6>Detail</h6>
                            </a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-3 mb-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div>
                                        <h5>Arsip Advance</h5>
                                    </div>
                                    <div class="h4 font-weight-600 text-white">{{ $count_arsip_advance }}</div>
                                </div>
                                <i class="fas fa-envelope-open-text" style="font-size:xx-large"></i>
                            </div>
                        </div>
                        <div class="card-footer py-2 d-flex align-items-center justify-content-between small shadow-dark">
                            <a class="text-white stretched-link" href="{{ route('arsip_advances.index') }}">
                                <h6>Detail</h6>
                            </a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-3 mb-4">
                    <div class="card bg-success text-white">
                        <div class="card-body py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div>
                                        <h5>Travel Authorization</h5>
                                    </div>
                                    <div class="h4 font-weight-600 text-white">{{ $count_travel_authorization }}</div>
                                </div>
                                <i class="fas fa-envelope-open-text" style="font-size:xx-large"></i>
                            </div>
                        </div>
                        <div class="card-footer py-2 d-flex align-items-center justify-content-between small shadow-dark">
                            <a class="text-white stretched-link" href="{{ route('travel_authorizations.index') }}">
                                <h6>Detail</h6>
                            </a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
