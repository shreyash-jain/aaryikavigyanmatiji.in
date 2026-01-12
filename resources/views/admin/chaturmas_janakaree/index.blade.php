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
						<h3 class="card-title">{{__('chaturmas.chaturmas')}} </h3>
						<div class="card-toolbar">
							<div class="row text text-white-50 text-center">
								<div class=" align-items-center d-flex">									
									<div class=" text-end">
										<a href="{{ route('admin.dashboard') }}"  class="btn btn-gradient-danger">{{__('button.back')}}</a>
										<button type="button" id="addChaturmasButton" class="btn btn-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">{{__('chaturmas.add')}}</button>
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
									<th class="text-center">{{__('chaturmas.date')}}</th>
									<th class="text-center">{{__('chaturmas.location')}}</th>
									<th class="text-center">{{__('chaturmas.action')}}</th>
								</tr>
							</thead>
							<tbody>
							@if(empty($data))
								 <tr>
									<td colspan="3" class="text-center">No Data available</td>
								</tr>
							@else 
							@foreach($data as $key=>$val)
								<tr>
									<td class="text-center col-3">
										<div class="info">
											<span class="title">{{__('chaturmas.year')}} {{$val->date}}</span>
										</div>
									</td>
									<td class="text-center ">
										<div class="info">
											<span class="title ">{{$val->location}}</span>
										</div>
									</td>									
									<td class="text-center font-size-25">
										<a  data-chaturmas_id="{{$val->id}}" class="text-gray m-r-15 editChaturmasButton btn btn-success btn-sm px-2 py-1" data-bs-toggle="modal" data-bs-target="#editexampleModal" data-bs-whatever="@mdo"><i class="ti-pencil text-white"></i></a>
										<a  data-chaturmas_id="{{$val->id}}"  class="text-gray delete_chaturmas btn btn-danger btn-sm px-2 py-1"><i class="ti-trash text-white"></i></a>
									</td>
								</tr>								
								@endforeach	
								@endif 
							</tbody>
						</table>							
					</div> 
				</div>  
											
			</div>   
		</div>
	</div>
	<div class="modal fade" id="add_chaturmas_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">{{__('chaturmas.add_chaturmas')}}</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form id="add_chaturmas_form" action="{{ route('chaturmas.store') }}" method="post">
			 @csrf
				
				<div class="mb-3">
					<label class="col-form-label">{{__('chaturmas.date')}} <span class="text-danger">*</span></label>
					<div class="input-group ">						
						<div class="icon-input">
							<i class="mdi mdi-timer"></i>
							<input  id="datepicker"  data-provide="datepicker" name="date"  type="text" class="dateformate form-control " placeholder="{{__('chaturmas.enter_date')}}">								
						</div>				
						<span class="input-group-text" id="basic-addon2">{{__('chaturmas.year')}}</span>						
					</div>
					<label id="datepicker-error" class="error" for="datepicker"></label>
					@error('date')
						<div class="alert alert-danger">{{ $date }}</div>
					@enderror
					
				</div>
				<div class="mb-3 ">		
					<label for="recipient-name" class="col-form-label">{{__('chaturmas.location')}}<span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="location" name="location" placeholder="{{__('chaturmas.enter_location')}}">
					@error('location')
						<div class="alert alert-danger">{{ $location }}</div>
					@enderror
				</div>								
				<div class="modal-footer">
					<button class="btn btn-gradient-danger" data-dismiss="modal">{{__('button.cancel')}}</button>
					<button type="submit" class="btn btn-gradient-primary">{{__('button.submit')}}</button>
				</div>
			</form>
		  </div>		  
		</div>
	  </div>
	</div>	

	<div class="modal fade" id="edit_chaturmas_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">{{__('chaturmas.edit_chaturmas')}}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="edit_chaturmas_form"  action="{{ route('chaturmas.update_save') }}" method="post">
						@csrf
						<input type="hidden" id="edit_chaturmas_id" name="chaturmas_id" >
						<div class="mb-3">
							<label class="col-form-label">{{__('chaturmas.date')}} <span class="text-danger">*</span></label>
							<div class="input-group ">						
								<div class="icon-input">
									<i class="mdi mdi-timer"></i>
									<input  id="datepickers"  data-provide="datepicker" name="date"  type="text" class="dateformate form-control " placeholder="{{__('chaturmas.enter_date')}}">								
								</div>				
								<span class="input-group-text" id="basic-addon2">{{__('chaturmas.year')}}</span>						
							</div>
							<label id="datepicker-error" class="error" for="datepicker"></label>
							@error('date')
								<div class="alert alert-danger">{{ $date }}</div>
							@enderror							
						</div>
						<div class="mb-3 ">		
							<label for="recipient-name" class="col-form-label">{{__('chaturmas.location')}}<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="locations" name="location" placeholder="{{__('chaturmas.enter_location')}}">
							@error('location')
								<div class="alert alert-danger">{{ $location }}</div>
							@enderror
						</div>	
						<div class="modal-footer">
							<button class="btn btn-gradient-danger" data-dismiss="modal">{{__('button.cancel')}}</button>
							<button type="submit" class="btn btn-gradient-primary" >{{__('button.submit')}}</button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>
