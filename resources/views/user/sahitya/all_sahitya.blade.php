@extends('user.app')
@section('styles') 

@endsection
@section('content')
		<div class="main-body">
			<section class="wakil-blog-layout section-p-100">
				<div class="container text-center">
				@php  
					$views_arr = [];
                    foreach ($views as $value) {
                        $views_arr[$value->link] = $value->view_count;
                    }
				@endphp	
					<h2 class="color-text color-blue mb-25 ds">साहित्य </h2>
					<div class="row">
					@if($all_sahitya->isEmpty())					
						<div class="alert alert-warning mt-3" role="alert">
							कोई किताब प्रकाशित नहीं की गई है | 
						</div>
					@else
						<div class="col-12 mt-3">							
							<div class="row case-card-v2">
								@foreach($all_sahitya as $key=>$val)
								@php
									$count = isset($views_arr[$val->file]) ? $views_arr[$val->file] : 0;
								@endphp
								<div class="col-12 col-md-3">
								@if($val->file_type == 1)
									<a href="{{asset('frontend/images/sahitya_file/'.$val->file)}}" target="_blank" class="count_view"  data-link="{{$val->file}}" data-bs-toggle="popover"  data-bs-html="true"  data-bs-content="{{$val->title}}" data-bs-trigger="hover" >
								@else 
									<a href="{{$val->file}}" target="_blank"  data-bs-toggle="popover" class="count_view"  data-link="{{$val->file}}"  data-bs-content="{{$val->title}}" data-bs-trigger="hover" >
								@endif	
									<div class="blog__box">
										<div class="blog_image position-relative">
											<h3 class="d-none">None</h3>
											<img class="b-radiu" src="{{asset('frontend/images/sahitya/'.$val->image)}}" width ="374" height="374" alt="blog-image">
											<div class="overlay-bottom position-absolute  text-black text-center" style=" bottom: 0; right: 0; padding-bottom: 10px; padding-right: 10px;">
												<small><svg  width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
														  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
														  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
														</svg>
												<span id="view-count-{{ $val->id }}">{{ $count }}</span>  </small>
											</div> 
										</div>
										<div class="mb-25">
											<h4 class="heading_hover"  >{{$val->name}}</h4>
										</div>
									</div>
									</a>    
								</div>	
								@endforeach																																									
							</div>									   
						</div>
					</div>
					@endif
				</div>
			</section>
		
		</div>
@endsection

@section('scripts') 
<script>
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
	  return new bootstrap.Popover(popoverTriggerEl)
	});
</script>

@endsection 