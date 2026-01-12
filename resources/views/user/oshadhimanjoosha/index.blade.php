@extends('user.app')
@section('styles')
<style>
	.modal-body ul {
		list-style-type: inherit;
	}
	.modal-body ol {
		list-style-type: inherit;
	}
</style>

@endsection
@section('content')
		<!-- Header End -->	
		<div class="main-body">
			<section class="skilled-services section-p-100 ">
				<div class="container">
					<div class=" text-center">
						<h2 class="color-text color-blue mb-25 ds">पूज्य आर्यिका श्री की करुणा  </h2>
					</div>										
					<div class="row ">
						<div class="col-12 col-md-6 ">							
						</div>
						<div class="col-12 col-md-6 text-right ">
							<form class="d-flex" role="search"  action="{{ route('oshadhi_manjoosha.getall') }}" method="GET" enctype="multipart/form-data" >					
								<input class="form-control me-2" type="text" placeholder="Type here to search" name="search" aria-label="Search">
								<button class="btn btn-secondary semi_black" type="submit">Search</button>
								@php $search =  request()->input('search');  @endphp
								@if(!empty ($search))
									<a href="{{ route('oshadhi_manjoosha.getall') }}" class="btn btn-danger ms-1 " type="buttion">Clear</a>
								@endif
							</form>
						</div>
					</div>
										
					<div class="row align-items-center mt-3">					
						@if($data->isEmpty())   	
						<div class="alert alert-warning text-center mt-5" role="alert">
							कोई औषधि प्रकाशित नहीं की गई है | 
						</div>
						@else
						@foreach($data as $key=>$val)
						<div class="card text-center mt-3">
							<div class="card-header">											
							</div>
							<div class="card-body">
								<h5 class="card-title">{{$val->name}}	</h5>
								<p class="card-text">
								{{$val->short_description}}			
								
								</p>																						
								<a href="#" class="btn btn-secondary oshadhiclick semi_black" data-bs-toggle="modal" id="oshadh_{{$val->id}}"  data_name="{{$val->name}}" data_description="{{$val->description}}" >और पढ़े</a>
							</div>
							<div class="card-footer text-muted">							
							</div>
						</div>
					@endforeach						
						<nav aria-label="Page navigation" style="margin-top: 30px;">
							<ul class="pagination justify-content-center">
								@if ($data->onFirstPage())
									<li class="page-item disabled">
										<span class="page-link">&laquo;</span>
									</li>
								@else
									<li class="page-item">
										<a class="page-link" href="{{ $data->previousPageUrl() }}" rel="prev">&laquo;</a>
									</li>
								@endif

									@for ($i = max(1, $data->currentPage() - 4); $i <= min($data->lastPage(), $data->currentPage() + 4); $i++)
										@if ($i == $data->currentPage())
											<li class="page-item active"><span class="page-link">{{ $i }}</span></li>
										@else
											<li class="page-item"><a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a></li>
										@endif
									@endfor
								@if ($data->hasMorePages())
									<li class="page-item">
										<a class="page-link" href="{{ $data->nextPageUrl() }}" rel="next">&raquo;</a>
									</li>
								@else
									<li class="page-item disabled">
										<span class="page-link">&raquo;</span>
									</li>
								@endif
							</ul>							
						</nav>
					@endif	
					</div>
				</div>
			</section>
			<div class="modal fade" id="fullpage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
				<div class="modal-dialog modal-dialog-centered modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							 <h5 class="modal-title" id="fullName"></h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body p-5" >
							<p id="fullDescription">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						 </div>
					</div>  
				</div>  
			</div>			
		</div>
@endsection

@section('scripts') 
<script >
	$('.oshadhiclick').on('click', function (e) {
		e.preventDefault();
		var Name = $(this).attr('data_name');
		var Description = $(this).attr('data_description');
		$('#fullpage').modal('show');
		$('#fullName').text(Name);
		$('#fullDescription').html(Description);  
	});
</script>


@endsection