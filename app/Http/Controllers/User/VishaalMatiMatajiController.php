<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VishaalMatiMatajiController extends Controller
{
    public function index()
    {			
        return view('user.aaryika_maa.vishaalmatimataji.index');
    } 
}
