<?php
$routeName = request()->route()->getName();
?>
<div class="side-nav expand-lg">
	<div class="side-nav-inner">
		<ul class="side-nav-menu scrollable">
			
			<li class="nav-item dropdown {{ $routeName == 'admin.dashboard' ? 'open' : '' }}">
				<a class="dropdown-toggle" href="{{route('admin.dashboard')}}">
					<span class="icon-holder">
						<i class="mdi mdi-gauge"></i>
					</span>
					<span class="title">{{__('sidebar.dashboard')}}</span>				
				</a>				
			</li>
			<li class="nav-item dropdown {{ $routeName == 'meta_data.list' || $routeName == 'meta_data.create'|| $routeName == 'meta_data.edit' ? 'open' : '' }}">
				<a class="dropdown-toggle" >
					<span class="icon-holder">
						<i class="mdi mdi-image-filter-drama"></i>
					</span>
					<span class="title">{{__('sidebar.meta_data')}}</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'meta_data.list' ? 'active' : '' }}">
						<a href="{{route('meta_data.list')}}">{{__('sidebar.list')}} </a>
					</li>
					<li class="{{ $routeName == 'meta_data.create' ? 'active' : '' }}">
						<a href="{{route('meta_data.create')}}">{{__('sidebar.add')}}</a>
					</li>
				</ul>
			</li>

			<li class="nav-item dropdown {{ $routeName == 'general_setting.site' ? 'open' : '' }}">
				<a class="dropdown-toggle" href="{{route('general_setting.site')}}">
					<span class="icon-holder">
						<i class="ti-settings"></i>
					</span>
					<span class="title">{{__('sidebar.sites_settings')}}</span>
				</a>
			</li>
			<li class="nav-item dropdown {{ $routeName == 'home_page.home' ? 'open' : '' }}">
				<a class="dropdown-toggle" href="javascript:void(0);">
					<span class="icon-holder">
						<i class="mdi mdi-image-filter-tilt-shift""></i>
					</span>
					<span class="title">{{__('sidebar.home_page_settings')}}</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'home_page.home' ? 'active' : '' }}">
						<a href="{{route('home_page.home')}}">{{__('sidebar.home_page')}} </a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown {{ $routeName == 'event.list' ? 'open' : '' }}">
				<a class="dropdown-toggle" href="{{route('event.list')}}">
					<span class="icon-holder">
						<i class="mdi mdi-vector-arrange-above"></i>
					</span>
					<span class="title">{{__('sidebar.event')}}</span>
				</a>		
			</li> 
			<li class="nav-item dropdown {{ $routeName == 'vigyan_mati_mataji.create' ? 'open' : '' }}">
				<a class="dropdown-toggle" href="{{route('vigyan_mati_mataji.create')}}">
					<span class="icon-holder">
						<i class="ti-user"></i>
					</span>
					<span class="title">{{__('sidebar.vigyan_mati_mataji')}}</span>
				</a>
			</li>
			<li class="nav-item dropdown {{ $routeName == 'suvichar_image.list' || $routeName == 'suvichar_image.create'|| $routeName == 'suvichar_image.edit' ? 'open' : '' }}">
				<a class="dropdown-toggle" >
					<span class="icon-holder">
						<i class="ti-image"></i>
					</span>
					<span class="title">{{__('sidebar.suvichar_images')}}</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'suvichar_image.list' ? 'active' : '' }}">
						<a href="{{route('suvichar_image.list')}}">{{__('sidebar.list')}} </a>
					</li>
					<li class="{{ $routeName == 'suvichar_image.create' ? 'active' : '' }}">
						<a href="{{route('suvichar_image.create')}}">{{__('sidebar.add')}}</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown {{ $routeName == 'ranoli-ratnakar.index' || $routeName == 'ranoli-ratnakar.create'|| $routeName == 'ranoli-ratnakar.edit' ? 'open' : '' }}">
				<a class="dropdown-toggle" >
					<span class="icon-holder">
						<i class="ti-image"></i>
					</span>
					<span class="title">Ranoli Ratnakar</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'ranoli-ratnakar.index' ? 'active' : '' }}">
						<a href="{{route('ranoli-ratnakar.index')}}">{{__('sidebar.list')}} </a>
					</li>
					<li class="{{ $routeName == 'ranoli-ratnakar.create' ? 'active' : '' }}">
						<a href="{{route('ranoli-ratnakar.create')}}">{{__('sidebar.add')}}</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown {{ $routeName == 'gallery.list' || $routeName == 'gallery.create'|| $routeName == 'gallery.edit' ? 'open' : '' }}">
				<a class="dropdown-toggle" >
					<span class="icon-holder">
						<i class="ti-gallery"></i>
					</span>
					<span class="title">{{__('sidebar.gallery')}}</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'gallery.list' ? 'active' : '' }}">
						<a href="{{route('gallery.list')}}">{{__('sidebar.list')}} </a>
					</li>
					<li class="{{ $routeName == 'gallery.create' ? 'active' : '' }}">
						<a href="{{route('gallery.create')}}">{{__('sidebar.add')}}</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown {{ $routeName == 'oshadhi_manjoosha.list' || $routeName == 'oshadhi_manjoosha.create'|| $routeName == 'oshadhi_manjoosha.edit' ? 'open' : '' }}">
				<a class="dropdown-toggle" >
					<span class="icon-holder">
						<i class="ti-plus"></i>
					</span>
					<span class="title">{{__('sidebar.oshadhi_manjoosha')}}</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'oshadhi_manjoosha.list' ? 'active' : '' }}">
						<a href="{{route('oshadhi_manjoosha.list')}}">{{__('sidebar.list')}} </a>
					</li>
					<li class="{{ $routeName == 'oshadhi_manjoosha.create' ? 'active' : '' }}">
						<a href="{{route('oshadhi_manjoosha.create')}}">{{__('sidebar.add')}}</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown {{ $routeName == 'chaturmas.list' ? 'open' : '' }}">
				<a class="dropdown-toggle" href="{{route('chaturmas.list')}}">
					<span class="icon-holder">
						<i class="mdi mdi-vector-arrange-above"></i>
					</span>
					<span class="title">{{__('sidebar.chaturmas')}}</span>
				</a>		
			</li>                                                                              
			<li class="nav-item dropdown {{ $routeName == 'vihar_info.list' || $routeName == 'vihar_info.create'|| $routeName == 'vihar_info.edit' ? 'open' : '' }}">
				<a class="dropdown-toggle" >
					<span class="icon-holder">
						<i class="ti-vimeo-alt"></i>
					</span>
					<span class="title">{{__('sidebar.vihar_info')}}</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'vihar_info.list' ? 'active' : '' }}">
						<a href="{{route('vihar_info.list')}}">{{__('sidebar.list')}} </a>
					</li>
					<li class="{{ $routeName == 'vihar_info.create' ? 'active' : '' }}">
						<a href="{{route('vihar_info.create')}}">{{__('sidebar.add')}}</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown {{ $routeName == 'sahitya.list' || $routeName == 'sahitya.create'|| $routeName == 'sahitya.edit' ? 'open' : '' }}">
				<a class="dropdown-toggle {{in_array($routeName,['sahitya.list','sahitya.create','sahitya.edit'])?'active':''}}" >
					<span class="icon-holder">
						<i class="ti-book"></i>
					</span>
					<span class="title">{{__('sidebar.sahitya')}}</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'sahitya.list' ? 'active' : '' }}">
						<a href="{{route('sahitya.list')}}">{{__('sidebar.list')}} </a>
					</li>
					<li class="{{ $routeName == 'sahitya.create' ? 'active' : '' }}">
						<a href="{{route('sahitya.create')}}">{{__('sidebar.add')}}</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown {{ $routeName == 'sanghast_aaryika.list' || $routeName == 'sanghast_aaryika.create'|| $routeName == 'sanghast_aaryika.edit' ? 'open' : '' }}">
				<a class="dropdown-toggle" >
					<span class="icon-holder">
						<i class="ti-layout-grid4"></i>
					</span>
					<span class="title">{{__('sidebar.sanghast_aaryika')}}</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'sanghast_aaryika.list' ? 'active' : '' }}">
						<a href="{{route('sanghast_aaryika.list')}}">{{__('sanghast_aaryika.list')}} </a>
					</li>
					<li class="{{ $routeName == 'sanghast_aaryika.create' ? 'active' : '' }}">
						<a href="{{route('sanghast_aaryika.create')}}">{{__('sanghast_aaryika.sanghast_aaryika_add')}}</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown {{ $routeName == 'sanghasth_brahmachary_bahane.list' || $routeName == 'sanghasth_brahmachary_bahane.create'|| $routeName == 'sanghasth_brahmachary_bahane.edit' ? 'open' : '' }}">
				<a class="dropdown-toggle" >
					<span class="icon-holder">
						<i class="ti-layout-grid2"></i>
					</span>
					<span class="title">{{__('sidebar.sanghast_brahmacharya_sisters')}}</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'sanghasth_brahmachary_bahane.list' ? 'active' : '' }}">
						<a href="{{route('sanghasth_brahmachary_bahane.list')}}">{{__('sanghast_aaryika.list')}} </a>
					</li>
					<li class="{{ $routeName == 'sanghasth_brahmachary_bahane.create' ? 'active' : '' }}">
						<a href="{{route('sanghasth_brahmachary_bahane.create')}}">{{__('sanghast_aaryika.sanghast_aaryika_add')}}</a>
					</li>
				</ul>
			</li>
	
			<li class="nav-item dropdown {{ $routeName == 'classes.list' || $routeName == 'classes.create'|| $routeName == 'pravachan_video.edit' ? 'open' : '' }}">
				<a class="dropdown-toggle" href="javascript:void(0);">
					<span class="icon-holder">
						<i class="ti-video-camera"></i>
					</span>
					<span class="title">{{__('sidebar.classes')}}</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'classes.list' ? 'active' : '' }}">
						<a href="{{route('classes.list')}}">{{__('sanghast_aaryika.list')}}</a>
					</li>
					<li class="{{ $routeName == 'classes.create' ? 'active' : '' }}">
						<a href="{{route('classes.create')}}">{{__('sanghast_aaryika.sanghast_aaryika_add')}}</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown {{ $routeName == 'pravachan_video.list' || $routeName == 'pravachan_video.create'|| $routeName == 'pravachan_video.edit' ? 'open' : '' }}">
				<a class="dropdown-toggle" href="javascript:void(0);">
					<span class="icon-holder">
						<i class="ti-video-camera"></i>
					</span>
					<span class="title">{{__('sidebar.pravachan_video')}}</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'pravachan_video.list' ? 'active' : '' }}">
						<a href="{{route('pravachan_video.list')}}">{{__('sanghast_aaryika.list')}}</a>
					</li>
					<li class="{{ $routeName == 'pravachan_video.create' ? 'active' : '' }}">
						<a href="{{route('pravachan_video.create')}}">{{__('sanghast_aaryika.sanghast_aaryika_add')}}</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown {{ $routeName == 'pravachan_audio.list' || $routeName == 'pravachan_audio.create'|| $routeName == 'pravachan_audio.edit' ? 'open' : '' }}">
				<a class="dropdown-toggle" href="javascript:void(0);">
					<span class="icon-holder">
						<i class="ti-music-alt"></i>
					</span>
					<span class="title">{{__('sidebar.pravachan_audio')}}</span>
					<span class="arrow">
						<i class="mdi mdi-chevron-right"></i>
					</span>
				</a>
				<ul class="dropdown-menu">
					<li class="{{ $routeName == 'pravachan_audio.list' ? 'active' : '' }}">
						<a href="{{route('pravachan_audio.list')}}">{{__('sanghast_aaryika.list')}}</a>
					</li>
					<li class="{{ $routeName == 'pravachan_audio.create' ? 'active' : '' }}">
						<a href="{{route('pravachan_audio.create')}}">{{__('sanghast_aaryika.sanghast_aaryika_add')}}</a>
					</li>
				</ul>
			</li>

		</ul>
	</div>
</div>