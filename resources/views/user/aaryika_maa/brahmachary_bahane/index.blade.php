@extends('user.app')
@section('content')
		<!-- Header End -->
		<div class="main-body">
			<section class="detail-page-wrap att-2-spacing">
				<div class="container att-2-container p-0">
					<div class="row p-3">
						<div class="col-12 col-md-4">
							<div class="left-sidebar frame-box">
								<div class="image-box frame-inner-box">
									<img class="img-100" src="{{asset('frontend/images/aaryika/' .$data->image)}}" alt="Image">
								</div>
							</div>
						</div>
						<div class="col-12 col-md-8">
							<div class="right-content">								
								<div class="lawyer-detail back-white-light mb-40 nopadding text-center">
									<h2 class="d-none">Hidden</h2>
									<h3 class="d-none">Hidden</h3>
									<h4 class="d-none">Hiddeb</h4>
									<h4 class="bc-color-dark-red-tcw mb-20 d-block att-head color-whit">{{"$data->name"}}</h4>
								</div>																
								
								<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 1.png')}}" alt="Shape">
								<table class="table table_color">
								 
									<tbody>   
										<tr>
											<th class="col-3"  style="width:40%;" >{{__('sanghast_aaryika_user.mata_ji_name')}} </th>
											<th class="col-9 ">{{$data->name}}</th>
										</tr>
										@if(!empty($data->old_name))
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.old_name')}} </th>
											<th class="col-9 ">{{$data->old_name}}</th>
										</tr>
										@endif
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.father_name')}} </th>
											<th class="col-9 ">{{$data->father_name}}</th>
										</tr>
										<tr>
											<th class="" >{{__('sanghast_aaryika_user.mother_name')}} </th>
											<th class="">{{$data->mother_name}}</th>
										</tr>										
										@if(!empty($data->brother_sister))
										<tr>
											<th class="" >{{__('sanghast_aaryika_user.brother_sister')}} </th>
											<th class="">{{$data->brother_sister}}</th>
										</tr>
										@endif
										@if(!empty($data->marriage))
										<tr>
											<th class="" >{{__('sanghast_aaryika_user.marriage')}} </th>
											<th class="">{{$data->marriage}}</th>
										</tr>
										@endif
										@if(!empty($data->husband_name))
										<tr>
											<th class="" >{{__('sanghast_aaryika_user.husband_name')}} </th>
											<th class="">{{$data->husband_name}}</th>
										</tr>
										@endif
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.date_of_birth')}} </th>
											<th class="col-9 ">{{$data->date_of_birth}}</th>
										</tr>
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.birth_place')}} </th>
											<th class="col-9">{{$data->birth_place}}</th>
										</tr>
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.secular_education')}} </th>
											<th class="col-9 ">{{$data->secular_education}}</th>
										</tr>
										@if(!empty($data->homelessness))
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.homelessness')}} </th>
											<th class="col-9 ">{{$data->homelessness}}</th>
										</tr>
										@endif
										@if(!empty($data->holding_the_statue))
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.holding_the_statue')}} </th>
											<th class="col-9  ">{{$data->holding_the_statue}}</th>
										</tr>
										@endif
										@if(!empty($data->brahmacharya_vrat))
										<tr>
											<th class="" >{{__('sanghast_aaryika_user.brahmacharya_vrat')}} </th>
											<th class="">{{$data->brahmacharya_vrat}}</th>
										</tr>
										@endif
										@if(!empty($data->vrat_guru))
										<tr>
											<th class="" >{{__('sanghast_aaryika_user.vrat_guru')}} </th>
											<th class="">{{$data->vrat_guru}}</th>
										</tr>
										@endif
										@if(!empty($data->date_place))
										<tr>
											<th class="" >{{__('sanghast_aaryika_user.date_place')}} </th>
											<th class="">{{$data->date_place}}</th>
										</tr>
										@endif
										
										@if(!empty($data->pratimae))
										<tr>
											<th class="" >{{__('sanghast_aaryika_user.pratimae')}} </th>
											<th class="">{{$data->pratimae}}</th>
										</tr>
										@endif
										@if(!empty($data->pratham_kenshaloch))
										<tr>
											<th class="" >{{__('sanghast_aaryika_user.pratham_kenshaloch')}} </th>
											<th class="">{{$data->pratham_kenshaloch}}</th>
										</tr>
										@endif
										@if(!empty($data->aryika_diksha))
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.aaryika_diksha')}} </th>
											<th class="col-9 ">{{$data->aryika_diksha}}</th>
										</tr>
										@endif
										@if(!empty($data->diksha_detail))
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.diksha_detail')}} </th>
											<th class="col-9  ">{{$data->diksha_detail}}</th>
										</tr>
										@endif
										@if(!empty($data->initiation_guru))
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.initiation_guru')}} </th>
											<th class="col-9  ">{{$data->initiation_guru}}</th>
										</tr>
										@endif
										@if(!empty($data->interests))
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.interests')}} </th>
											<th class="col-9  ">{{$data->interests}}</th>
										</tr>
										@endif
										@if(!empty($data->specialty))
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.specialty')}} </th>
											<th class="col-9 ">{{$data->specialty}}</th>
										</tr>
										@endif
										@if(!empty($data->initiated_disciples))
										<tr>
											<th class="col-3" >{{__('sanghast_aaryika_user.initiated_disciples')}} </th>
											<th class="col-9 ">{{$data->initiated_disciples}}</th>
										</tr>
										@endif
										
										@if(!empty($data->current_conflict))
										<tr>
											<th class="" >{{__('sanghast_aaryika_user.current_conflict')}} </th>
											<th class="">{{$data->current_conflict}}</th>
										</tr>
										@endif
										@if(!empty($data->mother_tongue))
										<tr>
											<th class="" >{{__('sanghast_aaryika_user.mother_tongue')}} </th>
											<th class="">{{$data->mother_tongue}}</th>
										</tr>
										@endif
										
										@if(!empty($data->mausoleum))
										<tr>
											<th class="" >{{__('sanghast_aaryika_user.mausoleum')}} </th>
											<th class="">{{$data->mausoleum}}</th>
										</tr>
										@endif
									</tbody>
								 
								</table>
							</div>
						</div>
						<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 2.png')}}" alt="Shape">
						@if(!empty($data->description))
						<div class="col-12">
							<h4 class="color-white text-center">	
								{{$data->description}}							
							</h4>
						</div> 
						@endif
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
		</div>
		<!-- Content End -->
		<!-- Footer Start -->
@endsection