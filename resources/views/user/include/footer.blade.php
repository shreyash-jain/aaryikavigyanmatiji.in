<?php
$site_data = App\Models\Site::latest()->first();
?>
<footer class="footer-block-home-1 footer-V3 bc-color-orange-tcw">
			<div class="container">

				<div class="row align-items-center ">
					<div class="col-lg-4 col-sm-4 ">
						<div class="row">
							<div>
							@if(isset($site_data->footer_logo) && !empty($site_data->footer_logo) && file_exists(public_path('frontend/images/site/'.$site_data->footer_logo)))
								<img src="{{asset('frontend/images/site/'.$site_data->footer_logo)}}" width="150px" alt="Site logo"></a>
							@endif
							</div>
							<div>
							<p class=" mt-4 color-dark-blue">{{"$site_data->footer_description"}}
							</p>
							</div>
							<div class="wrapper mt-3">
								<ul class="social">
				<!--					<li>
										<a href="{{$site_data->twitter_url}}" class="social-item" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>  -->
									<li>
										<a href="{{$site_data->facebook_url}}" class="social-item" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="{{$site_data->youtube_url}}" class="social-item" target="_blank">
											<i class="ri-youtube-fill"></i>
										</a>
									</li>
									<li>
										<a href="{{$site_data->instagram_url}}" class="social-item" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="{{$site_data->whatsapp_url}}" class="social-item" target="_blank">
											<i class="ri-whatsapp-line"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-3 offset-lg-1 col-sm-3 offset-sm-0">
						<div class="subscribe-cap footer-list color-light-red-tcw">Quick Links</div>
						<ul class="footer-menu-list font_size_20">
							<li>
								<a href="{{route('guru-parampara.index')}}" data-hover="Guru Parampara"><span>Guru Parampara</span></a>
							</li>
								<a href="{{route('gallery.getall')}}" data-hover="Gallery"><span>Gallery</span></a>
							</li>
							<li>  
								<a href="{{route('contact_us.index')}}" data-hover="Contact Us"><span>Contact Us</span></a>
							</li>
						</ul>
					</div>
					<div class="col-lg-4 col-sm-4 ">
						<div class="subscribe-cap footer-list color-light-red-tcw">Contact Us</div>
						<p class=" phone-div"> <i class="ri-phone-fill color-light-red-tcw font-footer"></i> <a class="align-top" href="tel:
							{{$site_data->mobile_number}}">{{$site_data->mobile_number}}</a> ,  <a class="align-top" href="tel:
							{{$site_data->mobile_number_1}}">{{$site_data->mobile_number_1}}</a>
						</p>
						
				        <p class=" phone-div"><i class="ri-mail-fill color-light-red-tcw font-footer"></i> <a class="color-dark-blue align-top" href="mailto: @if(isset($site_data->email) && !empty($site_data->email) ) 
								{{$site_data->email}}
							@endif ">
							@if(isset($site_data->email) && !empty($site_data->email) )
								{{$site_data->email}}
							@endif</a>
						</p>
						<div class="d-flex ">
							<div class="">
								<p class=""> <i class="ri-map-pin-fill color-light-red-tcw font-footer"></i></p>
							</div>
							<div class="">
								<p><a class="phone-div">{{$site_data->address}} </a></p>
							</div>
						</div>						
					</div>
				</div>
				<div class="row footer-bottom-bar">
					<div class="col-12">
						<hr>
					</div>
				</div>
				<div class="row footer-bottom-copyright">
					<div class="col-12 col-md-6 color-dark-blue">
						Copyright © <script>document.write(new Date().getFullYear()) </script> <a href="https://aaryikavigyanmatiji.in/" data-hover="AARYIKAVIGYANMATIJI"
						target="_blank"><span>AARYIKAVIGYANMATIJI</span></a> - All Rights Reserved.
					</div>
					<div class="col-12 col-md-6 text-right color-dark-blue">
						Maintained by <a href="https://www.vidyayatan.com/" data-hover="VIDYAYATAN" target="_blank"><span>VIDYAYATAN</span></a>
					</div>
				</div>
			</div>
		</footer>    