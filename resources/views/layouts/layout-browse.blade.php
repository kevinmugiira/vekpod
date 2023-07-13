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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/material-design-icons/material-design-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/styles/app.min.css')}}">




</head>
<body>

<div class="app dk" id="app">
    <div id="aside" class="app-aside modal fade nav-dropdown">
        <div class="left navside grey dk" data-layout="column">
            <div class="navbar no-radius">
                <a href="{{url('index')}}" class="navbar-brand md">
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
            </div>
            <div data-flex class="hide-scroll">
                <nav class="scroll nav-stacked nav-active-primary">
                    <ul class="nav" data-ui-nav>
                        <li class="nav-header hidden-folded">
                            <span class="text-xs text-muted">Main</span>
                        </li>
                        <li>
                            <a href="{{url('player')}}">
                                <span class="nav-icon">
                                    <i class="material-icons">play_circle_outline</i>
                                </span>
                                <span class="nav-text">Discover</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('browse')}}">
                                <span class="nav-icon">
                                    <i class="material-icons">sort</i>
                                </span>
                                <span class="nav-text">Browse</span>
                            </a>
                        </li>

                        @can('admin')
                        <li>
                            <a href="{{url('chart')}}">
                                <span class="nav-icon">
                                    <i class="material-icons">trending_up</i>
                                </span>
                                <span class="nav-text">Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('category-add')}}">
                                <span class="nav-icon">
                                    <i class="material-icons">note_add</i>
                                </span>
                                <span class="nav-text">Add Category</span>
                            </a>
                        </li>
                        @endcan
                        <li>
                            <a href="{{url('artist')}}">
                                <span class="nav-icon">
                                    <i class="material-icons">portrait</i>
                                </span>
                                <span class="nav-text">Authors</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a data-toggle="modal" data-target="#search-modal">
                                <span class="nav-icon">
                                    <i class="material-icons">search</i>
                                </span>
                                <span class="nav-text">Search</span>
                            </a>
                        </li> -->
                        <li class="nav-header hidden-folded m-t">
                            <span class="text-xs text-muted">Your collection</span>
                        </li>
                        <li>
                            <a href="{{url('profile')}}#tracks">
                                <span class="nav-label">
                                    <b class="label">{{\App\Models\Episode::where('author', auth()->user()->name)->count()}}</b>
                                </span>
                                <span class="nav-icon">
                                    <i class="material-icons">list</i>
                                </span>
                                <span class="nav-text">Episodes </span>
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="{{url('profile')}}#playlists">--}}
{{--                                <span class="nav-icon">--}}
{{--                                    <i class="material-icons">queue_music</i>--}}
{{--                                </span>--}}
{{--                                <span class="nav-text">Playlists</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="{{url('profile')}}#likes">--}}
{{--                                <span class="nav-icon">--}}
{{--                                    <i class="material-icons">favorite_border</i>--}}
{{--                                </span>--}}
{{--                                <span class="nav-text">Likes</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </nav>
            </div>
            <div data-flex-no-shrink>
                <div class="nav-fold dropup">
                    <a data-toggle="dropdown">
                        <span class="pull-left">
                            @if(Auth()->user())

                            <img src="{{ Auth()->user()->profile_photo_url }}" alt="..." class="w-32 img-circle">

                            @else

                             <img src="{{asset('assets/images/podcast logo2.png')}}" alt="..." class="w-32 img-circle">

                            @endif

                        </span>
                        <span class="clear hidden-folded p-x p-y-xs">
                            @if(Auth()->user())

                                     <span class="block _500 text-ellipsis">{{Auth()->user()->name}}</span>

                                @endif
                        </span>
                    </a>
                    <div class="dropdown-menu w dropdown-menu-scale">
                        <a class="dropdown-item" href="{{url('user/profile')}}">
                            <span>Profile</span>
                        </a>
{{--                        <a class="dropdown-item" href="{{url('profile')}}#tracks">--}}
{{--                            <span>Tracks</span>--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item" href="{{url('profile')}}#playlists">--}}
{{--                            <span>Playlists</span>--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item" href="{{url('profile')}}#likes">--}}
{{--                            <span>Likes</span>--}}
{{--                        </a>--}}
                        <div class="dropdown-divider">

                        </div>
{{--                        <a class="dropdown-item" href="docs.html">Need help?</a>--}}
                        <a class="dropdown-item" href="{{route('logout')}}">Sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="app-content white bg box-shadow-z2" role="main">
        <div class="app-header hidden-lg-up white lt box-shadow-z1">
            <div class="navbar">
                <a href="{{url('index')}}" class="navbar-brand md">
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
                <ul class="nav navbar-nav pull-right">
                    <li class="nav-item">
                        <a data-toggle="modal" data-target="#aside" class="nav-link">
                            <i class="material-icons">menu</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-footer app-player grey bg">
            <div class="playlist" style="width:100%">

            </div>
        </div>


@yield('content')


{{--        <div id="top-search" class="btn-groups">--}}
{{--            <strong class="text-muted">Top searches:</strong>--}}
{{--            <a href="#" class="btn btn-xs white">{{ \App\Models\Category::all() }}</a>--}}
{{--        </div>--}}
    </div>
</div>

{{--<div id="share-modal" class="modal fade animate">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content fade-down">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title">Share</h5>--}}
{{--            </div>--}}
{{--            <div class="modal-body p-lg">--}}
{{--                <div id="share-list" class="m-b">--}}
{{--                    <a href="https://www.facebook.com/" class="btn btn-icon btn-social rounded btn-social-colored indigo" title="Facebook">--}}
{{--                        <i class="fa fa-facebook"></i>--}}
{{--                        <i class="fa fa-facebook"></i>--}}
{{--                    </a>--}}
{{--                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin%3Flang%3Den" class="btn btn-icon btn-social rounded btn-social-colored light-blue" title="Twitter">--}}
{{--                        <i class="fa fa-twitter"></i>--}}
{{--                        <i class="fa fa-twitter"></i>--}}
{{--                    </a>--}}
{{--                    <a href="https://accounts.google.com/v3/signin/identifier?dsh=S1325770267%3A1688715339123031&ifkv=AeDOFXisqAdJQ5x3NrvI89gpbZEKiDFpSLIgL5dYbQ79O2KpU81pzAVfvfRioIkPQxu7WD_SzmrC&ltmpl=mobNH&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn btn-icon btn-social rounded btn-social-colored red-600" title="Google+">--}}
{{--                        <i class="fa fa-google-plus"></i>--}}
{{--                        <i class="fa fa-google-plus"></i>--}}
{{--                    </a>--}}
{{--                    <a href="https://www.tumblr.com/" class="btn btn-icon btn-social rounded btn-social-colored blue-grey-600" title="Trumblr">--}}
{{--                        <i class="fa fa-tumblr"></i>--}}
{{--                        <i class="fa fa-tumblr"></i>--}}
{{--                    </a>--}}
{{--                    <a href="https://www.pinterest.com/login/" class="btn btn-icon btn-social rounded btn-social-colored red-700" title="Pinterst">--}}
{{--                        <i class="fa fa-pinterest"></i>--}}
{{--                        <i class="fa fa-pinterest"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <input class="form-control" value="http://plamusic.com/slug">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
<script src="{{asset('assets/scripts/app.min.js')}}"></script>
</body>
</html>

