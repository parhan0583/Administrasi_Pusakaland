<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PadministrasiController extends Controller
{
    public function index()
    {
        return view('/administrasi/Padministrasi');
    }
}
