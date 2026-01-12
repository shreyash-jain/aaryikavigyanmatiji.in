@extends('user.app')
@section('styles') 

	<link href="{{asset('frontend\assets\css\image\photoswipe\dist\photoswipe.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('frontend\assets\css\image\photoswipe\dist\default-skin.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('backend\assets\css\font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

<style>       
	.hero-V4 h1 {
		font-size: 42px !important;
	}
	/* .carbon-blue {
		 background: #ef704e  !important ; 
	} */
		
	@media (max-width: 768px) {
	  .carousel-inner .carousel-item > div {
		display: none;
	  }
	  .carousel-inner .carousel-item > div:first-child {
		display: block;
	  }
	}

	.carousel-inner .carousel-item.active,
	.carousel-inner .carousel-item-start,
	.carousel-inner .carousel-item-next,  
	.carousel-inner .carousel-item-prev {
	  display: flex;
	  // transition-duration: 10s;
	}

	/* display 4 */
	@media (min-width: 768px) {
	  .carousel-inner .carousel-item-right.active,
	  .carousel-inner .carousel-item-next,
	  .carousel-item-next:not(.carousel-item-start) {
		transform: translateX(33.33%) !important;
	  }

	  .carousel-inner .carousel-item-left.active,
	  .carousel-item-prev:not(.carousel-item-end),
	  .active.carousel-item-start,
	  .carousel-item-prev:not(.carousel-item-end) {
		transform: translateX(-33.33%) !important;
	  }

	  .carousel-item-next.carousel-item-start, .active.carousel-item-end {
		transform: translateX(0) !important;
	  }

	  .carousel-inner .carousel-item-prev,
	  .carousel-item-prev:not(.carousel-item-end) {
		transform: translateX(-33.33%) !important;
	  }
	}
	.carousel-control-prev-icon {
	 background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='black' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
	}

	.carousel-control-next-icon {
	  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='black' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
	}

	.modal-body ul {
		list-style-type: inherit;
	}
	.modal-body ol {
		list-style-type: inherit;
	}


.toast{
	position: fixed; 
    bottom: 2%; 
    right: 10px;
	z-index: 9900;
	/* border-left: 8px solid #40f467; */
	margin-top: 30px;
   transform: translateX(calc(100% + 30px));
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.25, 1.35);
 
}
.toast.active{
  transform: translateX(0);
}
.toast:not(.show) {
    display: inline !important;
}  
  
.event_close{
  position: absolute; 
  right: 15px;
  padding: 5px;
  cursor: pointer;
  opacity: 0.7;
}
.event_close:hover{
  opacity: 1;
}
.progress{
  position: absolute;
  bottom: 0;
  left: 0;
  height: 3px;
  width: 100%;
  background: #ddd;
}
.progress::before{
  content: "";
  position: absolute;
  bottom: 0;
  right: 0;
  height: 100%;
  width: 100%;
  background-color: #40f467;
}
.progress.active::before{
  animation: progress 5s linear forwards;
}
@keyframes progress {
  100%{
    right: 100%;
  }
}

.toast-body {
    display: flex;
    align-items: center;
    padding: var(--bs-toast-padding-y) var(--bs-toast-padding-x);
    background-clip: padding-box;
/*     border-bottom: var(--bs-toast-border-width) solid var(--bs-toast-header-border-color); */
    border-top-left-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
    border-top-right-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
	justify-content: center;
}

</style>
@endsection
@section('content')
  
@foreach($events as $key => $val)
<div class="toast" id="myToast{{$key}}" style="background-color: {{$val->colour}}; color: {{$val->text_colour}};">
  <div class="toast-body">
    <strong class="">{{$val->description}}</strong>
    <button type="button" class="btn-close event_close" data-bs-dismiss="toast" style="background-color: #ffffff !important;"></button>
  </div>
  <i class="uil uil-multiply toast-close"></i>
  <div class="progres "></div>
