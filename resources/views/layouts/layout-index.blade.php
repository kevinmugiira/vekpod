<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>vekpod</title>
    <meta name="description" content="Music, Musician, Bootstrap">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{{asset('assets/images/podcast logo2.png')}}">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="{{asset('assets/images/logo.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css/animate.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/glyphicons/glyphicons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/material-design-icons/material-design-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/styles/app.min.css')}}">
</head>
<body>
<div class="app dk" id="app">
    <div id="content" class="app-content white bg" role="main">
        <div class="app-header white lt box-shadow-z1">
            <div class="navbar" data-pjax>
                <a data-toggle="collapse" data-target="#navbar" class="navbar-item pull-right hidden-md-up m-r-0 m-l"><i class="material-icons">menu</i></a> <a href="{{url('index')}}" class="navbar-brand md">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
                        <circle cx="24" cy="24" r="24" fill="rgba(255,255,255,0.2)"/>
                        <circle cx="24" cy="24" r="22" fill="#1c202b" class="brand-color"/>
                        <circle cx="24" cy="24" r="10" fill="#ffffff"/>
                        <circle cx="13" cy="13" r="2" fill="#ffffff" class="brand-animate"/>
                        <path d="M 14 24 L 24 24 L 14 44 Z" fill="#FFFFFF"/>
                        <circle cx="24" cy="24" r="3" fill="#000000"/>
                    </svg>
                    <img src="{{asset('assets/images/logo.png')}}" alt="." class="hide">
                    <span class="hidden-folded inline">Vekpod</span>
                </a>

                @yield('content')

                <script src="{{asset('assets/scripts/app.min.js')}}"></script>


                <div id="switcher">
                    <div class="switcher white" id="sw-theme">
                        <a href="#" data-ui-toggle-class="active" data-ui-target="#sw-theme" class="white sw-btn">
                            <i class="fa fa-gear text-muted">

                            </i>
                        </a>
                        <div class="box-header">
                            <a href="" class="btn btn-xs rounded danger pull-right"></a>
                            <strong>Theme Switcher</strong>
                        </div>
                        <div class="box-divider">

                        </div>
                        <div class="box-body">
                            <p id="settingLayout" class="hidden-md-down">
                                <label class="md-check m-y-xs" data-target="container">
                                    <input type="checkbox">
                                    <i class="green">

                                    </i>
                                    <span>Boxed Layout</span>
                                </label>
                                <label class="m-y-xs pointer" data-ui-fullscreen data-target="fullscreen">
                                    <span class="fa fa-expand fa-fw m-r-xs"></span>
                                    <span>Fullscreen Mode</span>
                                </label>
                            </p>
                            <p>Colors:</p>
                            <p data-target="color">
                                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                                    <input type="radio" name="color" value="primary">
                                    <i class="primary">

                                    </i>
                                </label>
                                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                                    <input type="radio" name="color" value="accent">
                                    <i class="accent">

                                    </i>
                                </label>
                                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                                    <input type="radio" name="color" value="warn">
                                    <i class="warn">

                                    </i>
                                </label>
                                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                                    <input type="radio" name="color" value="success">
                                    <i class="success">

                                    </i>
                                </label>
                                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                                    <input type="radio" name="color" value="info">
                                    <i class="info">

                                    </i>
                                </label>
                                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                                    <input type="radio" name="color" value="blue">
                                    <i class="blue">

                                    </i>
                                </label>
                                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                                    <input type="radio" name="color" value="warning">
                                    <i class="warning">

                                    </i>
                                </label>
                                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                                    <input type="radio" name="color" value="danger">
                                    <i class="danger">

                                    </i>
                                </label>
                            </p>
                            <p>Themes:</p>
                            <div data-target="bg" class="text-u-c text-center _600 clearfix">
                                <label class="p-a col-xs-3 light pointer m-a-0">
                                    <input type="radio" name="theme" value="" hidden>
                                    <i class="active-checked fa fa-check">

                                    </i>
                                </label>
                                <label class="p-a col-xs-3 grey pointer m-a-0">
                                    <input type="radio" name="theme" value="grey" hidden>
                                    <i class="active-checked fa fa-check">

                                    </i>
                                </label>
                                <label class="p-a col-xs-3 dark pointer m-a-0">
                                    <input type="radio" name="theme" value="dark" hidden>
                                    <i class="active-checked fa fa-check">

                                    </i>
                                </label>
                                <label class="p-a col-xs-3 black pointer m-a-0">
                                    <input type="radio" name="theme" value="black" hidden>
                                    <i class="active-checked fa fa-check">

                                    </i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="share-modal" class="modal fade animate">
                    <div class="modal-dialog">
                        <div class="modal-content fade-down">
                            <div class="modal-header">
                                <h5 class="modal-title">Share</h5>
                            </div>
                            <div class="modal-body p-lg">
                                <div id="share-list" class="m-b">
                                    <a href="https://www.facebook.com/" class="btn btn-icon btn-social rounded btn-social-colored indigo" title="Facebook">
                                        <i class="fa fa-facebook">

                                        </i>
                                        <i class="fa fa-facebook">

                                        </i>
                                    </a>
                                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin%3Flang%3Den" class="btn btn-icon btn-social rounded btn-social-colored light-blue" title="Twitter">
                                        <i class="fa fa-twitter">

                                        </i>
                                        <i class="fa fa-twitter">

                                        </i>
                                    </a>
                                    <a href="https://accounts.google.com/v3/signin/identifier?dsh=S1325770267%3A1688715339123031&ifkv=AeDOFXisqAdJQ5x3NrvI89gpbZEKiDFpSLIgL5dYbQ79O2KpU81pzAVfvfRioIkPQxu7WD_SzmrC&ltmpl=mobNH&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn btn-icon btn-social rounded btn-social-colored red-600" title="Google+">
                                        <i class="fa fa-google-plus">

                                        </i>
                                        <i class="fa fa-google-plus">

                                        </i>
                                    </a>
                                    <a href="https://www.tumblr.com/" class="btn btn-icon btn-social rounded btn-social-colored blue-grey-600" title="Trumblr">
                                        <i class="fa fa-tumblr">

                                        </i>
                                        <i class="fa fa-tumblr">

                                        </i>
                                    </a>
                                    <a href="https://www.pinterest.com/login/" class="btn btn-icon btn-social rounded btn-social-colored red-700" title="Pinterst">
                                        <i class="fa fa-pinterest">

                                        </i>
                                        <i class="fa fa-pinterest">

                                        </i>
                                    </a>
                                </div>
                                <div>
                                    <input class="form-control" value="http://plamusic.com/slug">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
