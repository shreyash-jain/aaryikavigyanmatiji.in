<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
	
    <!-- Favicon -->
    <link rel="apple-touch-icon" href="assets/images/logo/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
	@include('admin.login.include.style')
   
</head>

<body>
	@yield('content')   
	<script src="assets/js/vendor.js"></script>

    <script src="assets/js/app.min.js"></script>
	@include('admin.login.include.script')
    
</body>

</html>