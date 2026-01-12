<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuvicharImage;
use App\Models\HomePage;
use App\Models\PravachanVideo;
use App\Models\Gallery;
use App\Models\Sahitya;
use App\Models\Event;
use App\Models\ViewCount;
use App\Models\OshadhiManjoosha;
use App\Models\RanoliRatnakar;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index()
    {	
		$home_data = HomePage::latest()->first();
		$data = PravachanVideo::where('status', 1)->orderBy('order', 'asc')->latest()->limit(3)->get();
		$ranoli_ratnakar = RanoliRatnakar::where('status', 1)->orderBy('order', 'asc')->latest()->limit(5)->get();
		$oshadhi_data = OshadhiManjoosha::where('status', 1)->where('show_home', 1)->latest()->first();
		$gallery_data = Gallery::where('status', 1)->where('is_new', 1)->orderBy('order', 'asc')->latest()->limit(3)->get();
		$sahitya_data = Sahitya::where('status', 1)->where('show_home', 1)->orderBy('orders', 'asc')->get();
		$suvichar_image = SuvicharImage::where('type', 1)->where('status', 1)->where('show_home', 1)->orderBy('orders', 'asc')->get();
		$sanskar_manjusha = SuvicharImage::where('type', 2)->where('status', 1)->where('show_home', 1)->orderBy('orders', 'asc')->get();
		$todayDate = Carbon::today()->format('Y-m-d');
		$events = Event::whereDate('date', $todayDate)->get();
		 ;
        return view('user.home.home',compact('sanskar_manjusha','suvichar_image','home_data','data','gallery_data','sahitya_data','oshadhi_data','events','ranoli_ratnakar'));
    } 
      
    public function getAllSahitya(Request $request)
		{
			$search =  request()->input('search'); 
			$query = Sahitya::where('status',1);
			if (!empty($search)) {
				$query->where('name', 'LIKE', "%{$search}%");
			}
			$query->orderBy('orders', 'asc');
			$all_sahitya = $query->get();
			
			$views = ViewCount::selectRaw('link, COUNT(DISTINCT ip_address) as view_count')
			   ->groupBy('link')
			   ->get();
			return view('user.home.sahitya',compact('all_sahitya','views'));	 	
		}  

  
	public function live()
    {
		$home_data = HomePage::latest()->first();
		return view('user.home.live',compact('home_data'));
	}
	
}