</div>
@endforeach

			<section class="hero-sec hero-V4 ">
				<div class="">
					<img class="img-100 nav-brand d-lg-none" src="{{asset('frontend/images/home_page/'.$home_data->banner_image)}}"  alt="Image">
					<img class="img-100 nav-brand d-none d-lg-block" src="{{asset('frontend/images/home_page/'.$home_data->banner_image)}}" height="100%" width="100%"  alt="Lawyer image">
						<div class=" button-whole-wrap">
							<a href="{{route('aaryika_maa_105_vigyan_mati_mataji.index')}}" class="button-wrap">
								<span>
									और पढ़ें <i class="ri-arrow-right-line"></i>
								</span>
							</a>
						</div>
				
				</div> 
			</section>  			
			<section class="blog-sidebar-page logoMarqueeSection lm-version-4 section-p-100">
				<div class="container container-1300">
				    <div class="text-center">
				       <a href="{{route('getall_sahitya')}}">
							<h2 class="color-text color-blue mb-25 ds">साहित्य संग्रह </h2>
						</a>
				    </div>    
					<div class=" multiple-items">
						@foreach($sahitya_data as $key=>$val)
							@if($val->file_type == 1)
								  <div ><a href="{{asset('frontend/images/sahitya_file/'.$val->file)}}" target="_blank" ><img src="{{asset('frontend/images/sahitya/'.$val->image)}}" style=" max-height:145px" alt="Client logo "  class="marqueelogo d-lg-none count_view"  data-link="{{$val->file}}"><img src="{{asset('frontend/images/sahitya/'.$val->image)}}" style=" max-height:197px" alt="Client logo" class="marqueelogo d-none d-lg-block count_view"  data-link="{{$val->file}}"></a></div>
							@else <div ><a href="{{$val->file}}" target="_blank"><img src="{{asset('frontend/images/sahitya/'.$val->image)}}" style=" max-height:145px" alt="Client logo " class="marqueelogo d-lg-none  count_view"  data-link="{{$val->file}}"><img src="{{asset('frontend/images/sahitya/'.$val->image)}}" style=" max-height:197px" alt="Client logo d-none d-lg-block" class="marqueelogo d-none d-lg-block  count_view"  data-link="{{$val->file}}"></a></div>
							@endif		
						@endforeach		
					</div>
				</div>
			</section>
			@if($ranoli_ratnakar->isNotEmpty())	
			<section class="back-white violence-mob-wrap-v4 logoMarqueeSection lm-version-4 section-p-100">
				<div class="container container-770">
					<div class="col-12 text-center">
						<h2 class="color-text color-blue mb-25 ds">राणोली-रत्नाकर</h2>	
					</div>	
					<div id="mediaCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="30000">
						<div class="carousel-inner  text-center">
							@foreach($ranoli_ratnakar as $key=>$val)			
								<div class="carousel-item @if($key === 0) active @endif" style="flex-direction: column;">
									@if($val->type == 1)
										<!-- Image Slide -->
									  <img src="https://drive.google.com/thumbnail?id={{$val->url_slug}}&sz=w1000" class="d-block img-100" alt="{{$val->title}}">
									@else
								<!-- Video Slide -->
									<iframe id="video-{{$key}}" class="d-block mx-auto my-auto h-100"  src="https://drive.google.com/file/d/{{$val->url_slug}}/preview"  allow="autoplay" style="min-height: 500px;"></iframe>	
									
								@endif
									<div class=" mt-3 d-block" >
										<h6 style="color: #000000;">{{(isset($val->description) ? $val->description : '') }}</h6>
									</div>
								</div>
							@endforeach
						</div>           
					  <!-- Controls -->
					  <button class="carousel-control-prev" type="button" data-bs-target="#mediaCarousel" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#mediaCarousel" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					  </button>
					</div>
				</div>
			</section>
			@endif 
			<section class="blog-sidebar-page logoMarqueeSection lm-version-4 section-p-100">
				<div class="container container-1300">
				    <div class="text-center">
				        <h2 class="color-text color-blue mb-25 ds">प्रवचन वीडियो </h2>
				    </div>    
					<div class="row">
						<div class="col-12 col-md-12 col-sm-12 col-lg-8 col-xl-8">
							<div class="single-case-right-bar">	
								<div class="mix-blog-grid-1-col case-card-v2 " >							
									<div class="video-container ">
									@if(!empty($home_data->thumbnail))
										<div class="video-thumbnail">
											<img class="b-radiu object_position img-thumbnail" src="{{asset('frontend/images/home_page/'.$home_data->thumbnail)}}"  alt="{{$home_data->youtube_video_title}}">
											<a id="play-video" class="play-video-button">
										<span></span></a>
										</div> 
										<iframe class="video-player" width="772" height="450" src="{{$home_data->youtube_video_url}}" title="{{$home_data->youtube_video_title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
									@else
										<iframe class=" d-lg-none mob_height_small" width="100%"  src="{{$home_data->youtube_video_url}}" title="{{$home_data->youtube_video_title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
										<iframe class="d-none  d-lg-block mob_height" width="100%"  src="{{$home_data->youtube_video_url}}" title="{{$home_data->youtube_video_title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
									@endif
								</div>  
									<h4 class="color-blue mt-2">{{$home_data->youtube_video_title}} </h4>
									<p class="c-category  video-p color-dark-blue">Date  |  {{Helper::formatDates($home_data->updated_at)}}</p>									
								</div>	
							</div>
						</div>					
						<div class="col-12 col-md-12 col-sm-12 col-lg-4">
							@foreach($data as $val)	
							<div class="search-box input-group mb-4">
								<div class="col-lg-7 ">
									<div class="video-container v-c">
										<div class="video-thumbnail">
											<img class="b-radiu object_position img-thumbnail" src="{{ asset('frontend/images/thumbnails/'.$val->thumbnail) }}"  height="135" alt="Thumbnail">											
											<a id="play-video_{{$val->id}}" data_url="{{$val->url_slug}}" data_title="{{$val->title}}" class="video-play-button" href="javascript:void(0);"><span></span></a>									
										</div> 
										<div id="video-overlay" class="video-overlay" >
											<a class="video-overlay-close">&times;</a>
										</div>	
									</div>
								</div>

								<div class="col-lg-5 padin-l-15">
									<p class="video-p font-700 color-dark-blue">{{$val->title}}</p>
									<p class=" video-p font-s-12 color-dark-blue">Date  |  {{ date('d-M-Y', strtotime($val->date))}}</p>
								</div>	
							</div>
							@endforeach								
						</div>					
					</div>
				</div>	
			</section>

			<section class="blog-sidebar-page section-p-100 logoMarqueeSection lm-version-4 reveal1">			
				<div class="container container-770">
					<div class="col-12 text-center">
							<h2 class="color-text color-blue mb-25 ds">सुविचार</h2>	
						</div>
					<div class="row left-sidebar-res">
						<div class="col-12">
							<div class="single-services-slide mb-20">
							@foreach($suvichar_image as $key=>$val)
								<figure class="snip-case case-yellow">
									<img class="img-100" src="https://drive.google.com/thumbnail?id={{$val->image_url}}&sz=w1000" alt="{{$val->title}}">
									<i class="ri-scales-3-line"></i>
									<a href="javascript:void(0);"></a>
								</figure>
							@endforeach									
							</div>
						</div>				
					</div>
				</div>	
			</section> 
			@if($sanskar_manjusha->isNotEmpty())			
			<section class="blog-sidebar-page section-p-100 logoMarqueeSection lm-version-4 reveal1">			
				<div class="container container-770">
					<div class="col-12 text-center">
							<h2 class="color-text color-blue mb-25 ds">संस्कार मञ्जूषा</h2>	
						</div>
					<div class="row left-sidebar-res">
						<div class="col-12">
							<div class="single-services-slide mb-20">
							@foreach($sanskar_manjusha as $key=>$val)
								<figure class="snip-case case-yellow">
									<img class="img-100" src="https://drive.google.com/thumbnail?id={{$val->image_url}}&sz=w1000" alt="{{$val->title}}">
									<i class="ri-scales-3-line"></i>
									<a href="javascript:void(0);"></a>
								</figure>
							@endforeach									
							</div>
						</div>				
					</div>
				</div>	
			</section> 
			@endif			
						
			<section class="wakil-blog-layout section-p-100 logoMarqueeSection lm-version-4">
				<div class="container text-center">
				<h2 class="color-text color-blue mb-25 ds">गैलरी</h2>
					<div class="row">
						<div class="col-12">							
							<div class="row case-card-v2">																
								@foreach($gallery_data as $key=>$val)
								<div class="col-12 col-md-4">
									<div class="blog__box">
										<div class="blog_image" >
											<h3 class="d-none">None</h3>
											<img class="b-radiu imageclick " data-bs-toggle="modal" id="images_{{$val->id}}" data_url="https://drive.google.com/thumbnail?id={{$val->image_url}}&sz=w1000"  data_title="{{$val->title}}" src="https://drive.google.com/thumbnail?id={{$val->image_url}}&sz=w1000" alt="{{$val->title}}">
											<div class="blog_category">																						
												<h4>@if(isset($val->is_new) && $val->is_new == 1)
													<span class="badge badge-pill badge-gradient-success">New</span>
												@else
												@endif</h4>
											</div>
										</div>
										<div class="">
											<h4 class="heading_hover" >{{$val->title}}</h4>
										</div>
									</div>																												
								</div>	
								@endforeach	  
							</div>									
						</div>
					</div>       
				</div>
				<div class="modal fade" id="fullpage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
					<div class="modal-dialog modal-dialog-centered modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								 <h5 class="modal-title" id="fullpageLabel"></h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<img class="img-fluid img-thumbnail" id="fullScreenImage"  src="" alt="Full Screen Image">
							</div>
						</div>
					</div>
				</div>
			</section>
			@if(!empty($oshadhi_data))
			<section  class="section-p-100 logoMarqueeSection lm-version-4">
				<div class="col-12 text-center">
					<h2 class="color-text color-blue mb-25 ds"> पूज्य आर्यिका श्री की करुणा </h2>	
				</div>
				<section class="footer-top footer-top-v2 section-p-100 banner-header-section text-center" id="contact" >
					<div class="container b-radiu oshdhi-tcw">
						<div class="row">
							<div class="col-12 text-center">							
								<h4 class="mb-6 color-white f-wH4-tcw" >{{$oshadhi_data->name}} </h4>
								<h6 class="mb-6 color-white f-wH6-tcw" >{{$oshadhi_data->short_description}} </h6>
								<div class="mb-6 mt-5">
									<a href="#" class="color-white text-decoration-underline link-opacity-50-hover oshadhiclick " data-bs-toggle="modal" id="oshadh_"  data_name="{{$oshadhi_data->name}}" data_description="{{$oshadhi_data->description}}">और पढ़े </a>
								</div>						  
							</div>
						</div>
					</div>
					<div class="modal fade" id="full_description" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
						<div class="modal-dialog modal-dialog-centered modal-xl">
							<div class="modal-content">
								<div class="modal-header">
									 <h5 class="modal-title" id="fullName"></h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body p-5" >
									<p id="fullDescription" style="text-align: left;">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								 </div>
							</div>  
						</div>  
					</div>	
				</section>
			</section>
			@endif
		</div>

