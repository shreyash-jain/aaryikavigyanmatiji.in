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
									<img class="img-100" src="{{asset('frontend/images/aaryika/viveksagarji.jpg')}}" alt="Image">
								</div>
							</div>
						</div>		
						<div class="col-12 col-md-8">			
							<div class="right-content">					
								<div class="lawyer-detail back-white-light mb-40 nopadding text-center">		
									<h2 class="d-none">Hidden</h2>													
									<h3 class="d-none">Hidden</h3>												
									<h4 class="d-none">Hiddeb</h4>												
									<h4 class="bc-color-dark-red-tcw mb-20 d-block att-head color-whit">आचार्य श्री 108 विवेकसागर महाराज जी </h4>		
								</div>																								
								<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 1.png')}}" alt="Shape">		
								<table class="table table_color">								 								
									<tbody>   	
										<tr>																	
										<th class="col-3" >{{__('aacharya_user.name')}} </th>									
										<th class="col-9 "> परम पूज्य १०८ श्री विवेकसागर जी महाराज आचार्यकल्प श्री विवेकसागर जी महाराज  </th>									
										</tr>																				
										<tr>																					
										<th class="col-3" >{{__('aacharya_user.old_name')}} </th>								
										<th class="col-9 ">श्री लक्ष्मीनारायणजी छाबड़ा</th>										
										</tr>																				
										<tr>																				
										<th class="col-3" >{{__('aacharya_user.father_name')}} </th>						
										<th class="col-9 ">श्रेष्ठी श्री सुगनचन्दजी छाबड़ा (खण्डेलवाल मारवाड़ी) </th>													
										</tr>																				
										<tr>																				
										<th class="col-3" >{{__('aacharya_user.mother_name')}} </th>						
										<th class="col-9">श्रीमती राजमती जी</th>													
										</tr>																				
										<tr>																	
										<th class="col-3" >{{__('aacharya_user.date_of_birth')}} </th>			
										<th class="col-9">आषाढ़ कृष्णा दसमी विक्रम संवत् १९७०</th>											
										</tr>																				
										<tr>																	
										<th class="col-3" >{{__('aacharya_user.birth_place')}} </th>			
										<th class="col-9">मरवा (जयपुर राजस्थान) </th>									
										</tr>																		
										<tr>											
								<!--		<th class="col-3" >{{__('aacharya_user.secular_education')}} </th>			
										<th class="col-9">तीसरी कक्षा)</th>										
										</tr>	-->													
										<tr>		
										<th class="col-3" >{{__('aacharya_user.brahmacharya_vrat')}} </th>			
										<th class="col-9">प्रथम प्रतिमा के व्रत क्षुल्लक श्री विद्यासागर जी से  <br> दूसरी प्रतिमा के व्रत परम पूज्य आचार्य १०८ श्री विमलसागर जी महाराज से <br> सप्तम प्रतिमा के व्रत परम पूज्य मुनि श्री १०८ आर्यनन्दी महाराज से</th>		
										</tr>	
										<tr>																		
										<th class="col-3" >{{__('aacharya_user.muni_deeksha')}} </th>						
										<th class="col-9  ">फाल्गुन कृष्णा पंचमी, वि.सं. २०२५ </th>						
										</tr>																			
										<tr>																			
											<th class="col-3" >{{__('aacharya_user.deeksha_guru')}} </th>					
											<th class="col-9 ">१०८ आचार्य गुरुवर ज्ञानसागर जी महाराज </th>										
										</tr>
										<tr>											
										<th class="col-3" >रुचिया : </th>		
										<th class="col-9 ">स्वाध्याय, वृत्तिपरिसंख्यान, ध्यान, रसपरित्याग, विशेष शुद्धि </th>			
										</tr>											
										<tr>											
										<th class="col-3" >चेतन कृतियाँ  :</th>		
										<th class="col-9 "> २ मुनिराज पूज्य विजयसागर जी महाराज, पूज्य विनय सागर जी महाराज, ४ आर्यिकाएँ - पूज्य विपुलमती माताजी, पून विशालमती माताजी, पूज्य विज्ञानमती माताजी, पूज्य विद्युत्मती माताजी </th>			
										</tr>											
									<!--	<tr>											
										<th class="col-3" >{{__('aacharya_user.kshullak_deeksha')}} </th>		
										<th class="col-9 ">वि.सं. - 2000, श्री दिग. जैन सिद्धक्षेत्र सिद्धवरकूट जी जिला-खरगोन (म.प्र.)</th>			
										</tr>																	
										<tr>																		
										<th class="col-3" >{{__('aacharya_user.ailak_deeksha')}} </th>				
										<th class="col-9  ">नहीं हुई </th>													
										</tr>		-->																		
																										
										<tr>							
										<th class="col-3" >आन्तरिक व्यक्तित्व : </th>		
										<th class="col-9 ">विषयाशा विरक्त, अपरिग्रही, ज्ञान-ध्यान-तप में सदा निरत, करुणासागर, परदुःखकातर, शास्त्ररसिक, शान्तस्वभावी, निःस्पृह, समता- विनय-धैर्य और सहिष्णुता की साकार मूर्ति, भद्रपरिणामी, साधना में कठोर, वात्सल्य में नवनीतवत् मृदु, सरल प्रकृति, जिनवाणी प्रसारक, तेजस्वी-तपस्वी महात्मा। </th>		
										</tr>																
										<tr>							
										<th class="col-3" >तीर्थयात्रा : </th>		
										<th class="col-9 ">अतिशयक्षेत्र शिरडशाहपुर, नेमगिरी, नवागढ़, शिरपुर, अन्तरिक्ष पार्श्वनाथ, मुक्तागिरि, अमरावती, भातकुली, कारंजा, बड़वानी, सिद्धवरकूट, बनेड़िया, सोनागिरी, मक्सी पार्श्वनाथ, अशोकनगर (धूबोनजी) गुना (बजरंगगढ़), खजुराहो, चन्देरी, आहारजी, पपोराजी, चाँदखेड़ी, झालरापाटन, श्रीमहावीरजी, पद्‌मप्रभुजी, खानिया-जयपुर।  </th>		
										</tr>																
										<tr>							
										<th class="col-3" >{{__('aacharya_user.samaadhi')}} </th>		
										<th class="col-9 ">फागुन कृष्णा ८ विक्रमसंवत २०४२  जिला - सीकर  (राजस्थान)</th>		
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
						अधिक जानकारी के लिए आप <a class="font_weight" href="https://drive.google.com/file/d/1DL67k6ghFj1_e84qUWunU0LNZ6OYOb3W/view?usp=sharing">मारवाड़ का मार्तण्ड </a> नामक जीवनी को पढ़ सकते है जो की इनके जीवन पर आधारित है....	
				</div>
			</section>		
		</div>
@endsection