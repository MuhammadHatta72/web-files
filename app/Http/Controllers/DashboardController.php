<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ArsipTravel;
use App\Models\ArsipExpenReport;
use App\Models\ArsipAdvance;

class DashboardController extends Controller
{
    public function admin()
    {
        $data = [
            'count_arsip_travel' => ArsipTravel::count(),
            'count_arsip_expen_report' => ArsipExpenReport::count(),
            'count_arsip_advance' => ArsipAdvance::count(),
        ];
        return view('dashboard.admin', $data);
    }
}
