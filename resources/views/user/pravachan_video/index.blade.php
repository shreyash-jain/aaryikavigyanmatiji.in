@extends('user.app')
@section('content')
		<div class="main-body">		
			<div class="container text-center" style="max-width: 1350px;">
				<section class="blog-sidebar-page section-p-100  text-center">
				@if($data->isEmpty())
					<div class="alert alert-warning" role="alert">      कोई वीडियो प्रकाशित नहीं की गई है | 	</div>
				@else
					<h2 class="color-text color-blue mb-25 ds"> {{$title}} </h2>
					<div class="row">	  
						@foreach($data as $val)					
						<div class=" col-sm-6 col-md-4 mb-25">
							<div class="video-single-blog ">
								<div class="video-blog">
									<div class="video-thumbnail">
										<img class="b-radiu object_position img-thumbnail" src="{{ asset('frontend/images/thumbnails/'.$val->thumbnail) }}"  height="135" alt="Thumbnail">
								<!--		<button id="play-video" class=" play-video-button">  -->
										<a id="play-video_{{$val->id}}" data_url="{{$val->url_slug}}" data_title="{{$val->title}}" class="video-play-button" href="javascript:void(0);"><span></span></a>
								<!--		</button>  -->
									</div>
									<div id="video-overlay" class="video-overlay" >
										<a class="video-overlay-close">&times;</a>
									</div>	
								</div>
							</div>
							<p class=" color-blue text-uppercase mt-1">{{$val->title}}</p>
							<p style="margin-top: 0px !important;  font-size: 15px !important; "class="color-blue">Date {{ date('d-M-Y', strtotime($val->date))}}</p>
						</div>
						@endforeach
					</div>  					
					@endif	
				</section>
			</div>
		</div>	
@endsection
@section('scripts') 
 
<script src="{{asset('frontend\assets\js\custom.js')}}"></script>
@endsection