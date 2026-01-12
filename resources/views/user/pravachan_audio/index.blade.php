@extends('user.app')
@section('content')
		<div class="main-body">		
			<section class="blog-sidebar-page section-p-100 left-sidebar-res reveal1">
				<div class="container text-center">	
				@if(empty($data))
					<div class="alert alert-warning" role="alert">	
						कोई ऑडियो प्रकाशित नहीं की गई है | 	
					</div>	
				@else
					<h2 class="color-text color-blue ds">प्रवचन  ऑडियो</h2>
					<div class="row">			
						@foreach($data as $val)					
						<div class=" col-sm-6 col-md-4 mb-25">
							<div class="video-single-blog ">
								<div class="play1_button object_position img-thumbnail" style="background-image: url('{{ asset('frontend/images/thumbnails/'.$val->thumbnail) }}'); background-size: cover; background-repeat: no-repeat; height: 300px;">
                                    <a id="play-audio_{{ $val->id }}"  data-url="https://drive.google.com/file/d/{{$val->url_slug}}/preview" data-title="{{ $val->title }}" class="button play_audio " href="#">
                                        <span></span>
                                    </a>
                                </div>
							</div>
							<p class=" color-blue text-uppercase mt-1">{{$val->title}}</p>
							<p style="margin-top: 0px !important;  font-size: 15px !important; "class="color-blue">Date {{Helper::formatDates($val->created_at)}}</p>
						</div>
						@endforeach						
					</div>
					
				@endif
				</div>	
			</section>
		</div>
<!--		<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="fullpageLabel"></h5>
						<button type="button" class="close cls_btn" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<iframe  id="audioPlayer" src="" width="100%" ></iframe> 
					</div>
					<div class="modal-footer">
						<button class="btn btn-default cls_btn" data-dismiss="modal">{{ __('button.cancel') }}</button>
					</div>
				</div>
			</div>
		</div>	-->
                

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
@endsection     