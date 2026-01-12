<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShivsagarjiController extends Controller
{
	public function index()
    {			
        return view('user.aacharya.shivsagarji.index');
    } 
}
