<?php

namespace App\Http\Controllers\Banyuwangi\OneDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenjanganTabController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.paket.tour-banyuwangi.1D.Menjangan&Tabuhan');
    }
}