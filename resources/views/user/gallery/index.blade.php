@extends('user.app')
@section('content')

		<!-- Header End -->
		<!-- Content Start -->
		<div class="main-body">		
			<section class="wakil-blog-layout section-p-100">
				<div class="container text-center">
				@if($data->isEmpty())   	
					<div class="alert alert-warning" role="alert">
						कोई फ़ोटो प्रकाशित नहीं की गई है | 
					</div>
				@else
				<h2 class="color-text color-blue mb-25 ds">गैलरी</h2>							
							<div class="masonry">
						
								@foreach($data as $key=>$val)	
								@if($val->exists())   
									<div class="blog__box brick">
										<div class="blog_image1 ">
											<img class="b-radiu imageclick img-thumbnail" data-bs-toggle="modal" id="images_{{$val->id}}" data_url="https://drive.google.com/thumbnail?id={{$val->image_url}}&sz=w1000"  data_title="{{$val->title}}" src="https://drive.google.com/thumbnail?id={{$val->image_url}}&sz=w1000" width="100%"  alt="{{$val->title}}">
											<div class="blog_category">
												<h4>
													@if(isset($val->is_new) && $val->is_new == 1)
													<span class="badge badge-pill badge-gradient-success">New</span>
													@endif
												</h4>
											</div>
										</div>
										<div class="">
											<span class="image-title"><a href="https://drive.google.com/thumbnail?id={{$val->image_url}}&sz=w1000" target=_blank>{{$val->title}}</a></span>
										</div>
									</div>
								@endif
								@endforeach	    
																		
							</div>		
					@endif
				</div>
			</section>
		</div>	
		
	<div class="modal fade" id="fullpage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					 <h5 class="modal-title" id="fullpageLabel"></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<img class="img-fluid" id="fullScreenImage" src="" alt="Full Screen Image">
				</div>
			</div>
		</div>
	</div>    
@endsection
@section('scripts')

<script >
	$('.imageclick').on('click', function (e) {
		e.preventDefault();
		var urlSlug = $(this).attr('data_url');
		var imageTitle = $(this).attr('data_title');
		// console.log('Clicked');
		 //console.log(urlSlug);
		// console.log(imageTitle);
		// Set modal content
		$('#fullpage').modal('show');
		$('#fullScreenImage').attr('src', urlSlug);
		$('#fullpageLabel').text(imageTitle);
	});
</script>

@endsection