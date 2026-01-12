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
									<h3 class="card-title">{{__('classes.classes_list')}} </h3>
									<div class="card-toolbar">
										<div class="row text text-white-50 text-center">
											<div class=" align-items-center d-flex">									
												<div class=" text-end">
													<a href="{{ route('admin.dashboard') }}"  class="btn btn-gradient-danger">{{__('button.back')}}</a>
													<a href="{{ route('classes.create') }}"  class="btn btn-gradient-primary">{{__('classes.classes_add')}}</a>
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
                                                <th class="text-center">{{__('classes.thumbnail')}}</th>
                                                <th class="text-center">{{__('classes.title')}}</th>
                                                <th class="text-center">{{__('classes.order')}}</th>
                                                <th class="text-center">{{__('classes.date')}}</th>
                                                <th class="text-center">{{__('classes.url_slug')}}</th>        
												<th class="text-center">{{__('classes.type')}}</th>                                                
                                                <th class="text-center">{{__('classes.status')}}</th>   												
                                                <th class="text-center">{{__('classes.action')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>										@if(empty($data))											 <tr>												<td colspan="8" class="text-center">No Data available</td>											</tr>										@else 
										@foreach($data as $key=>$val)
                                            <tr>                                               
                                                <td class="text-center col-2" >
													<div class="list-media">
                                                        <div class="list-item">
															<img src="{{ asset('frontend/images/thumbnails/' . $val->thumbnail) }}" width="100" height="100" alt="">                                                          
                                                        </div>
                                                    </div>
												</td>
                                                <td class="text-center col-3" >{{"$val->title"}}</td>
                                                <td class="text-center col-1" >{{"$val->order"}}</td>
												<td class="text-center col-1" >{{ \Carbon\Carbon::parse($val->date)->format('d-m-Y') }}</td>
												<td class="text-center col-1">	<span  ><a class="btn btn-success btn-sm px-2 py-1"  href="{{$val->url_slug}}" target="_blank" title="{{__('sahitya.download')}}" ><i class="ti-download text-white"></i></a></span>			      
												<td class="text-center col-1">	
												@if(isset($val->type) && $val->type == 1)
													{{__('classes.video')}}	
												@else
													{{__('classes.audio')}}	
												@endif	
												</td>                                         
												<td class="text-center col-1">
													@if(isset($val->status) && $val->status == 1)
														<span class="badge badge-gradient-success" >{{__('pravachan_video.active')}}</span>
													@else
														<span class="badge badge-warning " >{{__('pravachan_video.unactive')}}</span>
													@endif
												</td>
											   <td class="text-center font-size-25">
                                                    <a href="{{ route('classes.edit',$val->id) }}" class="text-gray m-r-15 btn btn-success btn-sm px-2 py-1"><i class="ti-pencil text-white"></i></a>
													<a data-classes_id="{{$val->id}}" class="text-gray delete_classes btn btn-danger btn-sm px-2 py-1"><i class="ti-trash text-white"></i></a>
                                                </td>
                                            </tr>
                                         @endforeach											@endif
                                        </tbody>
                                    </table>
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
	$(document).on('click','.delete_classes', function () {
		var ClassId= $(this).data("classes_id");		
		var Action = "{{ route('classes.destroy', '_classes_id_') }}".replace('_classes_id_', ClassId);
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
					data: {ClassId: ClassId,},
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