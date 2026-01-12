@extends('user.app')
@section('content')
	<div class="main-body">
		<section class="detail-page-wrap att-2-spacing">	
			<div class="container att-2-container p-0">					
				<div class="row p-3">						
					<div class="col-12 col-md-4">						
						<div class="left-sidebar frame-box">							
							<div class="image-box frame-inner-box">							
								<img class="img-100" src="{{asset('frontend/images/aaryika/veersagarji.jpg')}}" alt="Image">		
							</div>						
						</div>				
					</div>	
					<div class="col-12 col-md-8">		
						<div class="right-content">						
						<div class="lawyer-detail back-white-light mb-40 nopadding text-center">		
						<h2 class="d-none">Hidden</h2>													
						<h3 class="d-none">Hidden</h3>													
						<h4 class="d-none">Hiddeb</h4>													
						<h4 class="bc-color-dark-red-tcw mb-20 d-block att-head color-whit">आचार्य श्री 108 वीरसागर महाराज जी</h4>		
						</div>																							
						<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 1.png')}}" alt="Shape">		
						<table class="table table_color">								 						
						<tbody>   									
						<tr>									
						<th class="col-3" >{{__('aacharya_user.name')}} </th>		
						<th class="col-9 ">आचार्य श्री 108 वीरसागर महाराज जी</th>					
						</tr>															
						<tr>															
						<th class="col-3" >{{__('aacharya_user.old_name')}} </th>		
						<th class="col-9 ">श्री हीरालालजी गंगवाल</th>									
						</tr>																
						<tr>														
						<th class="col-3" >{{__('aacharya_user.father_name')}} </th>			
						<th class="col-9 ">श्रीरामसुख जी गंगवाल</th>										
						</tr>															
						<tr>														

						<th class="col-3" >{{__('aacharya_user.mother_name')}} </th>		
						<th class="col-9">श्रीमती भागूबाई जी (भाग्यवती बाई)</th>								
						</tr>															
						<tr>								
						<th class="col-3" >{{__('aacharya_user.date_of_birth')}} </th>				
						<th class="col-9">सन् - 1876 आषाढ़ शुक्ल - 15 (पूर्णिमा), वि. सं. - 1933</th>							
						</tr>															
						<tr>		
						<th class="col-3" >{{__('aacharya_user.birth_place')}} </th>	
						<th class="col-9">ईरगांव, औरंगाबाद (महाराष्ट्र) </th>							
						</tr>														
						<tr>														
						<th class="col-3" >{{__('aacharya_user.kshullak_deeksha')}} </th>	
						<th class="col-9 ">8 मार्च 1924 शनिवार, फाल्गुन शुक्ल - 3 वि.सं. - 1980, कुम्भोज बाहुबली, कोल्हापुर (महाराष्ट्र) </th>		
						</tr>														
						<tr>														
						<th class="col-3" >{{__('aacharya_user.muni_deeksha')}} </th>	
						<th class="col-9  ">8 अक्टूबर 1924, बुधवार, आश्विन शुक्ल - 11 वि.सं. 1981, समडोली, सांगली (महाराष्ट्र)</th>		
						</tr>														
						<tr>														
						<th class="col-3" >{{__('aacharya_user.deeksha_guru')}} </th>		
						<th class="col-9 ">आचार्य श्रीशांतिसागर जी महाराज</th>							
						</tr>									
						<tr>					
						<th class="col-3" >{{__('aacharya_user.aachaary_pad')}} </th>	
						<th class="col-9">8 सितम्बर 1955, गुरुवार द्वितीय भाद्रपद कृष्ण - 7, वि.सं. - 2012 श्री दिग. जैन अतिशय क्षेत्र चूलगिरि (खानियाजी) जयपुर (राजस्थान) </th>		
						</tr>									<tr>													
						<th class="col-3" >{{__('aacharya_user.samaadhi')}} </th>									
						<th class="col-9 ">23 सितम्बर 1957, सोमवार, आश्विन कृष्ण - अमावस्या वि.सं. - 2014, श्री दिग. जैन अतिशय क्षेत्र चूलगिरि (खानिया जी), जयपुर (राजस्थान) </th>	
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
							<h4 class="color-white f_size text-center">	
								aaryikavigyanmatiji.in						
							</h4>  
						</div>
					</div>
				</div>
			</div>		   
		</section>		
	</div>
@endsection