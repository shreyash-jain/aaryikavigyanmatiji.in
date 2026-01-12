@extends('admin.app')
@section('styles') 
@endsection
@section('content')
                <div class="main-content">
                    <div class="container-fluid">						
                        <div class="card">							
							<div class="container px-0">
								<div class="card-header ">
									<h3 class="card-title">{{__('suvichar_image.suvichar_images')}}</h3>
									<div class="card-toolbar">
										<div class="row text text-white-50 text-center">
											<div class=" align-items-center d-flex">									
												<div class=" text-end">
													<a href="{{ route('admin.dashboard') }}"  class="btn btn-gradient-danger">{{__('button.back')}}</a>
													<a href="{{ route('suvichar_image.create') }}"  class="btn btn-gradient-primary">{{__('suvichar_image.add_image')}}</a>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
							@if(!empty($data))	
                            <div class="card-body">
                                <div class="table-overflow">
                                    <table id="dt-opt" class="table table-hover table-xl table-bordered">
                                        <thead class="thead-light">
                                            <tr> 
                                                <th class="text-center">{{__('suvichar_image.title')}}</th>                                            
                                                <th class="text-center">{{__('suvichar_image.image')}}</th>
                                                <th class="text-center">{{__('suvichar_image.type')}}</th>    
                                                <th class="text-center">{{__('suvichar_image.status')}}</th>                                            
                                                <th class="text-center">{{__('suvichar_image.order')}}</th>                                            
                                                <th class="text-center">{{__('suvichar_image.show_home')}}</th>                                            
                                                <th class="text-center">{{__('suvichar_image.action')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										@foreach($data as $key=>$val)
                                            <tr>
												<td>
													<div class="text-center">
														{{$val->title}}</span>
													</div>
												</td>	
												
												<td class="text-center col-2">	
													<span >
														<a class="btn btn-success btn-sm px-2 py-1"  href="{{$val->image_url}}" target="_blank" title="{{__('sahitya.download')}}" ><i class="ti-download text-white"></i></a>
													</span>	
												</td>
												
                                                <td class="text-center">
												@if(isset($val->type) && $val->type == 1)
													{{__('suvichar_image.suvichar')}}
												@else
													{{__('suvichar_image.sanskar_manjusha')}}</span>
												@endif
                                               </td>
                                                <td class="text-center">
												@if(isset($val->status) && $val->status == 1)
													<span class="badge badge-gradient-success" >{{__('suvichar_image.active')}}</span>
												@else
													<span class="badge badge-warning" >{{__('suvichar_image.unactive')}}</span>
												@endif
                                               </td>
											   <td class="text-center">
													<div class="info">
														<span class="title">{{$val->orders}}</span>
													</div>
												</td>
												<td class="text-center">
													@if(isset($val->show_home) && $val->show_home == 1)
														<span class="badge badge-gradient-success" >{{__('suvichar_image.yes')}}</span>
													@else			
														<span class="badge badge-warning" >{{__('suvichar_image.no')}}</span>
													@endif
												</td>
                                                <td class="text-center font-size-25">
												<a  href="{{ route('suvichar_image.edit',$val->id) }}" class="text-gray m-r-15 btn  btn-success btn-sm px-2 py-1"><i class="ti-pencil text-white"></i></a> 
												<a data-image_id="{{$val->id}}" class="text-gray delete_image btn btn-danger btn-sm px-2 py-1"><i class="ti-trash text-white"></i></a>
                                                </td>
                                            </tr>
                                            
                                          @endforeach	    
                                        </tbody>
                                    </table>
                                </div> 
                            </div>  
							@endif							
                        </div>   
                    </div>
                </div>
	


@endsection
@section('scripts') 
<script>
    	var ok = "{{trans('button.ok')}}" ; 
    	var alert = "{{trans('messages.alert')}}" ; 
    	var are_you_sure = "{{trans('messages.are_you_sure')}}" ; 
    	var delete_this_image = "{{trans('messages.delete_this_image')}}" ; 
    	var yes_Delete_it = "{{trans('messages.yes_Delete_it')}}" ; 
    	var no_Cancel = "{{trans('messages.no_Cancel')}}" ; 
    </script>
<script>


$(document).on('click','.delete_image', function () {
	var ImageId = $(this).data("image_id");
	var suvicharAction = "{{ route('suvichar_image.destroy', '_text_id_') }}".replace('_text_id_', ImageId);
	Swal.fire({
		title: are_you_sure,
		text:  delete_this_image,
		icon: "question",
		showCancelButton: true,  
		confirmButtonText: yes_Delete_it,
		cancelButtonText: no_Cancel,
		}).then(function(result) {
		  if (result.value) {
			$.ajax({
				url: suvicharAction,
				type: "DELETE",
				data: {ImageId: ImageId,},
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