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
									<h3 class="card-title">{{__('sanghast_aaryika.sanghast_aaryika')}}  {{__('sanghast_aaryika.list')}}</h3>
									<div class="card-toolbar">
										<div class="row text text-white-50 text-center">
											<div class=" align-items-center d-flex">									
												<div class=" text-end">
													<a href="{{ route('admin.dashboard') }}"  class="btn btn-gradient-danger">{{__('button.back')}}</a>	
													<a href="{{ route('sanghast_aaryika.create') }}"  class="btn btn-gradient-primary">{{__('sahitya.saahity_add')}}</a>	
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
                                                <th class="text-center">{{__('sanghast_aaryika.mata_ji_name')}}</th>
												<th class="text-center">{{__('sanghast_aaryika.orde_number')}}</th>
                                                <th class="text-center">{{__('sanghast_aaryika.father_name')}}</th>
                                                <th class="text-center">{{__('sanghast_aaryika.date_of_birth')}}</th>
                                                <th class="text-center">{{__('sanghast_aaryika.initiation_guru')}}</th>
                                                <th class="text-center">{{__('sanghast_aaryika.action')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>											@if(empty($data))												 <tr>													<td colspan="6" class="text-center">No Data available</td>												</tr>											@else 
										@foreach($data as $key=>$val)
                                            <tr>                                               
                                                
												<td class="text-center col-3">
                                                    <div class="list-media">
                                                        <div class="list-item">       
                                                            <div class="media-img">
                                                                <img src="{{ asset('frontend/images/aaryika/' . $val->image) }}" width="100" height="100" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <span class="title">{{"$val->name"}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
												<td class="text-center col-1">{{"$val->serial_number"}}</td>
                                                <td class="text-center col-2">{{"$val->father_name"}}</td>
                                                <td class="text-center col-2">{{"$val->date_of_birth"}}</td>
                                                <td class="text-center col-2">{{"$val->initiation_guru"}}</td>
                                                <td class="text-center font-size-25">
                                                    <a href="{{ route('sanghast_aaryika.edit',$val->id) }}" class="text-gray m-r-15 btn btn-success btn-sm px-2 py-1"><i class="ti-pencil text-white"></i></a>
													<a data-aaryika_id="{{$val->id}}" class="text-gray delete_aaryika btn btn-danger btn-sm px-2 py-1"><i class="ti-trash text-white"></i></a>
                                                </td>
                                            </tr>
                                         @endforeach	    										@endif
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
    	var ok = "{{trans('buttion.ok')}}" ; 
    	var alert = "{{trans('messages.alert')}}" ; 
    	var are_you_sure = "{{trans('messages.are_you_sure')}}" ; 
    	var delete_this_data = "{{trans('messages.delete_this_data')}}" ; 
    	var yes_Delete_it = "{{trans('messages.yes_Delete_it')}}" ; 
    	var no_Cancel = "{{trans('messages.no_Cancel')}}" ; 
</script>
<script>
	$(document).on('click','.delete_aaryika', function () {
		var AaryikaId = $(this).data("aaryika_id");		
		var Action = "{{ route('sanghast_aaryika.destroy', '_aaryika_id_') }}".replace('_aaryika_id_', AaryikaId);
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
					data: {AaryikaId: AaryikaId,},
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