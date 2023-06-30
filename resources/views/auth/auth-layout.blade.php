<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Vekpod</title>
    <meta name="description" content="Music, Musician, Bootstrap">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{{asset('assets/images/podcast logo2.png')}}">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="{{asset('assets/images/logo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css/animate.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/glyphicons/glyphicons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/material-design-icons/material-design-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/styles/app.min.css')}}">
</head>
<body>
<div class="app dk" id="app">
    <div class="padding">
        <div class="navbar">
            <div class="pull-center"><a href="{{url('index')}}" class="navbar-brand md">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
                        <circle cx="24" cy="24" r="24" fill="rgba(255,255,255,0.2)"/>
                        <circle cx="24" cy="24" r="22" fill="#1c202b" class="brand-color"/>
                        <circle cx="24" cy="24" r="10" fill="#ffffff"/>
                        <circle cx="13" cy="13" r="2" fill="#ffffff" class="brand-animate"/>
                        <path d="M 14 24 L 24 24 L 14 44 Z" fill="#FFFFFF"/>
                        <circle cx="24" cy="24" r="3" fill="#000000"/>
                    </svg>
                    <img src="{{asset('assets/images/logo.png')}}" alt="." class="hide"> <span class="hidden-folded inline">Vekpod</span></a>
            </div>
        </div>
    </div>


    @yield('content')

</div>
<script src="{{asset('assets/scripts/app.min.js')}}"></script>
</body>
</html>
