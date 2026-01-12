<?php
use  App\Models\Category;
use App\Models\ViharInfo;
$routeName = request()->route()->getName();
$site_data = App\Models\Site::latest()->first();
$data = App\Models\SanghastAaryika::orderBy('serial_number', 'asc')->get();
$bahan_data = App\Models\SanghasthBrahmacharyBahane::orderBy('serial_number', 'asc')->get();

$vihar_info = App\Models\ViharInfo::where('status','1')
	->where(function ($query) {
		$currentDate = date('Y-m-d');
			$query->where('start_date','<=',$currentDate)
              ->where('end_date','>=',$currentDate);
    })
->get();
 
$parents = Category::IsParent()->listOrder()->get();

?>
    
						    
<header class="header_area common-header home-3-header " id="header">
	@if(!empty($vihar_info->isNotEmpty()))

	<section class="marquees-wrapper carbon-blue">
    	<marquee  direction="left" >
				<div class="contant white_space"> @foreach($vihar_info as $key=>$val)
				{{ $val->text }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endforeach </div>
		</marquee>
    </section>    
	@endif	
	<div class="main_header_area animated">
		<div class="container-fluid nav-padding">
			<nav id="navigation1" class="navigation">
				<div class="nav-header">
					<div class="flex-tcw">
						@if(isset($site_data->header_logo) && !empty($site_data->header_logo) && file_exists(public_path('frontend/images/site/'.$site_data->header_logo)))
							<a class="nav-brand d-lg-none mt-2" href="{{route('home.index')}}"><img class="" src="{{asset('frontend/images/site/'.$site_data->header_logo)}}" height="58" alt="Site logo"></a>
							<a class="nav-brand d-none d-lg-block" href="{{route('home.index')}}"><img class="" src="{{asset('frontend/images/site/'.$site_data->header_logo)}}" height="80" alt="Site logo"></a>
						@else
							<a class="nav-brand" href="{{route('home.index')}}"><img class="" src="{{asset('frontend/assets/images/brand/logo1.png')}}" height="80" alt="Site logo"></a>
						@endif	
						<div class="wrapper d-none d-lg-block ">	
							<form class="" role="search" id="search_form"  action="{{route('home.sahitya')}}" method="GET" enctype="multipart/form-data" >
							@php $search =  request()->input('search');  @endphp
								<div class="d-flex">
									<input class="form-control me-2" type="text" value="{{$search}}" placeholder="Type here to search Sahitya" id="search" name="search" aria-label="Search">
									<button class="btn btn-secondary semi_black" type="submit">Search</button><br>
																
									@if(!empty ($search))
										<a href="{{route('home.index')}}" class="btn btn-danger ms-1 " type="buttion">Clear</a>
									@endif  
								</div>									
								<label id="search-error" class="error" for="search" style="display: block;"></label>
							</form> 
						</div>  
						<div class="wrapper d-none d-lg-block ">
							<ul class="social">
						<!--		<li>
									<a href="{{$site_data->twitter_url}}" class="social-item" target="_blank"><i
										class="ri-twitter-fill"></i>
									</a>
								</li>  -->  
								<li>
									<a href="{{$site_data->facebook_url}}" class="social-item" target="_blank"><i
										class="ri-facebook-fill"></i>
									</a>
								</li>
								<li>
									<a href="{{$site_data->youtube_url}}" class="social-item" target="_blank"><i
										class="ri-youtube-fill"></i>
									</a>
								</li>
								<li>
									<a href="{{$site_data->instagram_url}}" class="social-item" target="_blank"><i
										class="ri-instagram-line"></i>
									</a>
								</li>
								<li>
									<a href="{{$site_data->whatsapp_url}}" class="social-item" target="_blank"><i
										class="ri-whatsapp-line"></i>
									</a>
								</li>
							</ul>
						</div>		
					</div>
					<div class="nav-toggle"></div>	
				</div>
				<div class="nav-menus-wrapper ">
		
				    
					<ul class="nav-menu align-to-right ">	
					
						<li><div class="wrapper d-lg-none m-2">	
						
						<form class="" role="search" id="search_mob_form"  action="{{route('home.sahitya')}}" method="GET" enctype="multipart/form-data" >
							@php $search =  request()->input('search');  @endphp
							<div class="d-flex">
								<input class="form-control me-2" type="text" value="{{$search}}" placeholder="Type here to search Sahitya" id="search" name="search" aria-label="Search">
								<button class="btn btn-secondary semi_black" type="submit">Search</button><br>
															
								@if(!empty ($search))
									<a href="{{route('home.index')}}" class="btn btn-danger ms-1 " type="buttion">Clear</a>
								@endif  
							</div>									
							<label id="search-error" class="error" for="search" style="display: block;"></label>
						</form> 
						
					</div></li>	
						<li><a class="custom_nav_color" href="{{route('home.index')}}">  होम </a></li>	
    				  
						<li><a class="custom_nav_color" href="{{route('guru-parampara.index')}}">   गुरु परंपरा </a></li>

				 
				    	<li><a  class="dropdown-toggle custom_nav_color"  href="{{route('aaryika_maa_105_vigyan_mati_mataji.index')}}">परिचय </a>
							<ul class="nav-dropdown dropdown-menu" id="mobileDropdown">
								<li><a  class="ds dropdown-toggle" href="#">दीक्षित आर्यिका</a>
									<ul class="nav-dropdown dropdown-menu overflow-scroll m-height-500" >
										@foreach($data as $key=>$val)  
											<li><a class="list-group-item ds " href="{{route('sanghast_aaryika.detail',$val->url_slug )}}" >{{"$val->name"}}</a></li>
										@endforeach	
									</ul>
								</li>
								<li><a class="ds dropdown-toggle" href="#">ब्रह्मचारणी बहनें</a>
									<ul class="nav-dropdown dropdown-menu overflow-scroll m-height-450" >									
										@foreach($bahan_data as $key=>$val)
											<li><a class="list-group-item ds hight-35 " href="{{route('sanghasth_brahmachary_bahane.detail',$val->url_slug )}}"  >{{"$val->name"}}</a>  </li>
										@endforeach	
									</ul>
								</li>
							</ul>   
						</li>
						<li><a  class="dropdown-toggle custom_nav_color" href="{{route('getall_sahitya')}}">साहित्य मंजूषा </a>
							<ul class="nav-dropdown dropdown-menu ">
							@if($parents->isNotEmpty())
								@foreach($parents  as $key2=>$val2)
									<li><a class="ds dropdown-toggle" href="">{{$val2->name}}</a>											
										@if($val2->subcategories()->exists())
											<ul class="nav-dropdown dropdown-menu">
												@foreach($val2->subcategories as $key3=>$val3)											
												<li><a class="list-group-item  ds px-4" href="{{route('sahitya.getall', $val3->url_slug) }}">{{$val3->name}}</a></li> 
												@endforeach
											</ul>
										@endif
									</li>
								@endforeach
							@endif									
							</ul>   
						</li>
						<li class="nav-item dropdown dropdown-mega position-static">
							<a class="nav-link dropdown-toggle custom_nav_color" href="#" > विज्ञान वाणी  </a>
							<div class="dropdown-menu shadow dropdown-menu-start nav-dropdown ">
							  <div class="mega-content px-4">
								<div class="container-fluid">
								  <div class="row">
									<div class="">
										<div class="list-group">
											<a class="list-group-item ds " href="{{route('pravachan_video.getall')}}">प्रवचन वीडियो </a>
											<a class="list-group-item ds " href="{{route('pravachan_audio.getall')}}">प्रवचन औडियो</a>
											<a class="list-group-item ds " href="{{route('vidhaan.getall')}}">संगीतमय विधान </a>
											<a class="list-group-item ds " href="{{route('other.getall')}}">अन्य  वीडियो </a>
											<a class="list-group-item ds " href="{{route('classes.getall')}}">कक्षाएं </a>
										</div>
									</div>
								  </div>
								</div>
							  </div>
							</div>
						</li>						
						<li><a class="custom_nav_color" href="{{route('gallery.getall')}}">   गैलरी  </a></li>
						<li class="nav-item dropdown dropdown-mega position-static">
							<a class="nav-link dropdown-toggle custom_nav_color" href="#" > विशेष  </a>
							<div class="dropdown-menu shadow dropdown-menu-star nav-dropdown ">
							  <div class="mega-content px-4">
								<div class="container-fluid">
								  <div class="row">
									<div class="">
										<div class="list-group">
											<a class="list-group-item ds" href="{{route('oshadhi_manjoosha.getall')}}">औषधि मंजूषा</a>
											<a class="list-group-item ds  " href="{{route('suvichar_image.getall')}}">सुविचार</a>
											<a class="list-group-item ds  " href="{{route('sanskar_manjusha.getall')}}">संस्कार मञ्जूषा</a>
											<a class="list-group-item ds " href="{{route('chaturmas.getall')}}">चातुर्मास जानकारी </a>
										</div>
									</div>
								  </div>
								</div>
							  </div>
							</div>
						</li>
						<li>
							<a class="custom_nav_color" href="{{route('contact_us.index')}}" >हमारे बारे मे  </a>
						</li>
					</ul>	
					
				</div>       				
			</nav>  
		</div>  
	</div>
</header>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery library -->

<script src="https://aaryikavigyanmatiji.in/backend/validation/jquery.validate.js"></script>

<script >
var $j = jQuery.noConflict(); // Assign jQuery to a different variable
$j(document).ready(function(){
    $j("#search_form").validate({
        rules: {
            search: {
                required: true // Make the 'search' input field required
            }
        },
        messages: {
           
        }
    });
});
</script>
<script >
var $k = jQuery.noConflict(); // Assign jQuery to a different variable
$k(document).ready(function(){
    $k("#search_mob_form").validate({
        rules: {
            search: {
                required: true // Make the 'search' input field required
            }
        },
        messages: {
           
        }
    });
});
</script>
