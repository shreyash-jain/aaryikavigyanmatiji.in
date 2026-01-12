<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactUsController extends Controller
{
	public function index()
    {	
		
        return view('user.contact_us.contact_us');
    } 
      
    public function create()
    {
        
    }

    public function store(Request $request)
    {
		Contact::create($request->all());
  
		return response()->json(["error" => false, "message" =>"Thank you for contact us. we will contact you shortly."]);

  }

	
}
