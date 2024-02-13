@extends('layouts.app')

@section('title', 'Travel Authorization - Paiton Operation & Maintenance Indonesia')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Travel Authorization</h1>
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
                            <div class="float-left mb-3">
                                <a class="btn btn-success border-0 text-white" href="{{ route('export_travel_authorization') }}">
                                    <i class="fas fa-print"></i>
                                    Excel
                                </a>
                                <a class="btn btn-danger border-0 text-white" href="{{ route('print_all_travel_authorization') }}">
                                    <i class="fas fa-print"></i>
                                    PDF
                                </a>
                            </div>
                            <div class="float-right mb-3">
                                <a class="btn btn-primary border-0 text-white createBtn" href="{{ route('travel_authorizations.create') }}">
                                    <i class="fas fa-plus"></i>
                                    Tambah Travel Authorization
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped" id="tablePaging">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">ID TA</th>
                                            <th class="text-center">Request By</th>
                                            <th class="text-center">Approve By</th>
                                            <th class="text-center">Departement</th>
                                            <th class="text-center">Purpose/Event</th>
                                            <th class="text-center">Start Date</th>
                                            <th class="text-center">End Date</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($travel_authorizations as $travel_authorization)
                                            <tr class="text-center">
                                                <td>{{ $travel_authorization->id_ta }}</td>
                                                <td>{{ $travel_authorization->request_by }}</td>
                                                <td>{{ $travel_authorization->approve_by }}</td>
                                                <td>{{ $travel_authorization->departement }}</td>
                                                <td>{{ $travel_authorization->purpose }}</td>
                                                <td>{{ $travel_authorization->start_date }}</td>
                                                <td>{{ $travel_authorization->end_date }}</td>
                                                <td>
                                                    <span class="badge badge-warning">{{ $travel_authorization->status }}</span>
                                                </td>
                                                <td>
                                                    Rp. {{ number_format($travel_authorization->bn_price_1 + $travel_authorization->bn_price_2 + $travel_authorization->bn_price_3 + $travel_authorization->bn_price_4 + $travel_authorization->total_airfare + $travel_authorization->hotel_price_1 + $travel_authorization->hotel_price_2, 0, ',', '.') }}
                                                </td>
                                                <td class="d-flex justify-content-center gap-1 align-items-center">
                                                    <a class="btn btn-warning text-white showBtn"
                                                        href="{{ route('travel_authorizations.show', $travel_authorization->id) }}"
                                                        data-id="{{ $travel_authorization->id }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a class="btn btn-primary text-white editBtn"
                                                        href="{{ route('travel_authorizations.edit', $travel_authorization->id) }}">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <a class="btn btn-info text-white showBtn"
                                                        href="{{ route('print_travel_authorization', $travel_authorization->id) }}"
                                                        data-id="{{ $travel_authorization->id }}" target="_blank">
                                                        <i class="fas fa-print"></i>
                                                    </a>
                                                    <form action="{{ route('travel_authorizations.destroy', $travel_authorization->id) }}" method="post"
                                                        onsubmit="deleteData(event)">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        //function confirm delete image with Swal alert when submit form
        function deleteData(event) {
            event.preventDefault(); // will stop the form submission
            var form = event.target; // changed to event.target to get the form element

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // submitting the form when user press yes
                }
            })
        }
    </script>

@endsection
