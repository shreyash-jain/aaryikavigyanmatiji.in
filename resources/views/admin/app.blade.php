
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard </title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{asset('backend/assets/images/logo/apple-touch-icon.png')}}">	
    <link rel="shortcut icon" href="{{asset('backend/assets/images/logo/favicon.png')}}">
	@include('admin.include.style')
</head>

<body>
<div class="app header-info-gradient quick-view-expand side-nav-dark">
<!--<div class="app quick-view-expand header-warning-gradient side-nav-dark">-->
        <div class="layout">
			@include('admin.include.header')
			@include('admin.include.sidebar')
			<div class="page-container">
				@yield('content')
				@include('admin.include.footer')			
			</div>
        </div>
    </div>
	 @include('admin.include.script')   
</body>

</html>