@endsection

@section('scripts') 
  <script >
 document.addEventListener("DOMContentLoaded", function() {
    var toasts = document.querySelectorAll(".toast");

    // Function to show toast
    function showToast(toast) {
        toast.classList.add("active");
        /* toast.querySelector(".progress").classList.add("active"); */
		setTimeout(() => {
			toast.classList.remove("active");
		}, 15000);
		/* setTimeout(() => {
			progress.classList.remove("active");
		}, 15300); */

    }

    // Event listeners for close button click
    toasts.forEach(function(toast) {
        var close = toast.querySelector(".event_close");
        close.addEventListener("click", function() {
            toast.classList.remove("active");
            setTimeout(function() {
               /*  toast.querySelector(".progress").classList.remove("active"); */
            }, 300);
        });
    });

    // Show each toast after a delay
    var delay = 3000;
    toasts.forEach(function(toast) {
        setTimeout(function() {
            showToast(toast);
        }, delay);
        delay += 3000; // Increase delay for next toast
    });
});
  </script>
	<script >
		$(document).ready(function(){
			$('.multiple-items').slick({ 
				infinite: true,
				slidesToShow: 5, // Show fewer slides on smaller screens
			slidesToScroll: 2,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 2000,
				responsive: [
					{
						breakpoint: 769, // Adjust this breakpoint as needed
						settings: {
							slidesToShow: 4, // Number of slides to show on smaller screens
							slidesToScroll: 2 // Number of slides to scroll on smaller screens
						}
					},
					{
						breakpoint: 576, // Adjust this breakpoint as needed
						settings: {
							slidesToShow: 2, // Number of slides to show on even smaller screens
							slidesToScroll: 1 // Number of slides to scroll on even smaller screens
						}
					}
				]
			});
		});
		$('.imageclick').on('click', function (e) {
			e.preventDefault();
			var urlSlug = $(this).attr('data_url');
			var imageTitle = $(this).attr('data_title');
			// Set modal content
			$('#fullpage').modal('show');
			$('#fullScreenImage').attr('src', urlSlug);
			$('#fullpageLabel').text(imageTitle);
		});
	</script>
	<!--	 <script src="{{asset('frontend\assets\js\image_swipe\masonry\masonry.pkgd.min.js')}}"></script>	
		 <script src="{{asset('frontend\assets\js\image_swipe\masonry\imagesloaded.js')}}"></script>	
		 <script src="{{asset('frontend\assets\js\image_swipe\masonry\photoswipe.js')}}"></script>	
		 <script src="{{asset('frontend\assets\js\image_swipe\masonry\photoswipe-ui-default.min.js')}}"></script>	
		 <script src="{{asset('frontend\assets\js\image_swipe\masonry\gallery.js')}}"></script>	   -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var videoThumbnail = document.querySelector(".video-thumbnail");
			var play_video_button = document.querySelector(".play-video-button");
			var videoPlayer = document.querySelector(".video-player");

			videoThumbnail.addEventListener("click", function() {
				play_video_button.style.display = "none";
				videoPlayer.style.display = "block";
				videoPlayer.src += "&autoplay=1";
			});
		});
	</script>
	<script>
		/* $('.carousel .carousel-item').each(function(){
			var minPerSlide = 3;
			var next = $(this).next();
			if (!next.length) {
			next = $(this).siblings(':first');
			}
			next.children(':first-child').clone().appendTo($(this));
			
			for (var i=0;i<minPerSlide;i++) {
				next=next.next();
				if (!next.length) {
					next = $(this).siblings(':first');
				}
				
				next.children(':first-child').clone().appendTo($(this));
			  }
		}); */
	</script>
	<script >
		$('.oshadhiclick').on('click', function (e) {
			e.preventDefault();
			var Name = $(this).attr('data_name');
			var Description = $(this).attr('data_description');
			$('#full_description').modal('show');
			$('#fullName').text(Name);
			$('#fullDescription').html(Description);  
		});
	</script>
@endsection




