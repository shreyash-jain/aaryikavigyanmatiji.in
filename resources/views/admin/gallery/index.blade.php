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
						<h3 class="card-title">{{__('gallery.gallery')}} </h3>
						<div class="card-toolbar">
							<div class="row text text-white-50 text-center">
								<div class=" align-items-center d-flex">									
									<div class=" text-end">
										<a href="{{ route('admin.dashboard') }}"  class="btn btn-gradient-danger">{{__('button.back')}}</a>
										<a href="{{ route('gallery.create') }}"  class="btn btn-gradient-primary">{{__('gallery.add_image')}}</a>
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
				@if(!empty($data))	
				<div class="card-body">
					<div class="table-overflow">
						<table id="dt-opt" class="table table-hover table-xl  table-bordered">
							<thead class="thead-light">
								<tr>                                             
									<th class="text-center">{{__('gallery.title')}}</th>
									<th class="text-center">{{__('gallery.image_url')}}</th>
									<th class="text-center">{{__('gallery.status')}}</th>
									<th class="text-center">{{__('gallery.order')}}</th>
									<th class="text-center">{{__('gallery.is_new')}}</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach($data as $key=>$val)
								<tr>
									<td class="text-center col-2">
										<div class="info">
											<span class="title">{{$val->title}}</span>
										</div>
									</td>
									<td class="text-center col-2">	
										<img class="b-radiu imageclick " data-bs-toggle="modal" id="images_{{$val->id}}" data_url="https://lh3.google.com/u/0/d/{{$val->image_url}}"  data_title="{{$val->title}}" src="https://lh3.google.com/u/0/d/{{$val->image_url}}" width="150px" alt="{{$val->title}}">
									</td>	
									<td class="text-center">
									@if(isset($val->status) && $val->status == 1)
										<span class="badge badge-gradient-success" >{{__('gallery.active')}}</span>
									@else
										<span class="badge badge-warning" >{{__('gallery.unactive')}}</span>
									@endif
								   </td>
									<td class="text-center">
										<div class="info">
											<span class="title">{{$val->order}}</span>
										</div>
									</td>
									<td class="text-center">
										@if(isset($val->is_new) && $val->is_new == 1)
											<span class="badge badge-gradient-success" >{{__('gallery.is_new')}}</span>
										@else											
										@endif
									</td>
									<td class="text-center font-size-25">  
										<a  href="{{ route('gallery.edit',$val->id) }}" class="text-gray m-r-15  btn-success btn-sm px-2 py-1"><i class="ti-pencil text-white"></i></a> 
										<a  data-gallery_id="{{$val->id}}"  class="text-gray delete_gallery btn-danger btn-sm px-2 py-1"><i class="ti-trash text-white"></i></a>
									
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

$(document).on('click','.delete_gallery', function () {
	var GalleryId = $(this).data("gallery_id");
	var GalleryAction = "{{ route('gallery.destroy', '_gallery_id_') }}".replace('_gallery_id_', GalleryId);
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
				url: GalleryAction,
				type: "DELETE",
				data: {GalleryId: GalleryId,},
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