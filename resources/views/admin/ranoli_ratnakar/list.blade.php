@extends('admin.app')
@section('styles') 
	<link href="{{asset('backend\assets\css\datatables\datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
                <div class="main-content">
                    <div class="container-fluid"> 
                        <div class="card">
							<div class="container px-0">
								<div class="card-header ">
									<h3 class="card-title">{{__('ranoli_ratnakar.ranoli_ratnakar_list')}} </h3>
									<div class="card-toolbar">
										<div class="row text text-white-50 text-center">
											<div class=" align-items-center d-flex">									
												<div class=" text-end">
													<a href="{{ route('admin.dashboard') }}"  class="btn btn-gradient-danger">{{__('button.back')}}</a>
													<a href="{{ route('ranoli-ratnakar.create') }}"  class="btn btn-gradient-primary">{{__('ranoli_ratnakar.ranoli_ratnakar_add')}}</a>
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
                            <div class="card-body">
                                <div class="table-overflow">
                                    <table id="dt-opt" class="table table-hover table-xl table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="text-center">{{__('ranoli_ratnakar.sr_no')}}</th>
                                                <th class="text-center">{{__('ranoli_ratnakar.title')}}</th>
                                                <th class="text-center">{{__('ranoli_ratnakar.order')}}</th>
                                                <th class="text-center">{{__('ranoli_ratnakar.url_slug')}}</th>        
												<th class="text-center">{{__('ranoli_ratnakar.type')}}</th>                                                
                                                <th class="text-center">{{__('ranoli_ratnakar.status')}}</th>   												
                                                <th class="text-center">{{__('ranoli_ratnakar.action')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>		
										@if(empty($data))	
											<tr>			
												<td colspan="5" class="text-center">No Data available</td>		
											</tr>	
										@else 
											@foreach($data as $key=>$val)
												<tr>                                               
													<td class="text-center col-1" >{{$key + 1}}</td>
													<td class="text-center col-3" >{{ucfirst($val->title)}}</td>
													<td class="text-center col-1" >{{"$val->order"}}</td>
													<td class="text-center col-2">	<span  ><a class="btn btn-success btn-sm px-2 py-1"  href="{{$val->url_slug}}" target="_blank" title="{{__('sahitya.download')}}" ><i class="ti-download text-white"></i></a></span>			      
													<td class="text-center col-2">	
													@if(isset($val->type) && $val->type == 1)
														{{__('ranoli_ratnakar.photo')}}	
													@else	
														{{__('ranoli_ratnakar.video')}}
													@endif	
													</td>                                         
													<td class="text-center col-1">
														@if(isset($val->status) && $val->status == 1)
															<span class="badge badge-gradient-success" >{{__('ranoli_ratnakar.active')}}</span>
														@else
															<span class="badge badge-warning " >{{__('ranoli_ratnakar.unactive')}}</span>
														@endif
													</td>
												   <td class="text-center font-size-25">
														<a href="{{ route('ranoli-ratnakar.edit',$val->id) }}" class="text-gray m-r-15 btn btn-success btn-sm px-2 py-1"><i class="ti-pencil text-white"></i></a>
														<a data-ranoli_ratnakar_id="{{$val->id}}" class="text-gray delete_ranoli_ratnakar btn btn-danger btn-sm px-2 py-1"><i class="ti-trash text-white"></i></a>
													</td>
												</tr>
											 @endforeach	
										 @endif
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
                        </div>   
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
@endsection
@section('scripts') 
<script>
    	var ok = "{{trans('button.ok')}}" ; 
    	var alert = "{{trans('messages.alert')}}" ; 
    	var are_you_sure = "{{trans('messages.are_you_sure')}}" ; 
    	var delete_this_data = "{{trans('messages.delete_this_data')}}" ; 
    	var yes_Delete_it = "{{trans('messages.yes_Delete_it')}}" ; 
    	var no_Cancel = "{{trans('messages.no_Cancel')}}" ; 
</script>
<script>
	$(document).on('click','.delete_ranoli_ratnakar', function () {
		var PostId = $(this).data("ranoli_ratnakar_id");		
		var Action = "{{ route('ranoli-ratnakar.destroy', 'ranoli_ratnakar_id') }}".replace('ranoli_ratnakar_id', PostId);
console.log(Action) ;	
	Swal.fire({
			title: are_you_sure,
			text:  delete_this_data,
			icon: "question",
			showCancelButton: true,  
			confirmButtonText: yes_Delete_it,
			cancelButtonText: no_Cancel,
			}).then(function(result) {
			  if (result.value) {
				$.ajax({
					url: Action,
					type: "DELETE",
					data: {PostId: PostId,},
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
@endsection