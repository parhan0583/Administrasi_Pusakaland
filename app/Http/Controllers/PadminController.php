<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PadminController extends Controller
{
    public function index()
    {
        return view('admin/Padmin');
    }
}
