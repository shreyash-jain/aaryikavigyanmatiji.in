@extends('user.app')
@section('content')
		<!-- Header End -->
		<!-- Content Start -->
		<div class="main-body">
			<!-- Left sidebar & Right content start -->
			<section class="detail-page-wrap att-2-spacing">
				<div class="container att-2-container mb-100pxx p-0" >
					<div class="p-3">
						<table class="table p-40 table_color" >
							<thead class="text-center">
								<tr>
								  <th colspan="2" class="p_color_white ds fs-40" >{{__('chaturmas.aaryika_maa')}}</th>						  
								</tr>
							 </thead>
							 <tbody class="mt-5 ">
							  @if(empty($data))
								<tr>
									<td colspan="2" class="text-center" >{{__('messages.no_data_available')}}</td>
								</tr>
								@else 
								@foreach($data as $key=>$val)
								<tr >
									<th class="col-5 text-center" >{{__('chaturmas.year')}}  {{$val->date}}</th>
									<th class="col-7">{{$val->location}}</th>
								</tr>
								@endforeach
								@endif
							 </tbody>
						</table>
					</div>
					
					<div class="row p-0 ms-0 me-0 mb-100p" >  
						<div class="col-6 bc_color_semi_red" >
							<div class="">														
							</div>
						</div>	
						<div class="col-6 bc_color_cream" >
							<div>
								<h4 class="color-white text-center f_size">	
									aaryikavigyanmatiji.in						
								</h4>  
							</div>
						</div>
					</div>	
				</div>
			</section>
			<!-- Left sidebar & Right content end -->
			
		</div>
		<!-- Content End -->
		<!-- Footer Start -->
@endsection