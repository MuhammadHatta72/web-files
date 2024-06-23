<?php

namespace App\Http\Controllers;

use App\Models\ArsipTravel;
use App\Models\ArsipExpenReport;
use App\Models\ArsipAdvance;
use App\Models\TravelAuthorization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        if (Hash::check('password', auth()->user()->password)) {
            session()->flash('password_warning', true);
        }

        $data = [
            'count_arsip_travel' => ArsipTravel::count(),
            'count_arsip_expen_report' => ArsipExpenReport::count(),
            'count_arsip_advance' => ArsipAdvance::count(),
            'count_travel_authorization' => TravelAuthorization::count(),
        ];

        return view('dashboard.admin', $data);
    }
}
