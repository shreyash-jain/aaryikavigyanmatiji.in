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
						<h3 class="card-title">{{__('event.event')}} </h3>
						<div class="card-toolbar">
							<div class="row text text-white-50 text-center">
								<div class=" align-items-center d-flex">									
									<div class=" text-end">
										<a href="{{ route('admin.dashboard') }}"  class="btn btn-gradient-danger">{{__('button.back')}}</a>
										<button type="button" id="addEventButton" class="btn btn-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">{{__('event.add')}}</button>
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
									<th class="text-center">{{__('event.date')}}</th>
									<th class="text-center">{{__('event.description')}}</th>
									<th class="text-center">{{__('event.colour')}}</th>
									<th class="text-center">{{__('event.action')}}</th>
								</tr>
							</thead>
							<tbody>
							@if(empty($data))
								 <tr>
									<td colspan="4" class="text-center">No Data available</td>
								</tr>
							@else 
							@foreach($data as $key=>$val)
								<tr>
									<td class="text-center ">
											<span class="title"> {{ \Carbon\Carbon::parse($val->date)->format('d-m-Y') }}</span>
									</td>
									<td class="text-center ">
											{{$val->description}}
									</td>	
									<td class="text-center " >
											 @foreach($colours as $name => $code)
												@if($val->colour == $code)
													<button class="btn" style="background-color: {{ $val->colour }};">{{ $name }}</button>
												@endif
											@endforeach
									</td>									
									<td class="text-center font-size-25">
										<a  data-event_id="{{$val->id}}" class="text-gray m-r-15 editEventButton btn btn-success btn-sm px-2 py-1" data-bs-toggle="modal" data-bs-target="#editexampleModal" data-bs-whatever="@mdo"><i class="ti-pencil text-white"></i></a>
										<a  data-event_id="{{$val->id}}"  class="text-gray delete_event btn btn-danger btn-sm px-2 py-1"><i class="ti-trash text-white"></i></a>
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
	<div class="modal fade" id="add_event_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">{{__('event.add_event')}}</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form id="add_event_form" action="{{ route('event.store') }}" method="post">
			@csrf
				<div class="mb-3">
					<label class="col-form-label">{{__('event.date')}} <span class="text-danger">*</span></label>
					<input  id="datepicker"  data-provide="datepicker" name="date"  type="text" class="dateformate form-control " placeholder="{{__('event.enter_date')}}">												
				</div>
				<div class="mb-3 ">		
					<label for="recipient-name" class="col-form-label">{{__('event.description')}}<span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="description" name="description" placeholder="{{__('event.enter_description')}}">					
				</div>		
				<div class="mb-3 ">		
					<label for="recipient-name" class="col-form-label ">{{__('event.colour')}}<span class="text-danger">*</span></label><br>
					<select class="form-control" id="colours" name="colour" >
						<option  disabled selected >-- {{__('event.choose_colour')}} --</option>
						@foreach($colours as $name=>$code)
						<option value="{{$code}}" >{{$name}}</option>
						@endforeach					
						
					</select>
				</div>	
				<div class="mb-3 ">		
					<label for="recipient-name" class="col-form-label ">{{__('event.text_colour')}}<span class="text-danger">*</span></label><br>
					<select class="form-control" id="text_colours" name="text_colour" >
						<option  disabled selected >-- {{__('event.choose_text_colour')}} --</option>
						@foreach($colours as $name=>$code)
						<option value="{{$code}}" >{{$name}}</option>
						@endforeach					
						
					</select>
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

	<div class="modal fade" id="edit_Event_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">{{__('event.edit_event')}}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="edit_event_form"  action="{{ route('event.update_save') }}" method="post">
						@csrf
						<input type="hidden" id="edit_event_id" name="event_id" >
						<div class="mb-3">
							<label class="col-form-label">{{__('event.date')}} <span class="text-danger">*</span></label>
							<input  id="datepicker1"  data-provide="datepicker" name="date"  type="text" class="dateformate form-control " placeholder="{{__('event.enter_date')}}">								
							@error('date')
								<div class="alert alert-danger">{{ $date }}</div>
							@enderror							
						</div>
						<div class="mb-3 ">		
							<label for="recipient-name" class="col-form-label">{{__('event.description')}}<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="descriptions" name="description" placeholder="{{__('event.enter_description')}}">
							@error('description')
								<div class="alert alert-danger">{{ $description }}</div>
							@enderror
						</div>	
						<div class="mb-3 ">		
							<label for="recipient-name" class="col-form-label ">{{__('event.colour')}}<span class="text-danger">*</span></label><br>
							<select class="form-control" id="colour" name="colour" >
								<option  disabled selected >-- {{__('event.choose_colour')}} --</option>			
								@foreach($colours as $name=>$code)
								<option value="{{$code}}" >{{$name}}</option>
								@endforeach	
							</select>
						</div>	
						<div class="mb-3 ">		
							<label for="recipient-name" class="col-form-label ">{{__('event.text_colour')}}<span class="text-danger">*</span></label><br>
							<select class="form-control" id="text_colour" name="text_colour" >
								<option  disabled selected >-- {{__('event.choose_text_colour')}} --</option>			
								@foreach($colours as $name=>$code)
								<option value="{{$code}}" >{{$name}}</option>
								@endforeach	
							</select>
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
             format: 'dd-mm-yyyy', 
        });
		$('.dateformate').datepicker1({
             format: 'dd-mm-yyyy', 
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
	$('#addEventButton').click(function() {
        $('#add_event_modal').modal({
            backdrop: 'static',
            keyboard: false
        });
	});
	
	$(document).ready(function(){
		$("#add_event_form").validate({
			onkeyup: function(element) {$(element).valid()},
			onchange: function(element) {$(element).valid()},
			onfocusout: false,
			rules: {
				date: {	required: true},
				description: {	required: true},
				colour: {	required: true},
				text_colour: {	required: true},
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
								confirmButtonText: ok, 
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
		
		
		
		$("#edit_event_form").validate({
			onkeyup: function(element) {$(element).valid()},
			onchange: function(element) {$(element).valid()},
			onfocusout: false,
			rules: {
				date: {	required: true},
				description: {	required: true},
				colour: {	required: true},
				text_colour: {	required: true},
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
								confirmButtonText: ok, 
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

    $(document).on('click', '.editEventButton', function () {
        var eventId = $(this).data('event_id');
        $('#edit_Event_modal').modal({
            backdrop: 'static',
            keyboard: false
        });
        $('#edit_event_id').val(eventId);
        var EventEdit = "{{ route('event.edit', '_event_id_') }}".replace('_event_id_', eventId);
        console.log(EventEdit) ;
        $.ajax({
            url: EventEdit,
            type: "GET",
            success: function(response) {
				var dateParts = response.data.date.split('-');
				var formattedDate = dateParts[0] + '-' + dateParts[1] + '-' + dateParts[2];
				$('#datepicker1').val(formattedDate);
				$('#descriptions').val(response.data.description);				
				$('#colour').val(response.data.colour);				
				$('#text_colour').val(response.data.text_colour);				
            }
        });
    });
</script>

<script>

$(document).on('click','.delete_event', function () {
	var EventId = $(this).data("event_id");
	var EventAction = "{{ route('event.destroy', '_event_id_') }}".replace('_event_id_', EventId);
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
				url: EventAction,
				type: "DELETE",
				data: {EventId: EventId,},
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