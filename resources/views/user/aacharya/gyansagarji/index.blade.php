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
									<img class="img-100" src="{{asset('frontend/images/aaryika/gyansagarji.jpg')}}" alt="Image">
								</div>
							</div>
						</div>
						<div class="col-12 col-md-8">					
							<div class="right-content">					

							<div class="lawyer-detail back-white-light mb-40 nopadding text-center">		
							<h2 class="d-none">Hidden</h2>													
							<h3 class="d-none">Hidden</h3>													
							<h4 class="d-none">Hiddeb</h4>													
							<h4 class="bc-color-dark-red-tcw mb-20 d-block att-head color-whit">आचार्य श्री 108 ज्ञानसागर महाराज जी</h4>		
							</div>																								
							<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 1.png')}}" alt="Shape">		
							<table class="table table_color">								 								
							<tbody>   
							<tr>																	
							<th class="col-3" >{{__('aacharya_user.name')}} </th>				
							<th class="col-9 ">आचार्य श्री 108 ज्ञानसागर महाराज जी</th>									
							</tr>															
							<tr>		
							<th class="col-3" >{{__('aacharya_user.old_name')}} </th>		
							<th class="col-9 ">श्री भूरामल जी शास्त्री (शान्तिकुमार भी था) </th>					
							</tr>														
							<tr>													
							<th class="col-3" >{{__('aacharya_user.father_name')}} </th>			
							<th class="col-9 ">श्री चतुर्भुज जी छावड़ा </th>						
							</tr>											
							<tr>												
							<th class="col-3" >{{__('aacharya_user.mother_name')}} </th>	
							<th class="col-9">श्रीमती धृतवरी देवी जी छावड़ा </th>							
							</tr>															
							<tr>									
							<th class="col-3" >{{__('aacharya_user.date_of_birth')}} </th>		
							<th class="col-9">24 अगस्त 1897, सोमवार, भाद्रपद कृष्ण एकादशी, वि.सं. - 1954 </th>			
							</tr>																
							<tr>									
							<th class="col-3" >{{__('aacharya_user.birth_place')}} </th>	
							<th class="col-9">राणोली, जिला - सीकर (राजस्थान) </th>							
							</tr>														
							<tr>								
							<th class="col-3" >{{__('aacharya_user.secular_education')}} </th>		
							<th class="col-9"> स्याद्वाद् विद्यालय बनारस में संस्कृत साहित्य एवं जैन दर्शन की उच्च शिक्षा प्राप्त की  </th>		
							</tr>													
							<tr>									
							<th class="col-3" >{{__('aacharya_user.brahmacharya_vrat')}} </th>		
							<th class="col-9">26 जून 1947, गुरुवार (सातवीं प्रतिमा के रूप में), आषाढ़ शुक्ल - अष्टमी वि.सं. - 2004, अजमेर नगर में (आचार्य श्री वीरसागर जी महाराज से)   </th>		
							</tr>																							
							<tr>												
							<th class="col-3" >{{__('aacharya_user.kshullak_deeksha')}} </th>		
							<th class="col-9 "> 25 अप्रैल 1955, सोमवार (अक्षय तृतीया), मन्सूरपुर (मुजफ्फरनगर–उ.प्र.) (दीक्षा उपरांत आपका नाम क्षुलक श्री ज्ञानभूषण जी हुआ ।)  </th>		
							</tr>										<tr>													
							<th class="col-3" >{{__('aacharya_user.ailak_deeksha')}} </th>											
							<th class="col-9 "> सन्-1957, वि.सं. - 2014 (आचार्य श्री देशभूषणजी महाराज से)   </th>												
							</tr>																
							<tr>					
							<th class="col-3" >{{__('aacharya_user.muni_deeksha')}} </th>		
							<th class="col-9  ">22 जून 1959, सोमवार, आषाढ़ कृष्ण - द्वितीया, वि. सं.-2016 खनिया जी की नसिया, जयपुर (राजस्थान) </th>		
							</tr>														
							<tr>															
							<th class="col-3" >{{__('aacharya_user.deeksha_guru')}} </th>	
							<th class="col-9 ">आचार्य श्री शिवसागर जी महाराज </th>							
							</tr>								
							<tr>			
							<th class="col-3" >{{__('aacharya_user.aachaary_pad')}} </th>		
							<th class="col-9">7 फरवरी 1969, शुक्रवार, फाल्गुन कृष्ण - 5, वि.सं. - 2025 नसीराबाद, अजमेर (राजस्थान)</th>		
							</tr>									<tr>									
							<th class="col-3" >{{__('aacharya_user.deekshit_shishyagan')}} </th>			
							<th class="col-9">आचार्य श्री विद्यासागर जी, आचार्य कल्प श्री विवेकसागर जी, मुनि श्री विजयसागर जी, ऐलक श्री सन्मतिसागरजी, क्षुल्लक श्री आदिसागरजी, क्षुल्लक श्री स्वरूपानंदजी, क्षुल्लक श्री सुखसागर जी, क्षुल्लक श्री संभवसागर जी </th>
							</tr>							
							<tr>								
							<th class="col-3" >{{__('aacharya_user.charitra_chakravarti_pad')}} </th>		
							<th class="col-9">20 अक्टूबर 1972 (नसीराबाद में क्षुलक श्री स्वरूपानंदजी की दीक्षा के समय) </th>					
							</tr>									<tr>									
							<th class="col-3" >{{__('aacharya_user.aachaary_pad_tyaag')}} </th>			
							<th class="col-9">22 नवम्बर 1972, बुधवार, मार्गशीर्ष कृष्ण - द्वितीया, वि.सं. - 2029 नसीराबाद (राजस्थान)  </th>		
							</tr>									<tr>									
							<th class="col-3" >{{__('aacharya_user.samaadhi')}} </th>						
							<th class="col-9 ">1 जून 1973, शुक्रवार, ज्येष्ठ कृष्ण -15 (अमावस्या) वि.सं. - 2030, प्रातः 10 बजकर 50 मिनिट पर नसीराबाद, अजमेर (राजस्थान) </th>		
							</tr>										<tr>													
							<th class="col-3" >{{__('aacharya_user.saahity_srjan')}} </th>										
							<th class="col-9 ">संस्कृत ग्रंथ :- महाकाव्य - जयोदय (दो भाग), वीरोदय, सुदर्शनोदय, भद्रोदय, दयोदय (चम्पूकाव्य), मुनि मनोरंजनाशीति (मुक्तक काव्य), ऋषि कैसा होता है (मुक्तक काव्य) सम्यक्त्वसार शतक, प्रवचनसार प्रतिरूपक, शांतिनाथ पूजन विधान हिन्दी ग्रंथ :- ऋषभावतार, गुणसुन्दर वृतान्त, भाग्योदय, जैन विवाह विधि, तत्त्वार्थसूत्र टीका, कर्तव्यपथ प्रदर्शन, विवेकोदय, सचित्त विवेचन, सचित्त विचार, देवागम स्तोत्र पद्यानुवाद साहित्य :- नियमसार, अष्टपाहुड़, पवित्र मानव जीवन, स्वामी कुंद-कुंद और सनातन जैन धर्म, इतिहास के पन्ने, मानव धर्म, समयसार तात्पर्य वृत्ति टीका (दार्शनिक ग्रंथ हैं)  </th>	
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
						अधिक जानकारी के लिए आप <a class="font_weight" href="https://drive.google.com/file/d/1Ojgdz7Oe9iHpIEp7iHiduqjWdvgjiEvF/view?usp=sharing">राणोली रत्नाकर  </a> नामक जीवनी को पढ़ सकते है जो की इनके जीवन पर आधारित है....
				</div>
			</section>	
		</div>
@endsection