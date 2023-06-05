<?php

namespace App\Http\Controllers;

use App\Models\AboutDepartment;
use Illuminate\Http\Request;

class AboutDepartmentController extends Controller
{
    public function index()
    {
        return view('caf.index'); 
    }

    public function nir()
    {
        return view('caf.nir.index'); 
    }

    public function ymn()
    {
        return view('caf.ymn.index'); 
    }

    public function public()
    {
        return view('caf.nir.podras.public'); 
    }

    public function desert()
    {
        return view('caf.nir.podras.desert'); 
    }

    public function study()
    {
        return view('caf.nir.podras.study'); 
    }

    public function qualic()
    {
        return view('caf.nir.podras.qualic'); 
    }

    public function organ()
    {
        return view('caf.ymn.podras.organ'); 
    }

    public function prov()
    {
        return view('caf.ymn.podras.prov'); 
    }

    public function studys()
    {
        return view('caf.ymn.podras.study'); 
    }

    public function vosp()
    {
        return view('caf.ymn.podras.vosp'); 
    }

    public function nauch()
    {
        return view('caf.ymn.podras.nauch'); 
    }

    public function libr()
    {
        return view('caf.ymn.podras.libr'); 
    }

    public function sost()
    {
        return view('caf.ymn.podras.sost'); 
    }

    public function pps()
    {
        return view('caf.ymn.podras.pps'); 
    }

    public function work()
    {
        return view('caf.ymn.podras.work'); 
    }
}
