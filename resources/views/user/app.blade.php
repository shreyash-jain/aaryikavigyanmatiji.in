<?php
$site_data = App\Models\Site::latest()->first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	@php  
		$currentURL = url()->current() ;
		//echo $currentURL ;
		$baseURL = "https://aaryikavigyanmatiji.in/";
		$newURL = str_replace($baseURL, '', $currentURL);
		$meta_data = App\Models\MetaData::where('page_name', $newURL)->first();
		//echo $newURL ;
	@endphp
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="@if (isset($meta_data->keywords) && !empty($meta_data->keywords)){{$meta_data->keywords }} @else
				{{ (isset($site_data->site_keyword) && !empty($site_data->site_keyword)) ? $site_data->site_keyword : '' }}
			@endif "/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="@if (isset($meta_data->description) && !empty($meta_data->description)){{$meta_data->description}} @endif" />
	
	@if (request()->is('live')) 
		<?php $home_data = \App\Models\HomePage::latest()->first(); ?>
		<meta property="og:image" content="{{asset('frontend/images/home_page/'.$home_data->thumbnail)}}"/>
		<meta property="og:image:secure_url" content="{{asset('frontend/images/home_page/'.$home_data->thumbnail)}}" />
	@endif	
	
	<title>@if (isset($meta_data->title) && !empty($meta_data->title)){{$meta_data->title}} @else
				{{ (isset($site_data->site_name) && !empty($site_data->site_name)) ? $site_data->site_name : '' }}
			@endif </title>
	@if(isset($site_data->site_favicon) && !empty($site_data->site_favicon) && file_exists(public_path('frontend/images/site/'.$site_data->site_favicon)))<link rel="icon" href="{{asset('frontend/images/site/'.$site_data->site_favicon)}}">
	@else
		<link rel="icon" href="{{asset('frontend/assets/images/header/favicon.png')}}">
	@endif	
	@include('user.include.style')
	
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J6N8N4LVR8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J6N8N4LVR8');
</script>
<body>
    <main class="site-content">
		<div class="preloader">
			<div class="vertical-centered-box">
				<div class="content">
					<div class="preloader-tcw">
						<img class="d-lg-none" src="{{asset('frontend/images/site/'.$site_data->site_favicon)}}"   height="95" alt="">
						<img class="d-none d-lg-block" src="{{asset('frontend/images/site/'.$site_data->site_favicon)}}"   height="115" alt="">
					</div>
				</div>  
			</div>
		</div>
		@include('user.include.header')
            @yield('content')
            @include('user.include.footer')  
		<div class="cursor cursor-shadow"></div>
		<div class="cursor cursor-dot"></div>
		<a href="#content" class="back-to-top">
			<span class="back-to-top-text"><i class="ri-arrow-up-s-line"></i></span>
		</a>
	</main>
    @include('user.include.script')
</body>

</html>