<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {	
		
        return view('user.about_us.about_us');
    } 
      
    public function create()
    {
        
    }

    public function store(Request $request)
    {
		
    }

	public function show($id)
    {	
    }

    public function edit($id)
    {	
				
    }

    public function update(Request $request, $id)
    {
       
    	
	}
    public function destroy(Request $request)
    {
		
	}
}
