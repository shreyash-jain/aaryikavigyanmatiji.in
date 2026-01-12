@extends('user.app')
@section('content')
	<div class="main-body">
		<section class="detail-page-wrap att-2-spacing">	
			<div class="container att-2-container p-0">					
				<div class="row p-3">						
					<div class="col-12 col-md-4">						
						<div class="left-sidebar frame-box">							
							<div class="image-box frame-inner-box">							
								<img class="img-100" src="{{asset('frontend/images/aaryika/vidyasagarji.jpg')}}" alt="Image">		
							</div>						
						</div>				
					</div>	
					<div class="col-12 col-md-8">
						<div class="right-content">			
							<div class="lawyer-detail back-white-light mb-40 nopadding text-center">							
							<h2 class="d-none">Hidden</h2>															
							<h3 class="d-none">Hidden</h3>													
							<h4 class="d-none">Hiddeb</h4>														
							<h4 class="bc-color-dark-red-tcw mb-20 d-block att-head color-whit">आचार्य श्री 108 विद्यासागर महाराज जी</h4>	
							</div>																							
							<img class="mt-10 mb-20 img-100 " src="{{asset('frontend/assets/images/default/Line 1.png')}}" alt="Shape">		
							<table class="table table_color">								 														
							<tbody>   											<tr>								
							<th class="col-3" >{{__('aacharya_user.name')}} </th>										
							<th class="col-9 ">आचार्य श्री 108 विद्यासागर महाराज जी</th>											</tr>		
							<tr>																	
							<th class="col-3" >{{__('aacharya_user.old_name')}} </th>									
							<th class="col-9 ">श्री विद्याधर जी जैन अष्टगे </th>									</tr>							
							<tr>															<th class="col-3" >{{__('aacharya_user.father_name')}} </th>	
							<th class="col-9 ">श्री मल्लप्पा जी जैन अष्टगे</th>										
							</tr>																	<tr>				
							<th class="col-3" >{{__('aacharya_user.mother_name')}} </th>											
							<th class="col-9">श्रीमती श्रीमंती जी जैन अष्टगे </th>												</tr>							
							<tr>										<th class="col-3" >{{__('aacharya_user.date_of_birth')}} </th>			
							<th class="col-9">10 अक्टूबर, 1946, आश्विन शुक्ल- 15 वि.सं.- 2003 (शरद पूर्णिमा)  </th>									</tr>					
							<tr>										<th class="col-3" >{{__('aacharya_user.birth_place')}} </th>			
							<th class="col-9">सदलगा, चिक्कोड़ी, जिला-बेलगाँव (कर्नाटक)  </th>									</tr>									
							<tr>										<th class="col-3" >{{__('aacharya_user.secular_education')}} </th>			
							<th class="col-9">नवमीं  </th>									</tr>														
							<tr>										<th class="col-3" >{{__('aacharya_user.brahmacharya_vrat')}} </th>				
							<th class="col-9">1966 में आचार्य श्री देशभूषण जी महाराज से  </th>									</tr>									
							<!---				<tr>																	
							<th class="col-3" >{{__('aacharya_user.kshullak_deeksha')}} </th>										
							<th class="col-9 "> 25 अप्रैल 1955, सोमवार (अक्षय तृतीया), मन्सूरपुर (मुजफ्फरनगर–उ.प्र.) (दीक्षा उपरांत आपका नाम क्षुलक श्री ज्ञानभूषण जी हुआ ।)  </th>				
							</tr>										<tr>															
							<th class="col-3" >{{__('aacharya_user.ailak_deeksha')}} </th>											
							<th class="col-9 "> सन्-1957, वि.सं. - 2014 (आचार्य श्री देशभूषणजी महाराज से)   </th>												
							</tr>	 -->																<tr>						
							<th class="col-3" >{{__('aacharya_user.muni_deeksha')}} </th>										
							<th class="col-9  ">30 जून, 1968, आषाढ़ शुक्ल-पंचमी वि.सं.- 2025, अजमेर (राजस्थान) </th>									
							</tr>																<tr>							
							<th class="col-3" >{{__('aacharya_user.deeksha_guru')}} </th>										
							<th class="col-9 ">मुनि श्री ज्ञानसागर जी महाराज </th>												</tr>		
							<tr>										<th class="col-3" >{{__('aacharya_user.aachaary_pad')}} </th>	
							<th class="col-9">22 नवम्बर 1972, बुधवार, मार्गशीर्ष कृष्ण- 2, वि.सं. 2029 नसीराबाद, जिला-अजमेर  (राज.) </th>	
							</tr>
							<tr>
								<th class="col-3" >{{__('sanghast_aaryika_user.mother_tongue')}} </th>
								<th class="col-9">कन्नड़</th>
							</tr>
							<tr>	
							<th class="col-3" >{{__('aacharya_user.krtitv')}} </th>						
							<th class="col-9">1. चेतन कृतित्व : 120 मुनि, 172 आर्यिकायें, 20 ऐलक, 14 क्षुल्लक, 3 क्षुल्लिकायें और 1 हजार से अधिक ब्रह्मचारी एवं ब्रह्मचारिणी बहिनें साधनारत हैं। </th>					
							</tr>									<tr>									
							<th class="col-3" >{{__('aacharya_user.sanskrt_rachanaaye')}} </th>				
							<th class="col-9">1.शारदा स्तुति, 2. श्रमण शतकम्, 3. निरंजन शतकम्, 4. भावना शतकम्, 5. परीषहजय शतकम्, 6. सुनीति शतकम्, 7. चेतन चन्द्रोदय, 8. धीवरोदय चंपू काव्य (अप्रकाशित)  </th>		
							</tr>																		<tr>								
							<th class="col-3" >{{__('aacharya_user.hindi_kaavy')}} </th>									
							<th class="col-9"> 9. मूकमाटी महाकाव्य, 10. नर्मदा का नरम कंकर, 11. डूबो मत लगाओ डुबकी, 12. तोता क्यों रोता ? 13. चेतना के गहराव में, 14.अनेक हाईको कवितायें (अप्रकाशित हैं)  </th>			
							</tr>									<tr>								
							<th class="col-3" >{{__('aacharya_user.stuti_saroj')}} </th>					
							<th class="col-9">13. आचार्य शान्तिसागर स्तुति, 14. आचार्य वीरसागर स्तुति, 15. आचार्य शिवसागर स्तुति 16. आचार्य ज्ञानसागर स्तुति, 17. अध्यात्म भक्तिगीत (7 भक्तिगीत ) </th>			
							</tr>									<tr>									
							<th class="col-3" >{{__('aacharya_user.hindi_shatak')}} </th>					
							<th class="col-9">18. निजानुभव शतक, 19. मुक्तक शतक, 20. श्रमण शतक, 21. निरंजन शतक, 22. भावना शतक 23. परीषहजय शतक, 24. सुनीति शतक, 25. दोहादोहन शतक, 26. सूर्योदय शतक, 27. पूर्णादय शतक 28. सर्वोदय शतक, 29. जिनस्तुति शतक</th>				
							</tr>									<tr>									
							<th class="col-3" >{{__('aacharya_user.anuvaadit_granth')}} </th>							
							<th class="col-9">1. कुन्दकुन्द का कुन्दन (समयसार), 2. निजामृतपान (समयसार कलश), 3. अष्ट पाहुड़, 4. नियमसार 5. बारस अणुवेक्खा, 6. पंचास्तिकाय, 7. इष्टोपदेश (बसंततिलका), 8. प्रवचनसार 9. समाधिसुधा शतक (समाधि शतक), 10. नव भक्तियाँ (आचार्य पूज्यपाद कृत) 11. समन्तभद्र की भद्रता (स्वयंभू स्तोत्र), 12. रयणमंजूषा (रत्नकरण्डक श्रावकाचार) 13. आप्तमीमांसा (देवागम स्तोत्र), 14. द्रव्य संग्रह (बसंततिलका छंद), 15. गोमटेश अष्टक, 16. योगसार 17. आप्त परीक्षा, 18. जैन गीता (समणसुतं), 19. कल्याण मंदिर स्तोत्र, 20. जिन स्तुति (पात्रकेसरी स्तोत्र) 21. गुणोदय (आत्मानुशासन), 22. स्वरूप संबोधन, 23. इष्टोपदेश (ज्ञानोदय), 24. द्रव्यसंग्रह (बसंततिलका एवं ज्ञानोदय ) </th>						
							</tr>									<tr>													
							<th class="col-3" >{{__('aacharya_user.pravachan_saahity')}} </th>									
							<th class="col-9 ">1. प्रवचन पर्व, 2. प्रवचन पीयूष, 3. प्रवचनामृत, 4. प्रवचन पारिजात, 5. प्रवचन पंचामृत, 6. प्रवचन प्रदीप 7. प्रवचनप्रमेय, 8. प्रवचनिका, 9. प्रवचनसुरभि, 10. तेरह सौ एक, 11. धीवर की धी, 12. सर्वोदय सार 13. सीप के मोती, 14. विद्या वाणी, 15. अकिंचित्कर, 16. चरण आचरण की ओर, 17. कर विवेक से काम 18. धर्म देशना, 19. कुण्डलपुर देशना, 20. तपोवन देशना, 21. आदशो के आदर्श, 22. सिद्धोदय सार 23. कौन कहाँ तक साथ देगा, 24. समागम, 25. गुरुवाणी, 26. व्यामोह की पराकाष्ठा, 27. भक्त का उत्सर्ग 28. आत्मानुभूति ही समयसार, 29. मूर्त से अमूर्त की ओर, 30. स्वराज और भारत, 31.अहिंसा सूत्र, 32. मेरे सपनों का भारत, 33. भारत की भाषा राष्ट्र भाषा हो, 34. जैन दर्शन का हृदय, 35. जयन्ती से परे, 36.सत्य की छाँव में, 37. ब्रह्मचर्य चेतन का भोग, 38. भोग से योग की ओर, 39. आदर्श कौन.?, 40. मर हम.... मरहम बनें,  41. मानसिक सफलता, 42. न धमों धार्मिकैर्विना, 43. डबडबाती आँखें । इस प्रकार 50 अधिक कृतियाँ हैं।  </th>								
							</tr>									<tr>													
							<th class="col-3" >{{__('aacharya_user.granth_pravachan')}} </th>									
							<th class="col-9 ">समयोपदेश भाग 1-2, गुरुवयणं, दिव्योपदेश, इष्टोपदेश, पंचास्तिकायोपदेश, श्रुताराधना भाग 1-2-3 (और भी बहुत सी कृतियाँ हैं जिनके नाम ज्ञात नहीं हो सके हैं।) </th>		
							</tr>									<tr>															
							<th class="col-3" >{{__('aacharya_user.samaadhi')}} </th>											
							<th class="col-9 ">दिनांक 18 फरवरी 2024 </th>											
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