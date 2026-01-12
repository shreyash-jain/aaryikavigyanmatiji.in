@extends('user.app')
@section('content')
	<div class="main-body">
		<section class="detail-page-wrap att-2-spacing">	
			<div class="container att-2-container p-0">					
				<div class="row p-3">						
					<div class="col-12 col-md-4">						
						<div class="left-sidebar frame-box">							
							<div class="image-box frame-inner-box">							
								<img class="img-100" src="{{asset('frontend/images/aaryika/vishalmati.jpg')}}" alt="Image">		
							</div>						
						</div>				
					</div>				
					<div class="col-12 col-md-8">		
						<div class="right-content">									
							<div class="lawyer-detail back-white-light mb-40 nopadding text-center">		
								<h2 class="d-none">Hidden</h2>								
								<h3 class="d-none">Hidden</h3>							
								<h4 class="d-none">Hiddeb</h4>							
								<h4 class="bc-color-dark-red-tcw mb-20 d-block att-head color-whit">आर्यिका श्री 105 विशालमति माता जी</h4>		
							</div>																												
							<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 1.png')}}" alt="Shape">			
							<table class="table table_color">								 		
								<tbody>   		
									<tr>								
										<th class="col-3" >{{__('sanghast_aaryika_user.mata_ji_name')}} </th>		
										<th class="col-9 ">आर्यिका श्री 105 विशालमति माता जी</th>		
									</tr>							
									<tr>								
										<th class="col-3" >{{__('sanghast_aaryika_user.old_name')}} </th>		
										<th class="col-9 ">सुश्री कुसुम जैन चौरड़िया </th>
									</tr>								
									<tr>					
										<th class="col-3" >{{__('sanghast_aaryika_user.father_name')}} </th>			
										<th class="col-9 ">श्रीमान् बापूलाल जी चौरड़िया</th>			
									</tr>								
									<tr>						
										<th class="col-3" >{{__('sanghast_aaryika_user.mother_name')}} </th>			
										<th class="col-9">श्रीमति मोहनीबाई जी चौरड़िया</th>			
									</tr>													
									<tr>								
										<th class="col-3" >{{__('sanghast_aaryika_user.kual')}} </th>		
										<th class="col-9">श्वेतांबर (मंदिरमार्गी)</th>			
									</tr>													
									<tr>								
										<th class="col-3" >{{__('sanghast_aaryika_user.brother')}} </th>		
										<th class="col-9">२ (श्री हस्तिमल, अनिलकुमार जैन)</th>			
									</tr>								
									<tr>					
										<th class="col-3" >{{__('sanghast_aaryika_user.sister')}} </th>			
										<th class="col-9">५ (श्रीमती विमला, श्रीमती सुशीला, श्रीमती शान्ता, श्रीमती पुखराज जैन)</th>				
									</tr>								
										
									<tr>
										<th class="col-3" >{{__('sanghast_aaryika_user.brahmacharya_vrat')}} </th>
										<th class="col-9">सम्मेदशिखर-पार्श्वनाथ कूट, स्वयं अपनी प्रेरणा से, १३-१४ वर्ष की उम्र में।</th>
									</tr>									
									<tr>
										<th class="col-3" >{{__('sanghast_aaryika_user.diksha_prena')}} </th>
										<th class="col-9">परम पूज्य १०८ श्री भव्यसागर जी महाराज</th>
									</tr>
									<tr>								
										<th class="col-3" >{{__('sanghast_aaryika_user.pratima_vrat')}} </th>			
										<th class="col-9 ">परम पूज्य आचार्यकल्प विवेकसागर जी महाराज</th>				
									</tr>																			
									<tr>									
										<th class="col-3" >{{__('sanghast_aaryika_user.initiation_guru')}} </th>			
										<th class="col-9  ">समाधिस्थ परम पूज्य आचार्यकल्प श्री विवेक सागर जी महाराज</th>			
									</tr>								
									<tr>							
										<th class="col-3" >{{__('sanghast_aaryika_user.diksha_date')}} </th>		
										<th class="col-9  ">फाल्गुन शुक्ला पंचमी १९८४</th>			
									</tr>							
									<tr>							
										<th class="col-3" >{{__('sanghast_aaryika_user.dada_guru')}} </th>		
										<th class="col-9 ">समाधिस्थ महाकवि आचार्य ज्ञानसागर जी महाराज</th>			
									</tr>	
									<tr>
										<th class="col-3" >{{__('sanghast_aaryika_user.diksha_place')}} </th>
										<th class="col-9">पिड़ावा (भवानी मण्डी, राजस्थान)</th>
									</tr>
									<tr>						
										<th class="col-3" >{{__('sanghast_aaryika_user.prayschit_guru')}} </th>		
										<th class="col-9 ">संत शिरोमणि आचार्य गुरुवर विद्यासागर महाराज (पूज्य गुरुवर की समाधि के बाद) </th>			
									</tr>									
									<tr>							
										<th class="col-3" >{{__('sanghast_aaryika_user.interests')}} </th>		
										<th class="col-9">आध्यात्मिक प्रवचन, पठन-पाठन, उपवास, ध्यान आदि।</th>			
									</tr>
									
									
									<tr>							
										<th class="col-3" >{{__('sanghast_aaryika_user.sanghasth_sadhu')}} </th>		
										<th class="col-9  ">आर्यिका विज्ञानमति, आर्यिका विघुतमति, ब्र. कंचन भीलवाड़ा, ब्र. संतोष बहन कुचामन सिटी,ब्र. माधुरी बहन शाहपुर, ब्र. अर्चना बहन रहली, ब्र. संध्या बहन रहली।</th>			
									</tr>							
									<tr>							
										<th class="col-3" >{{__('sanghast_aaryika_user.varsha_yoag')}} </th>		
										<th class="col-9 ">कुचामनसिटी (नागौर, राजस्थान), मारोठ (नागौर, राजस्थान), गुरुवर के साथ मदनगंज-किशनगढ़, अजमेर (सोनी जी की नसिया), सिंगोली (मंदसौर म.प्र.), रामगंजमण्डी (भवानीमण्डी, राजस्थान), शाहपुर (सागर, म.प्र.), रहली, पटनागंज (सागर, म.प्र.), कटंगी (जबलपुर, म.प्र.), हरदा, म.प्र.), नीमच (म.प्र.), बिजौलिया पार्श्वनाथ क्षेत्र (राज.), केकड़ी (राज.)।</th>
									</tr>	
																	
									<tr>							
										<th class="col-3" >{{__('sanghast_aaryika_user.writing')}} </th>		
										<th class="col-9">लोकप्रिय कृति शीलमञ्जूषा</th>
									</tr>	
									
									
									<tr>						
										<th class="col-3" >{{__('sanghast_aaryika_user.sankaln_kratiya')}} </th>		
										<th class="col-9 ">स्तुति मंजूषा, नियम मंजूषा</th>
									</tr>									
									<tr>							
										<th class="col-3" >{{__('sanghast_aaryika_user.personality')}} </th>		
										<th class="col-9">परिचित अपरिचित सबके प्रति वात्सल्य एवं करुणा का भाव, लोकेषणा एवं पद ग्रहण के भाव से दूर।</th>
									</tr>
									<tr>
										<th class="col-3" >{{__('sanghast_aaryika_user.mausoleum')}} </th>
										<th class="col-9">वैशाख शुक्ला, चतुर्दशी २१ मई, १९९७</th>
									</tr>
									<tr>						
										<th class="col-3" >{{__('sanghast_aaryika_user.place')}} </th>		
										<th class="col-9 ">विजयनगर (अजमेर, राजस्थान)</th>
									</tr>	
								</tbody>				
							</table>						
						</div>					
					</div>			
					<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 2.png')}}" alt="Shape">	
						
				</div>
				<div class="row p-0 m-0">
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
			<div class="text-center  mb-50pxxx text_tcw_p" >
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
					<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
				</svg>
					अधिक जानकारी के लिए आप <a class="font_weight" href="https://drive.google.com/file/d/1FYAmaY1b8ZaolrRJg2AJw3w4_6OZ1top/view?usp=sharing" target="_blank"> विशाल व्यक्तित्व </a> नामक जीवनी को पढ़ सकते है जो की इनके जीवन पर आधारित है....
			</div>  
		</section>		
	</div>
		
@endsection