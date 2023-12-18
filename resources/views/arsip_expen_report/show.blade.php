@extends('layouts.app')

@section('title', 'Detail Arsip Expen Report - Paiton Operation & Maintenance Indonesia')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Arsip Expen Report</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Arsip Expen Report</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    @if ($extension_file == 'jpg' || $extension_file == 'jpeg' || $extension_file == 'png')
                                        <img src="{{ asset('storage/my_files/' . $arsip_expen_report->file) }}" width="400px"
                                            alt="{{ $arsip_expen_report->name }}">
                                    @elseif ($extension_file == 'pdf')
                                        <iframe src="{{ asset('storage/my_files/' . $arsip_expen_report->file) }}"
                                            width="100%" height="600px"></iframe>
                                    @else
                                    <div class="d-flex gap-2">
                                        <h4 class="text-left">File tidak dapat ditampilkan, silahkan download untuk
                                            melihatnya</h4>
                                        <a href="{{ asset('storage/my_files/' . $arsip_expen_report->file) }}"
                                            class="btn btn-primary">Download</a>
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="title" class="form-label"><b>Nama file</b></label>
                                    <p>{{ $arsip_expen_report->title }}</p>
                                </div>
                                <div>
                                    <a href="{{ route('arsip_expen_reports.index') }}" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
