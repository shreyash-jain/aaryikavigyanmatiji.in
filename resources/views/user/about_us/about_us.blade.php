@extends('user.app')
@section('content')
		<!-- Header End -->
		<!-- Content Start -->
		<div class="main-body">
			<!-- Start Header banner -->
			
			<!-- End Header banner -->
			<!-- Our client Succeed Start -->
			
			<!-- Our client Succeed End -->
			<!-- Fight Violence Start -->
			       
			<!-- Fight Violence End -->
			<!-- Welcome Section Start -->
			
			<section class="timeline-wrapper section-p-100 back-white">
				<div class="container-fluid nopadding">
					<div class="row">
						<div class="col-12 text-center">
							<h2 class="color-text container-570 m-auto color-blue">We are The Most Famous Law Firm have A
							History.</h2>
							<img class="mt-10 mb-60 img-100 shape-image" src="{{asset('frontend/assets/images/home/Shape.png')}}" alt="Shape">
							<div class="timeline">
								<h3 class="d-none">hidden</h3>
								<ol>
									<li>
										<div>
											<time>
												2018
											</time>
											<h4 class="mb-20">We are Started new at Wakil Law Firm. </h4>
											Vitae eleifend magna nisi at sem nec neque odio. Quam semper etiam tincidunt leo
											pharetra neque mollis. Scelerisque libero lectus tortor.
										</div>
									</li>
									<li>
										<div>
											<time>
												2019
											</time>
											<h4 class="mb-20">Best Law Firm Company of The Year.</h4>
											Sed massa felis aliquam eu et neque. Auctor velit aliquam ipsum eget lacus
											adipiscing. Est tincidunt auctor diam proin ac. Rhoncus non convallis.
										</div>
									</li>
									<li>
										<div>
											<time>
												2020
											</time>
											<h4 class="mb-20">Opening New One Office at A Time.</h4>
											Sed vitae sed lorem lacus diam tortor aliquam fermentum. Pellentesque lectus
											facilisis enim rhoncus habitant quisque. Magna vitae ornare mi.
										</div>
									</li>
									<li>
										<div>
											<time>
												2021
											</time>
											<h4 class="mb-20">Best Law Firm Company of The Year.</h4>
											Cursus vulputate id urna tempus. Purus amet viverra at consectetur vel. Nulla
											fusce neque semper quis eget malesuada risus sit. Morbi.
										</div>
									</li>
									<li>
										<div>
											<time>
												2022
											</time>
											<h4 class="mb-20">We are Started new at Wakil Law Firm. </h4>
											Vitae eleifend magna nisi at sem nec neque odio. Quam semper etiam tincidunt leo
											pharetra neque mollis. Scelerisque libero lectus tortor.
										</div>
									</li>
									<li>
										<div>
											<time>
												2023
											</time>
											<h4 class="mb-20">Best Law Firm Company of The Year.</h4>
											Sed massa felis aliquam eu et neque. Auctor velit aliquam ipsum eget lacus
											adipiscing. Est tincidunt auctor diam proin ac. Rhoncus non convallis.
										</div>
									</li>
									<li>
										<div>
											<time>
												2024
											</time>
											<h4 class="mb-20">Opening New One Office at A Time.</h4>
											Sed vitae sed lorem lacus diam tortor aliquam fermentum. Pellentesque lectus
											facilisis enim rhoncus habitant quisque. Magna vitae ornare mi.
										</div>
									</li>
									<li></li>
								</ol>

								<div class="arrows">
									<button class="arrow arrow__prev disabled" disabled>
										<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_prev.svg"
										alt="prev timeline arrow">
									</button>
									<button class="arrow arrow__next">
										<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_next.svg"
										alt="next timeline arrow">
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Timeline End -->
			<!-- Counter Section Start -->
			
			<!-- Counter Section End -->
			<!-- Featured cases Start -->
			<section class="featured-cases feature-gapping carbon-blue">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-md-4 mobile-align">
							<h2 class="mb-10">Featured Cases</h2>
							<img class="shape-image img-100 mb-60-rs" src="{{asset('frontend/assets/images/home/Shape.png')}}" alt="Shape">
						</div>
						<div class="col-12 col-md-8">
							<p class="mobile-align">Wakil is at the forefront of corporate, monetary, and legal innovation.
								We can help our clients succeed because we have a strong culture filled with a spirit of
							cooperation and creativity.</p>
						</div>
					</div>
					<div class="row case-card-v2">
						<div class="col-12">
							<h3 class="d-none">Hidden</h3>
							<ul id="container-yscroll" class="container-yscroll">
								<li class="thumbnail">
									<div class="case-card">
										<figure class="snip-case case-yellow">
											<img src="{{asset('frontend/assets/images/cases/blog-image-1.jpg')}}" alt="blog image">
											<i class="ri-scales-3-line"></i>
											<a href="single-cases-3.html"></a>
										</figure>
										<div class="case-card-desc">
											<p class="c-category text-uppercase mb-10">Family</p>
											<h4 class="c-title">
												<a class="hover-acting"
												href="single-cases-3.html">Family Violence</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="thumbnail">
									<div class="case-card mb-25">
										<figure class="snip-case case-yellow">
											<img src="{{asset('frontend/assets/images/cases/blog-image-9.jpg')}}" alt="blog image">
											<i class="ri-scales-3-line"></i>
											<a href="single-cases-3.html"></a>
										</figure>
										<div class="case-card-desc">
											<p class="c-category text-uppercase mb-10">CRIMINAL</p>
											<h4 class="c-title"><a class="hover-acting"
												href="single-cases-3.html">Criminal Tax Evasion</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="thumbnail">
									<div class="case-card">
										<figure class="snip-case case-yellow">
											<img src="{{asset('frontend/assets/images/cases/blog-image-2.jpg')}}" alt="blog image">
											<i class="ri-scales-3-line"></i>
											<a href="single-cases-3.html"></a>
										</figure>
										<div class="case-card-desc">
											<p class="c-category text-uppercase mb-10">BUSINESS</p>
											<h4 class="c-title"><a class="hover-acting"
												href="single-cases-3.html">Public Company Fraud</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="thumbnail">
									<div class="case-card mb-25">
										<figure class="snip-case case-yellow">
											<img src="{{asset('frontend/assets/images/cases/blog-image-10.jpg')}}" alt="blog image">
											<i class="ri-scales-3-line"></i>
											<a href="single-cases-3.html"></a>
										</figure>
										<div class="case-card-desc">
											<p class="c-category text-uppercase mb-10">HEALTH</p>
											<h4 class="c-title"><a class="hover-acting"
												href="single-cases-3.html">Car Accident Case</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="thumbnail">
									<div class="case-card">
										<figure class="snip-case case-yellow">
											<img src="{{asset('frontend/assets/images/cases/blog-image-1.jpg')}}" alt="blog image">
											<i class="ri-scales-3-line"></i>
											<a href="single-cases-3.html"></a>
										</figure>
										<div class="case-card-desc">
											<p class="c-category text-uppercase mb-10">FAMILY LAW</p>
											<h4 class="c-title"><a class="hover-acting"
												href="single-cases-3.html">Benefits Secured Life</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="thumbnail">
									<div class="case-card mb-60-rs">
										<figure class="snip-case case-yellow">
											<img src="{{asset('frontend/assets/images/cases/blog-image-9.jpg')}}" alt="blog image">
											<i class="ri-scales-3-line"></i>
											<a href="single-cases-3.html"></a>
										</figure>
										<div class="case-card-desc">
											<p class="c-category text-uppercase mb-10">CIVIL RIGHTS</p>
											<h4 class="c-title"><a class="hover-acting"
												href="single-cases-3.html">Complete Defense Law</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="thumbnail cases-v2">
									<div class="case-card mb-60-rs">
										<div class="in-top button-whole-wrap">
											<a href="our-cases-5.html" class="button-wrap">
												<span>
													View All Cases <i class="ri-arrow-right-line"></i>
												</span>
											</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- Featured cases End -->
			<!-- Securing Justice Start -->
			
			<!-- Securing Justice End -->
			<!-- Legal issue consultation Start -->
			
			<!-- Legal issue consultation End -->
			<!-- Client’s Testimonial Start -->
			
			<!-- Client’s Testimonial End -->
			<!-- Logo carousel Start -->
			
			<!-- Logo carousel End -->
			<!-- Video 2 overlapping section Start-->
			
			
			<!-- Video 2 overlapping section End -->
			<!-- Get free consultation & FAQs Start -->
			
			<!-- Get free consultation & FAQs End -->
		</div>
		<!-- Content End -->
		<!-- Footer Start -->
@endsection

@section('scripts') 

@endsection