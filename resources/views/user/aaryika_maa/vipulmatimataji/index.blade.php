@extends('user.app')
@section('content')
	<div class="main-body">
		<section class="detail-page-wrap att-2-spacing">	
			<div class="container att-2-container p-0">					
				<div class="row p-3">						
					<div class="col-12 col-md-4">						
						<div class="left-sidebar frame-box">							
							<div class="image-box frame-inner-box">							
								<img class="img-100" src="{{asset('frontend/images/aaryika/vidhut_mati_mataji')}}" alt="Image">		
							</div>						
						</div>				
					</div>				
					<div class="col-12 col-md-8">		
						<div class="right-content">									
							<div class="lawyer-detail back-white-light mb-40 nopadding text-center">		
								<h2 class="d-none">Hidden</h2>								
								<h3 class="d-none">Hidden</h3>							
								<h4 class="d-none">Hiddeb</h4>							
								<h4 class="bc-color-dark-red-tcw mb-20 d-block att-head color-whit">आर्यिका श्री 105 विपुलमति माता जी</h4>		
							</div>																												
							<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 1.png')}}" alt="Shape">			
							<table class="table table_color">								 		
								<tbody>   		
									<tr>								
										<th class="col-3" >{{__('sanghast_aaryika_user.mata_ji_name')}} </th>		
										<th class="col-9 ">आर्यिका श्री 105 विपुलमति माता जी</th>			
									</tr>							
									<tr>								
										<th class="col-3" >{{__('sanghast_aaryika_user.old_name')}} </th>		
										<th class="col-9 ">रत्नमाला </th>		
									</tr>																	
									<tr>
										<th class="" >{{__('sanghast_aaryika_user.pratima')}} </th>
										<th class="">9 मंदसौर </th>
									</tr>
									<tr>
										<th class="" >{{__('sanghast_aaryika_user.diksha_thithi')}} </th>
										<th class="">चैत्र कृष्ण पंचमी 2023 बुधवार ( 23 मार्च 1978 )</th>
									</tr>
									<tr>
										<th class="" >{{__('sanghast_aaryika_user.place')}} </th>
										<th class="">बड़वानी</th>
									</tr>									
									<tr>
										<th class="" >{{__('sanghast_aaryika_user.vrat_guru')}} </th>
										<th class="">आचार्य कल्प विवेकसागर जी महाराज</th>
									</tr>															
									<tr>							
										<th class="" >{{__('sanghast_aaryika_user.mausoleum')}} </th>		
										<th class="">मन्दसौर</th>			
									</tr>								
								</tbody>				
							</table>						
						</div>					
					</div>			
					<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 2.png')}}" alt="Shape">							
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
		
@endsection