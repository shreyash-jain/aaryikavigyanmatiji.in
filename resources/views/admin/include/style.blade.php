<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="{{asset('backend\assets\vendor\bootstrap\dist\css\bootstrap.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend\assets\vendor\PACE\themes\blue\pace-theme-minimal.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend\assets\vendor\perfect-scrollbar\css\perfect-scrollbar.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('backend\assets\css\font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend\assets\css\themify-icons.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend\assets\css\materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend\assets\css\animate.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend\assets\css\app.css')}}" rel="stylesheet" type="text/css" />


@yield('styles')