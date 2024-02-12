@extends('layouts.sidebar');

@section('sidebar')
    @parent
    {{-- <li class="nav-item dropdown {{ request()->is('**', '**') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown">
            <i class="fas fa-home"></i><span>Home</span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="">Tata Nlai</a>
            </li>
            <li>
                <a class="nav-link" href="">Struktur Organisasi</a>
            </li>
        </ul>
    </li> --}}
    <li class="nav-item {{ request()->is('*arsip_travels*') ? 'active' : '' }}">
        <a href="{{ route('arsip_travels.index') }}" class="nav-link">
            <i class="fas fa-file"></i><span>Arsip Travel</span>
        </a>
    </li>
    <li class="nav-item {{ request()->is('*arsip_expen_reports*') ? 'active' : '' }}">
        <a href="{{ route('arsip_expen_reports.index') }}" class="nav-link">
            <i class="fas fa-file"></i><span>Arsip Expen Report</span>
        </a>
    </li>
    <li class="nav-item {{ request()->is('*arsip_advances*') ? 'active' : '' }}">
        <a href="{{ route('arsip_advances.index') }}" class="nav-link">
            <i class="fas fa-file"></i><span>Arsip Advance</span>
        </a>
    </li>
    <li class="nav-item {{ request()->is('*travel_authorizations*') ? 'active' : '' }}">
        <a href="{{ route('travel_authorizations.index') }}" class="nav-link">
            <i class="fas fa-file"></i><span>Travel Authorization</span>
        </a>
    </li>
@endsection
