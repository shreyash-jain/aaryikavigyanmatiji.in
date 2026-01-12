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
}

</style>
@endsection
@section('content')


			<section class="blog-sidebar-page logoMarqueeSection lm-version-4 section-p-100">
				<div class="container container-1300">
				    <div class="text-center">
				        <h2 class="color-text color-blue mb-25 ds"> लाइव वीडियो </h2>
				    </div>    
					<div class="row">
						<div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
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
										<iframe class=" d-lg-none mob_height" width="100%"  src="{{$home_data->youtube_video_url}}" title="{{$home_data->youtube_video_title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
										<iframe class="d-none  d-lg-block" width="100%" height="550px" src="{{$home_data->youtube_video_url}}" title="{{$home_data->youtube_video_title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
									@endif
								</div>  
									<h4 class="color-blue mt-2">{{$home_data->youtube_video_title}} </h4>
									<p class="c-category  video-p color-dark-blue">Date  |  {{Helper::formatDates($home_data->updated_at)}}</p>									
								</div>	
							</div>
						</div>						
					</div>
				</div>	
			</section>
			
		</div>

@endsection

@section('scripts') 
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
@endsection




