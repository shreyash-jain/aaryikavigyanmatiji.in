<meta name="csrf-token" content="{{ csrf_token() }}" />

<link href="{{asset('frontend\assets\fonts\remixicon.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend\assets\css\googleapis.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend\assets\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend\assets\css\slick.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('frontend\assets\css\custom.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend\assets\css\cursor.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend\assets\css\media-query.css')}}" rel="stylesheet" type="text/css" /> 
<link href="{{asset('frontend\assets\css\slick-theme.css')}}" rel="stylesheet" type="text/css" /> 
<style>
@font-face {
    font-family: 'Hind-Regular';
    src: url('{{ asset("frontend/assets/fonts/Hind-Regular.ttf") }}') format('truetype');
}
@font-face {
    font-family: 'Hind-Bold';
    src: url('{{ asset("frontend/assets/fonts/Hind-Bold.ttf") }}') format('truetype');
}

@font-face {
    font-family: 'Hind-Light';
    src: url('{{ asset("frontend/assets/fonts/Hind-Light.ttf") }}') format('truetype');
}

@font-face {
    font-family: 'Hind-Medium';
    src: url('{{ asset("frontend/assets/fonts/Hind-Medium.ttf") }}') format('truetype');
}

@font-face {
    font-family: 'Hind-SemiBold';
    src: url('{{ asset("frontend/assets/fonts/Hind-SemiBold.ttf") }}') format('truetype');
}
</style>

@yield('styles')
