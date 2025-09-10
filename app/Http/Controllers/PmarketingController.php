<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PmarketingController extends Controller
{
    public function index()
    {
        return view('marketing/Pmarketing');
    }
}
