<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SuvicharImage;
use App\Models\PravachanVideo;
use App\Models\Gallery;
use App\Models\Sahitya;

class DashboardController extends Controller
{
    public function index()
	{	
		$data['suvichar_image'] = SuvicharImage::count();
		$data['total_video'] = PravachanVideo::count();
		$data['gallery'] = Gallery::count();
		$data['sahitya'] = Sahitya::count();

	//	return view('admin.dashboard.dashboard');
		return view('admin.dashboard.dashboard', $data);
	}
}