@endsection
@section('scripts') 
<script type="text/javascript">
    $(document).ready(function(){
        $('.dateformate').datepicker({
             format: 'yyyy', 
        });
		$('.dateformate').datepickers({
             format: 'yyyy', 
        });
    });
</script>
<script src="{{asset('backend\assets\vendor\bootstrap-datepicker\dist\js\bootstrap-datepicker.js')}}"></script>

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
	$('#addChaturmasButton').click(function() {
        $('#add_chaturmas_modal').modal({
            backdrop: 'static',
            keyboard: false
        });
	});
	
	$(document).ready(function(){
		$("#add_chaturmas_form").validate({
			onkeyup: function(element) {$(element).valid()},
			onchange: function(element) {$(element).valid()},
			onfocusout: false,
			rules: {
				date: {	required: true},
				location: {	required: true},
			},					
			
			messages: { 
			},
			submitHandler: function(form) {
				
			var datas = new FormData(form);
				$.ajax({
					url: form.action, 
					type: form.method,             
					data: datas,
					dataType: "json", 
					cache:false,
					contentType: false,
					processData: false,				
					success: function(data) {
						
						if(data.error==false){
							Swal.fire({
								text: data.message,
								icon: "success",
								showCancelButton: false,
								buttonsStyling: false,
								allowOutsideClick: false,
								confirmButtonText: "<?=trans('message.ok');?>", 
								customClass: {
									confirmButton: "btn font-weight-bold btn-primary",
								}
							}).then(function (result) {
								if (result.value) {
									location.reload();
								}
							});
						} 
						if(data.error==true){
							var html='<ul class="text-left text-danger">';
							$(data.errors).each(function(key, value){
								html +='<li>';
								html +=value;
								html +='</li>';
							});
							html +='</ul>';
								Swal.fire({
									html: html,
									icon: "warning",
									allowOutsideClick: false,
									buttonsStyling: false,
									confirmButtonText: "OK",
									customClass: {
										confirmButton: "btn font-weight-bold btn-primary",
									}
								});
						}
					}
				});
				return false;
			},
			highlight: function(element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
			}
		});	
		
		
		
		$("#edit_chaturmas_form").validate({
			onkeyup: function(element) {$(element).valid()},
			onchange: function(element) {$(element).valid()},
			onfocusout: false,
			rules: {
				date: {	required: true},
				location: {	required: true},
			},					
			
			messages: { 
			},
			submitHandler: function(form) {
				
			var datas = new FormData(form);
				$.ajax({
					url: form.action, 
					type: form.method,             
					data: datas,
					dataType: "json", 
					cache:false,
					contentType: false,
					processData: false,				
					success: function(data) {
						
						if(data.error==false){
							Swal.fire({
								text: data.message,
								icon: "success",
								showCancelButton: false,
								buttonsStyling: false,
								allowOutsideClick: false,
								confirmButtonText: "<?=trans('message.ok');?>", 
								customClass: {
									confirmButton: "btn font-weight-bold btn-primary",
								}
							}).then(function (result) {
								if (result.value) {
									location.reload();
								}
							});
						} 
						if(data.error==true){
							var html='<ul class="text-left text-danger">';
							$(data.errors).each(function(key, value){
								html +='<li>';
								html +=value;
								html +='</li>';
							});
							html +='</ul>';
								Swal.fire({
									html: html,
									icon: "warning",
									allowOutsideClick: false,
									buttonsStyling: false,
									confirmButtonText: "OK",
									customClass: {
										confirmButton: "btn font-weight-bold btn-primary",
									}
								});
						}
					}
				});
				return false;
			},
			highlight: function(element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
			}
		});	
	});		

	
</script> 
<script>

    $(document).on('click', '.editChaturmasButton', function () {
        var chaturmasId = $(this).data('chaturmas_id');
        $('#edit_chaturmas_modal').modal({
            backdrop: 'static',
            keyboard: false
        });
        $('#edit_chaturmas_id').val(chaturmasId);
        var ChaturmasEdit = "{{ route('chaturmas.edit', '_chaturmas_id_') }}".replace('_chaturmas_id_', chaturmasId);
        
        $.ajax({
            url: ChaturmasEdit,
            type: "GET",
            success: function(response) {
                $('#datepickers').val(response.data.date);
                $('#locations').val(response.data.location);  
            }
        });
    });
</script>

<script>

$(document).on('click','.delete_chaturmas', function () {
	var ChaturmasId = $(this).data("chaturmas_id");
	var ChaturmasAction = "{{ route('chaturmas.destroy', '_chaturmas_id_') }}".replace('_chaturmas_id_', ChaturmasId);
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
				url: ChaturmasAction,
				type: "DELETE",
				data: {ChaturmasId: ChaturmasId,},
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