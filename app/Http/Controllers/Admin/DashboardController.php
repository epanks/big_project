<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Paket_data;
use App\Balai_data;

class DashboardController extends Controller
{
    public function index()
    {
        $paket=Paket_data::count();
        $pagu=Paket_data::sum('pagurmp');
        $balai=Balai_data::count();
        //dd($paket);
        return view('admin.dashboard',compact('paket','balai','pagu'));
    }
}
