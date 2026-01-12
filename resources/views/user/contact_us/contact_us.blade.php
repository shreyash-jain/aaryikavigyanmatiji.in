@extends('user.app')
@section('content')
		<!-- Header End -->
		<!-- Content Start -->
		<div class="main-body">
			<!-- Start Header banner -->
			<!-- End Header banner -->
			<!-- Single content start -->
			<section class="blog-sidebar-page section-p-100">
				<div class="container">	
				<div class="text-center">		
				<h2 class="color-blue">क्या हम आपकी कोई सहायता कर सकते है ? </h2>			
				<img class="mt-10 mb-20 img-100 shape-image" src="{{asset('frontend/assets/images/default/Line 1.png')}}" alt="Shape">	
				<p class="color-dark-blue mb-40">हमसे संपर्क करने के लिए, कृपया नीचे दिए गए फ़ॉर्म का उपयोग करें।यदि आपके पास कोई प्रश्न या सुझाव हैं, तो हमें जानकारी दें, हम आपकी सहायता करेंगे।हमें आपके विचार और प्रतिक्रिया का इंतजार है। हमें खुशी होगी आपकी मदद करने में।आप हमें ईमेल भी कर सकते हैं :<a href="mailto::aaryikavigyanmatiji.in@gmail.com"> aaryikavigyanmatiji.in@gmail.com</a> पर। हम आपके संदेश का जल्दी से जल्दी उत्तर देंगे।</p>		
				</div>						
				<div class="row left-sidebar-res">		
				
						<div class="col-12 col-md-6">
							<div class="contact-information">
								<div class="d-flex mb-40">
									<div class="img-calls">
										<img class="" src="{{asset('frontend/assets/images/contact/Icon-1.png')}}" alt="Icon">
									</div>
									<div class="calls">
										<p><a href="tel:+919993967184">+91 9993967184</a></p>
										<p><a href="tel:+918357958209">+91 8357958209</a></p>
									</div>
								</div>
								<div class="d-flex mb-40">
									<div class="img-calls">
										<img class="" src="{{asset('frontend/assets/images/contact/Icon-2.png')}}" alt="Icon">
									</div>
									<div class="calls">
										<p><a href="mailto::aaryikavigyanmatiji.in@gmail.com">aaryikavigyanmatiji.in@gmail.com</a></p>
									</div>
								</div>
								<div class="d-flex mb-40">
									<div class="img-calls">
										<img class="tcw_fix" src="{{asset('frontend/assets/images/contact/whatsapp-60.png')}}" alt="Icon">
									</div>
									<div class="calls">
										<p><a href="https://chat.whatsapp.com/IGuM3Zp28my5JB5TDXsp9M">  गुरू माँ विज्ञानमती जी भक्त परिवार</a></p>
										<p><a href="https://chat.whatsapp.com/LJZ812tx8v9LlgI8TDVdf2">गुरु मां विज्ञान मति विहार मंडल</a></p>
									</div>
								</div>
								<div class="d-flex">
									<div class="img-calls">
										<img class="" src="{{asset('frontend/assets/images/contact/Icon-3.png')}}" alt="Icon">
									</div>
									<div class="calls">
										<p ><a href="">श्री 1008 चंद्रप्रभु दिगंबर जैन मंदिर,<br> उदय नगर,  बंगाली चौराहा के पास, इंदौर (म.प्र.) <</a></p>
									</div>
								</div>
							</div>
						</div>	
						<div class="col-12 col-md-6 mt-60-rs">		
							<div class="comment-form-wrapper">
								<div class="form-contact">
									<form class="text-left comment-form"  id="contact_us"   action="{{ route('contact_us.store') }}" method="post">
									@csrf
										<div class="row g-4">
											<div class="col-12">
												<div class="input-block">
													<input type="text" id="name" name="name" class="form-control floating-placeholder" placeholder="Your Name*" required>
												</div>
											</div>
											<div class="col-12">
												<div class="input-block">
													<input type="email" id="email" name="email" class="form-control floating-placeholder" placeholder="Your Email*" required>
												</div>
											</div>
											<div class="col-12">
												<div class="input-block">
													<input type="text" id="subject" name="subject" class="form-control floating-placeholder" placeholder="Subject*" required>
												</div>
											</div>										
											<div class="col-12">
												<div class="input-block">
													<textarea id="comment" name="comment" class="form-control floating-placeholder" rows="3" placeholder="Your Comment*" required></textarea>
												</div>
											</div>
											<div class="col-12 form-button mobile-align case-mt ">
												<div class="send-btn button-wrap-case1">
													<button type="submit" class="button-wrap button-wrap-case">
														<span>
															Send <i class="ri-arrow-right-line"></i>
														</span>
													</button>
												</div>
											</div>
										</div>
									</form>							    
								</div>
							</div>
						</div>				
					</div>
				</div>	
			</section>
		</div>
@endsection
@section('scripts') 
<script src="{{asset('backend\validation\jquery.validate.js')}}"></script>
<script>
	var ok = "{{trans('button.ok')}}" ; 
</script>
<script>

	$(document).ready(function(){
		$("#contact_us").validate({
			onkeyup: function(element) {$(element).valid()},
			onchange: function(element) {$(element).valid()},
			onfocusout: false,
			rules: {
				name: {	required: true},
				email: {	required: true},
				subject: {	required: true},
				comment: {	required: true},
			},					
			
			messages: { 
			},
			submitHandler: function(form) {
				
				var datas = new FormData(form);
					$.ajax({
						url: form.action, 
						type: form.method,             
						data: datas,
						dataType: "json", 
						cache:false,
						contentType: false,
						processData: false,				
						success: function(data) {
							console.log(data);
							if(data.error==false){
								Swal.fire({
									text: data.message,
									icon: "success",
									showCancelButton: false,
									buttonsStyling: false,
									allowOutsideClick: false,
									confirmButtonText: ok, 
									customClass: {
										confirmButton: "btn font-weight-bold btn-primary",
									}
								}).then(function (result) {
									if (result.value) {
										location.reload();
									}
								});
							} 
							if(data.error==true){
								var html='<ul class="text-left text-danger">';
								$(data.errors).each(function(key, value){
									html +='<li>';
									html +=value;
									html +='</li>';
								});
								html +='</ul>';
									Swal.fire({
										html: html,
										icon: "warning",
										allowOutsideClick: false,
										buttonsStyling: false,
										confirmButtonText: "OK",
										customClass: {
											confirmButton: "btn font-weight-bold btn-primary",
										}
									});
							}
						}
					});
				return false;
			},
			highlight: function(element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
			}
		});
	});		
</script>	
<script src="{{asset('backend\assets\js\sweetalert\sweetalert.min.js')}}"></script>
@endsection