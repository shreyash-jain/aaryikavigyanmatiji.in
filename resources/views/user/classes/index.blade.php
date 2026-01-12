@extends('user.app')
@section('content')
		<div class="main-body">		
			<div class="container text-center" style="max-width: 1350px;">
				<section class="blog-sidebar-page section-p-100  text-center">
				@if($data->isEmpty())
					<div class="alert alert-warning" role="alert">      कोई कक्षाएं प्रकाशित नहीं की गई है | 	</div>
				@else
					<h2 class="color-text color-blue mb-25 ds"> कक्षाएं </h2>
					<div class="row">	  
						@foreach($data as $val)	
						@if($val->type==1)
						<div class=" col-sm-6 col-md-4 mb-25">
							<div class="video-single-blog ">
								<div class="video-blog">
									<div class="video-thumbnail">
										<img class="b-radiu object_position img-thumbnail" src="{{ asset('frontend/images/thumbnails/'.$val->thumbnail) }}"  height="135" alt="Thumbnail">
										<a id="play-video_{{$val->id}}" data_url="{{$val->url_slug}}" data_title="{{$val->title}}" class="video-play-button" href="javascript:void(0);"><span></span></a>
									</div>
									<div id="video-overlay" class="video-overlay" >
										<a class="video-overlay-close">&times;</a>
									</div>	
								</div>
							</div>
							<p class=" color-blue text-uppercase mt-1">{{$val->title}}</p>
							<p style="margin-top: 0px !important;  font-size: 15px !important; "class="color-blue">Date {{ date('d-M-Y', strtotime($val->date))}}</p>
						</div>
						
						@else
						<div class=" col-sm-6 col-md-4 mb-25">
							<div class="video-single-blog ">
							    <div class="video-blog">
    						<!--		<div class="play1_button object_position img-thumbnail" style="background-image: url('{{ asset('frontend/images/thumbnails/'.$val->thumbnail) }}'); background-size: cover; background-repeat: no-repeat; height: 290px;">
                                        <a id="play-audio_{{ $val->id }}"  data-url="https://drive.google.com/file/d/{{$val->url_slug}}/preview" data-title="{{ $val->title }}" class="button play_audio " href="#">
                                            <span></span>
                                        </a>
                                    </div> -->
                                    <div class="video-thumbnail play1_button">
										<img class="b-radiu object_position img-thumbnail " src="{{ asset('frontend/images/thumbnails/'.$val->thumbnail) }}"  height="135" alt="Thumbnail">
										<a id="play-audio_{{ $val->id }}"  data-url="https://drive.google.com/file/d/{{$val->url_slug}}/preview" data-title="{{ $val->title }}" class="button play_audio " href="#">
                                            <span></span>
                                        </a></img>
									</div>
                                    
                                </div>
							</div>
							<p class=" color-blue text-uppercase mt-1">{{$val->title}}</p>
							<p style="margin-top: 0px !important;  font-size: 15px !important; "class="color-blue">Date {{ date('d-M-Y', strtotime($val->date))}}</p>
						</div>
						@endif
						@endforeach
					</div>  					
					@endif	
				</section>
			</div>
		</div>
		
		
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="fullpageLabel"></h1>
        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
			<iframe  id="audioPlayer" src=" " width="100%" ></iframe> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>				
@endsection
@section('scripts')  
	<script>
		$(document).on('click','.play1_button',function() {
			var audioUrl = $(this).find('a.play_audio').data('url');
			var audioTitle = $(this).find('a.play_audio').data('title');	
				$('#audioPlayer').attr('src', audioUrl);
				$('#fullpageLabel').text(audioTitle);
				$('#exampleModal').modal('show');			
		});		


	$(document).on('hide.bs.modal', '#exampleModal', function (e) {
		console.log('Modal is hiding');		
		 
	});

	</script>
<script src="{{asset('frontend\assets\js\custom.js')}}"></script>
@endsection