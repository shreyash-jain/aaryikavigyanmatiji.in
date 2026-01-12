@extends('admin.app')
@section('styles') 
<link href="{{asset('backend\assets\vendor\bootstrap-datepicker\dist\css\bootstrap-datepicker3.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
	<div class="main-content">
		<div class="container-fluid">  			
			<div class="card">
				<div class="container px-0">
					<div class="card-header ">
						<h3 class="card-title">{{__('oshadhi.oshadhimanjoosha')}} </h3>
						<div class="card-toolbar">
							<div class="row text text-white-50 text-center">
								<div class=" align-items-center d-flex">									
									<div class=" text-end">
										<a href="{{ route('admin.dashboard') }}"  class="btn btn-gradient-danger">{{__('button.back')}}</a>
										<a href="{{ route('oshadhi_manjoosha.create') }}"  class="btn btn-gradient-primary">{{__('oshadhi.add_oshadhi')}}</a>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>		
				@if(session()->has('success'))
					<div class="alert alert-success text-center">
						{{ session()->get('success') }}
					</div>	
				@endif
				@if(session()->has('error'))
					<div class="alert alert-danger text-center">
						{{ session()->get('error') }}
					</div>	
				@endif	
				
				@if($data->isEmpty())   	
					<div class="alert alert-warning text-center" role="alert">
						कोई औषधि प्रकाशित नहीं की गई है | 
					</div>
				@else
				<div class="card-body">
					<div class="table-overflow">
						<table id="dt-opt" class="table table-hover table-xl  table-bordered">
							<thead class="thead-light">
								<tr>  
									<th class="text-center">{{__('oshadhi.name')}}</th>
									<th class="text-center">{{__('oshadhi.short_description')}}</th>									
									<th class="text-center">{{__('oshadhi.status')}}</th>
									<th class="text-center">{{__('oshadhi.order')}}</th>
									<th class="text-center">{{__('oshadhi.action')}}</th>
								</tr>
							</thead>
							<tbody>
							@foreach($data as $key=>$val)
								<tr>
									<td class="text-center col-3">
										<div class="info">
											<span class="title">{{$val->name}}</span>
										</div>
									</td>
									<td class="text-center col-3">
										<div class="info">
											<span class="title"><?php
													$result = "<div>";
													$result .= substr(ucfirst($val->short_description), 0, 100);
													if (strlen($val->short_description) >= 100) {
														$result .= "<a href='#' class='name-popover' data-toggle='popover' title='Full short description' data-content='{$val->short_description}'>...</a></div>";
													}
													echo $result;
												?>
											</span>
										</div>
									</td>	
									<td class="text-center">
									@if(isset($val->status) && $val->status == 1)
										<span class="badge badge-gradient-success" >{{__('oshadhi.active')}}</span>
									@else
										<span class="badge badge-warning" >{{__('oshadhi.unactive')}}</span>
									@endif
								   </td>
									<td class="text-center">
										<div class="info">
											<span class="title">{{$val->order}}</span>
										</div>
									</td>
									<td class="text-center font-size-25">  
										<a  href="{{ route('oshadhi_manjoosha.edit',$val->id) }}" class="text-gray m-r-15  btn-success btn-sm px-2 py-1"><i class="ti-pencil text-white"></i></a> 
										<a  data-oshadhi_id="{{$val->id}}"  class="text-gray delete_oshadhi btn-danger btn-sm px-2 py-1"><i class="ti-trash text-white"></i></a>
									
									</td>
								</tr>								
							  @endforeach	    
							</tbody>
						</table>
						<nav aria-label="Page navigation">
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
					</div> 
				</div>  
				@endif							
			</div>   
		</div>
	</div>


	
@endsection
@section('scripts') 
<script src="{{asset('backend\validation\jquery.validate.js')}}"></script>
 <script>
    	var ok = "{{trans('button.ok')}}" ; 
    	var alert = "{{trans('messages.alert')}}" ; 
    	var are_you_sure = "{{trans('messages.are_you_sure')}}" ; 
    	var delete_this_data = "{{trans('messages.delete_this_data')}}" ; 
    	var yes_Delete_it = "{{trans('messages.yes_Delete_it')}}" ; 
    	var no_Cancel = "{{trans('messages.no_Cancel')}}" ; 
</script>

<script>

$(document).on('click','.delete_oshadhi', function () {
	var OshadhiId = $(this).data("oshadhi_id");
	var OshadhiAction = "{{ route('oshadhi_manjoosha.destroy', '_oshadhi_id_') }}".replace('_oshadhi_id_', OshadhiId);
	Swal.fire({
		title: are_you_sure,
		text:  delete_this_data,
		icon: "warning",
		showCancelButton: true,  
		confirmButtonText: yes_Delete_it,
		cancelButtonText: no_Cancel,
		}).then(function(result) {
		  if (result.value) {
			$.ajax({
				url: OshadhiAction,
				type: "DELETE",
				data: {OshadhiId: OshadhiId,},
				 headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},								
					
				beforeSend: function(){
					$("#loading").show();
				},
				complete: function(){ 
					$("#loading").hide();
				},
				success: function (response) {
					//console.log(response)
					if (response.error==false) {
						Swal.fire({
							title: alert,
							html: response.message,
							icon: "success",
							showCancelButton: false,
							confirmButtonText: ok,
						}).then(function(result) {
							location.reload();
						})	
					}
				}
			});
		} 
	})
		
});
</script>
<script src="{{asset('backend\assets\js\sweetalert\sweetalert.min.js')}}"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();

    $(document).on('click', function (e) {
        $('[data-toggle="popover"]').each(function () {
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });

    $('.name-popover').on('click', function (e) {
        e.stopPropagation(); 
        e.preventDefault(); 
        return false; 
    });
});
    </script>
@endsection