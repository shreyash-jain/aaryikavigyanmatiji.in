@extends('user.app')
@section('content')
	<div class="main-body">
		<section class="detail-page-wrap att-2-spacing">	
			<div class="container att-2-container p-0">					
				<div class="row p-3">						
					<div class="col-12 col-md-4">						
						<div class="left-sidebar frame-box">							
							<div class="image-box frame-inner-box">							
								<img class="img-100" src="{{asset('frontend/images/aaryika/shivsagarji.jpg')}}" alt="Image">		
							</div>						
						</div>				
					</div>	
					<div class="col-12 col-md-8">		
						<div class="right-content">		
						
						<div class="lawyer-detail back-white-light mb-40 nopadding text-center">				
						<h2 class="d-none">Hidden</h2>														
						<h3 class="d-none">Hidden</h3>		
						<h4 class="d-none">Hiddeb</h4>		
						<h4 class="bc-color-dark-red-tcw mb-20 d-block att-head color-whit">आचार्य श्री 108 शिवसागर महाराज जी</h4>	
						</div>																							
						<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 1.png')}}" alt="Shape">	
						<table class="table table_color">								 								
						<tbody>   											<tr>										
						<th class="col-3" >{{__('aacharya_user.name')}} </th>											
						<th class="col-9 ">आचार्य श्री 108 शिवसागर महाराज जी</th>							
						</tr>	
						<tr>																
						<th class="col-3" >{{__('aacharya_user.old_name')}} </th>								
						<th class="col-9 ">श्री हीरालाल जी रांवका</th>							
						</tr>																
						<tr>														
						<th class="col-3" >{{__('aacharya_user.father_name')}} </th>					
						<th class="col-9 ">श्री नेमीचन्द जी रांवका</th>										
						</tr>																
						<tr>															
						<th class="col-3" >{{__('aacharya_user.mother_name')}} </th>				
						<th class="col-9">श्रीमती दगड़ाबाई जी</th>									
						</tr>																
						<tr>								
						<th class="col-3" >{{__('aacharya_user.date_of_birth')}} </th>				
						<th class="col-9">सन् 1901, वि.सं. - 1958</th>								
						</tr>															
						<tr>								
						<th class="col-3" >{{__('aacharya_user.birth_place')}} </th>					
						<th class="col-9">अड़गांव, औरांगाबाद (महाराष्ट्र)</th>							
						</tr>															
						<tr>								
						<th class="col-3" >{{__('aacharya_user.secular_education')}} </th>				
						<th class="col-9">तीसरी कक्षा)</th>						
						</tr>																																					<tr>										<th class="col-3" >{{__('aacharya_user.brahmacharya_vrat')}} </th>										<th class="col-9">वि.सं. 1986 में आ.श्री शांतिसागर जी से दूसरी प्रतिमा के व्रत लिए, वि.सं. 1999 में सिद्धक्षेत्र मुतागिरी जी में सातवीं प्रतिमा ली</th>									</tr>									<tr>																		<th class="col-3" >{{__('aacharya_user.kshullak_deeksha')}} </th>													<th class="col-9 ">वि.सं. - 2000, श्री दिग. जैन सिद्धक्षेत्र सिद्धवरकूट जी जिला-खरगोन (म.प्र.)</th>													</tr>																												<tr>													
						<th class="col-3" >{{__('aacharya_user.ailak_deeksha')}} </th>								
						<th class="col-9  ">नहीं हुई </th>									
						</tr>															
						<tr>														
						<th class="col-3" >{{__('aacharya_user.muni_deeksha')}} </th>
						<th class="col-9  ">6 जुलाई 1949, आषाढ़ शुक्ल - 11, वि. सं. - 2006 नागौर (राजस्थान)</th>		
						</tr>														
						<tr>																
						<th class="col-3" >{{__('aacharya_user.deeksha_guru')}} </th>		
						<th class="col-9 ">आचार्य श्री वीरसागरजी महाराज</th>							
						</tr>									
						<tr>						
						<th class="col-3" >{{__('aacharya_user.aachaary_pad')}} </th>		
						<th class="col-9">3 नवम्बर 1957, रविवार, कार्तिक शुक्ल - 11 वि.सं. - 2014, श्री दिग. जैन अतिशय क्षेत्र चूलगिरि (खानिया जी), जयपुर (राजस्थान)</th>		
						</tr>									<tr>														
						<th class="col-3" >{{__('aacharya_user.samaadhi')}} </th>										
						<th class="col-9 ">16 फरवरी 1969, रविवार, फाल्गुन कृष्ण - अमावस्या वि. सं. - 2025, श्री दिग. जैन अतिशय क्षेत्र महावीर जी जिला - सवाईमाधोपुर (राजस्थान)</th>		
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