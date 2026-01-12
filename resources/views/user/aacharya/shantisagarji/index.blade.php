@extends('user.app')
@section('content')
	<div class="main-body">
		<section class="detail-page-wrap att-2-spacing">	
			<div class="container att-2-container p-0">					
				<div class="row p-3">						
					<div class="col-12 col-md-4">						
						<div class="left-sidebar frame-box">							
							<div class="image-box frame-inner-box">							
								<img class="img-100" src="{{asset('frontend/images/aaryika/shantisagarji.jpg')}}" alt="Image">		
							</div>						
						</div>				
					</div>		
					<div class="col-12 col-md-8">						
						<div class="right-content">			
							<div class="lawyer-detail back-white-light mb-40 nopadding text-center">		
								<h2 class="d-none">Hidden</h2>												
								<h3 class="d-none">Hidden</h3>													
								<h4 class="d-none">Hiddeb</h4>													
								<h4 class="bc-color-dark-red-tcw mb-20 d-block att-head color-whit">आचार्य श्री 108 शांतिसागर महाराज जी </h4>		
							</div>																									
							<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 1.png')}}" alt="Shape">		
							<table class="table table_color">								 									
								<tbody>   									
								<tr>											
								<th class="col-3" >{{__('aacharya_user.name')}} </th>		
								<th class="col-9 ">आचार्य श्री 108 शांतिसागर महाराज जी</th>					
								</tr>														
								<tr>														
								<th class="col-3" >{{__('aacharya_user.old_name')}} </th>		
								<th class="col-9 ">श्री सातगौड़ा पाटिल </th>					
								</tr>										
								<tr>				
								<th class="col-3" >{{__('aacharya_user.father_name')}} </th>		
								<th class="col-9 "> श्री भीमगौड़ा जी पाटिल</th>									
								</tr>															
								<tr>														
								<th class="col-3" >{{__('aacharya_user.mother_name')}} </th>	
								<th class="col-9">श्रीमती सत्यवती जी</th>						
								</tr>													
								<tr>								
								<th class="col-3" >{{__('aacharya_user.date_of_birth')}} </th>		
								<th class="col-9">25 जुलाई 1872, बुधवार, आषाढ़ कृष्ण-6, वि.सं. - 1929</th>					
								</tr>													
								<tr>								
								<th class="col-3" >{{__('aacharya_user.birth_place')}} </th>		
								<th class="col-9">येलगुल, बेलगांव (कर्नाटक) (नाना के घर), भोजग्राम के समीप</th>					
								</tr>																
								<tr>						
								<th class="col-3" >{{__('aacharya_user.brahmacharya_vrat')}} </th>			
								<th class="col-9">18 वर्ष की उम्र में</th>				
								</tr>						
								<tr>			
								<th class="col-3" >{{__('aacharya_user.kshullak_deeksha')}} </th>	
								<th class="col-9 ">16 जून 1913, सोमवार, ज्येष्ठ शुक्ल - 13, वि.सं. - 1970 उत्तूर ग्राम</th>				
								</tr>															
								<tr>																
								<th class="col-3" >{{__('aacharya_user.ailak_deeksha')}} </th>					
								<th class="col-9  ">15 जनवरी 1916, शनिवार, पौष शुक्ल - 14, वि.सं. - 1973 श्री दिग. जैन सिद्धक्षेत्र गिरनार जी, जिला जूनागढ़ (गुजरात)</th>		
								</tr>												
								<tr>														
								<th class="col-3" >{{__('aacharya_user.muni_deeksha')}} </th>		
								<th class="col-9  ">2 मार्च 1920, मंगलवार फाल्गुन शुक्ल - त्रयोदशी, वि. सं. - 1976 यरनाल, बेलगांव (कर्नाटक)</th>				
								</tr>														
								<tr>															
								<th class="col-3" >{{__('aacharya_user.deeksha_guru')}} </th>			
								<th class="col-9 ">मुनि श्री देवेन्द्रकीर्ति जी महाराज</th>								
								</tr>								
								<tr>							
								<th class="col-3" >{{__('aacharya_user.aachaary_pad')}} </th>		
								<th class="col-9">8 अक्टूबर 1924, बुधवार आश्विन शुक्ल -11, वि.सं. - 1981 समडोली, जिला - सांगली (महाराष्ट्र)</th>			
								</tr>		
								<tr>										
								<th class="col-3" >{{__('aacharya_user.samaadhi')}} </th>		
								<th class="col-9 ">18 सितम्बर 1955, रविवार द्वितीय भाद्रपद शुक्ल - 2, वि. सं. - 2012 श्री दिग. जैन अतिशय क्षेत्र कुन्थलगिरि, उस्मानाबाद (महाराष्ट्र)</th>		
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