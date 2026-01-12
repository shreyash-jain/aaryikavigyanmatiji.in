<div class="header navbar">
	<div class="header-container">
		<div class="nav-logo">
			<a href="{{route('admin.dashboard')}}">
				<div class="logo logo-dark" style="background-image: url('{{asset('backend/assets/images/logo/logo_main.jpg')}}'); height: 75px;"></div>
				<div class="logo logo-white" style="background-image: url('{{asset('backend/assets/images/logo/logo_main.jpg')}}'); height: 75px; background-size: contain; background-repeat: no-repeat; background-position: center center;"></div>
			</a>
		</div>
		<ul class="nav-left">
			<li>
				<a class="sidenav-fold-toggler" href="javascript:void(0);">
					<i class="mdi mdi-menu"></i>
				</a>
				<a class="sidenav-expand-toggler" href="javascript:void(0);">
					<i class="mdi mdi-menu"></i>
				</a>
			</li>		     	
		</ul>
		<ul class="nav-right">
			<li class="dropdown dropdown-animated scale-left">
				<a href="" class="dropdown-toggle" data-toggle="dropdown">
					<i class="mdi mdi-apps"></i>
				</a>
				<ul class="dropdown-menu dropdown-grid col-3 dropdown-lg">
					<li>
						<a href="">
							<div class="text-center">
								<i class="mdi mdi-email-outline font-size-30 icon-gradient-success"></i>
								<p class="m-b-0">Email</p>
							</div>
						</a>
					</li>
					<li>
						<a href="">
							<div class="text-center">
								<i class="mdi mdi-folder-outline font-size-30 icon-gradient-success"></i>
								<p class="m-b-0">Files</p>
							</div>
						</a>
					</li>
					<li>
						<a href="">
							<div class="text-center">
								<i class="mdi mdi mdi-gauge font-size-30 icon-gradient-success"></i>
								<p class="m-b-0">Dashboard</p>
							</div>
						</a>
					</li>
					<li>
						<a href="">
							<div class="text-center">
								<i class="mdi mdi-play-circle-outline font-size-30 icon-gradient-success"></i>
								<p class="m-b-0">Video</p>
							</div>
						</a>
					</li>
					<li>
						<a href="">
							<div class="text-center">
								<i class="mdi mdi-image-filter font-size-30 icon-gradient-success"></i>
								<p class="m-b-0">Images</p>
							</div>
						</a>
					</li>
					<li>
						<a href="">
							<div class="text-center">
								<i class="mdi mdi-image-filter-drama font-size-30 icon-gradient-success"></i>
								<p class="m-b-0">Cloud</p>
							</div>
						</a>
					</li>
				</ul>    
			</li>
<!--			<li class="notifications dropdown dropdown-animated scale-left">
				<span class="counter">2</span>
				<a href="" class="dropdown-toggle" data-toggle="dropdown">
					<i class="mdi mdi-bell-ring-outline"></i>
				</a>
				<ul class="dropdown-menu dropdown-lg p-v-0">
					<li class="p-v-15 p-h-20 border bottom text-dark">
						<h5 class="m-b-0">
							<i class="mdi mdi-bell-ring-outline p-r-10"></i>
							<span>Notifications</span>
						</h5>
					</li>
					<li>
						<ul class="list-media overflow-y-auto relative scrollable" style="max-height: 300px">
							<li class="list-item border bottom">
								<a href="javascript:void(0);" class="media-hover p-15">
									<div class="media-img">
										<div class="icon-avatar bg-primary">
											<i class="ti-settings"></i>
										</div>
									</div>
									<div class="info">
										<span class="title">
											System shutdown
										</span>
										<span class="sub-title">8 min ago</span>
									</div>
								</a>
							</li>
							<li class="list-item border bottom">
								<a href="javascript:void(0);" class="media-hover p-15">
									<div class="media-img">
										<div class="icon-avatar bg-success">
											<i class="ti-user"></i>
										</div>
									</div>
									<div class="info">
										<span class="title">
											New User Registered
										</span>
										<span class="sub-title">12 min ago</span>
									</div>
								</a>
							</li>
							<li class="list-item border bottom">
								<a href="javascript:void(0);" class="media-hover p-15">
									<div class="media-img">
										<div class="icon-avatar bg-warning">
											<i class="ti-file"></i>
										</div>
									</div>
									<div class="info">
										<span class="title">
											New Attacthemnet
										</span>
										<span class="sub-title">12 min ago</span>
									</div>
								</a>
							</li>
							<li class="list-item border bottom">
								<a href="javascript:void(0);" class="media-hover p-15">
									<div class="media-img">
										<div class="icon-avatar bg-info">
											<i class="ti-shopping-cart"></i>
										</div>
									</div>
									<div class="info">
										<span class="title">
											New Order Received
										</span>
										<span class="sub-title">12 min ago</span>
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="p-v-15 p-h-20 text-center">
						<span>
							<a href="" class="text-gray">Check all notifications <i class="ei-right-chevron p-l-5 font-size-10"></i></a>
						</span>
					</li>
				</ul>
			</li>   -->
			<li class="user-profile dropdown dropdown-animated scale-left">
				<a href="" class="dropdown-toggle" data-toggle="dropdown">
					<img class="profile-img img-fluid" src="{{asset('backend/assets/images/avatars/mataji.jpg')}}" alt="">
				</a>
				<ul class="dropdown-menu dropdown-md p-v-0">
					<li>
						<ul class="list-media">
							<li class="list-item p-15">
								<div class="media-img">
									<img src="{{asset('backend/assets/images/avatars/mataji.jpg')}}" alt="">
								</div>
								<div class="info">
									<span class="title text-semibold">Welcome </span>
									<span class="sub-title">{{ucfirst(substr(Auth::user()->name,0,6))}}</span>
								</div>
							</li>
						</ul>
					</li>
					<li role="separator" class="divider"></li>
					<li>
						<a href="{{ route('admin.setting') }}">
							<i class="ti-settings p-r-10"></i>
							<span>Setting</span>
						</a>
					</li>
	<!--				<li>
						<a href="">
							<i class="ti-user p-r-10"></i>
							<span>Profile</span>
						</a>
					</li>
					<li>
						<a href="">
							<i class="ti-email p-r-10"></i>
							<span>Inbox</span>
							<span class="badge badge-pill badge-success pull-right">2</span>
						</a>
					</li>        -->
					<li>
						<a href="{{route('admin.logout')}}">
							<i class="ti-power-off p-r-10"></i>
							<span>Logout</span>
						</a>
					</li>
				</ul>
			</li>

		</ul>
	</div>
</div>