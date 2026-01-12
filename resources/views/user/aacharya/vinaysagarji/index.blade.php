@extends('user.app')
@section('content')
	<div class="main-body">
		<section class="detail-page-wrap att-2-spacing">	
			<div class="container att-2-container p-0">			
				<div class="row p-3">									
					<div class="col-12 col-md-4">								
					<div class="left-sidebar frame-box">						
					<div class="image-box frame-inner-box">						
					<img class="img-100" src="{{asset('frontend/images/aaryika/vinaysagarji.jpg')}}" alt="Image">		
					</div>						
					</div>							
					</div>						
					<div class="col-12 col-md-8">		
						<div class="right-content">				
							<div class="lawyer-detail back-white-light mb-40 nopadding text-center">		
								<h2 class="d-none">Hidden</h2>													
								<h3 class="d-none">Hidden</h3>												
								<h4 class="d-none">Hiddeb</h4>												
								<h4 class="bc-color-dark-red-tcw mb-20 d-block att-head color-whit">मुनि श्री 108 विनयसागर महाराज जी</h4>			
							</div>																							
							<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 1.png')}}" alt="Shape">		
							<table class="table table_color">								 			
								<tbody>   												
									<tr>													
										<th class="col-3" >{{__('aacharya_user.name')}} </th>		
										<th class="col-9 ">मुनि  श्री 108 विनयसागर महाराज जी</th>				
									</tr>													
									<tr>													
										<th class="col-3" >{{__('aacharya_user.old_name')}} </th>		
										<th class="col-9 "> ब्रह्मचर्य रतनलाल जी</th>							
									</tr>															
										
									<tr>														
										<th class="col-3" >{{__('aacharya_user.address')}} </th>		
										<th class="col-9"> दूदू ( राजस्थान ) </th>					
									</tr>
									<tr>														
										<th class="col-3" >{{__('aacharya_user.diksha_sthali')}} </th>		
										<th class="col-9"> महिंदपुर, अशोकनगर, म. प्र. </th>					
									</tr>
									<tr>														
										<th class="col-3" >{{__('aacharya_user.diksha_month')}} </th>		
										<th class="col-9">वैशाख ( 04/07/1972 )  </th>					
									</tr>																
																					
									<tr>																	
										<th class="col-3" >{{__('aacharya_user.deeksha_guru')}} </th>				
										<th class="col-9 ">आचार्य कल्प विवेकसागर जी महाराज</th>				
									</tr>													
																						
								</tbody>												
							</table>													
						</div>													
					</div>											
					<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 2.png')}}" alt="Shape">		
				</div>			
				<div class="row p-0 ms-0 me-0 mb-100p" >  			
					<div class="col-6 bc_color_semi_red" >		
						<div class="">	</div>				
					</div>				
					<div class="col-6 bc_color_cream" >			
						<div>						
							<h4 class="color-white text-center f_size"> aaryikavigyanmatiji.in	</h4>  					
						</div>					
					</div>	
				</div>	
			</div>		
		</section>	
	</div>
@endsection