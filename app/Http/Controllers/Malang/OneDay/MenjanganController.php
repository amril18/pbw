<?php

namespace App\Http\Controllers\Malang\OneDay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
class MenjanganController extends Controller
{
    public function index(Request $request){


        $testimonials = Testimonial::all();
        return view('pages.paket.tour-malang.1D.menjangan',[
            'testimonials' => $testimonials
        ]);
    }
}
