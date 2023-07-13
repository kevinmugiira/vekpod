@extends('layouts.layout-index')



@section('content')
    <ul class="nav navbar-nav pull-right">
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#search-modal">
                <i class="material-icons">search</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('episode-add')}}">
                <span class="hidden-xs-down btn btn-sm rounded primary _600">Upload</span>
                <span class="hidden-sm-up btn btn-sm btn-icon rounded primary">
                                <i class="material-icons">file_upload</i>
                            </span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link clear" data-toggle="dropdown">
                            <span class="avatar w-32">
                                <img src="{{auth()->user()->profile_photo_url}}" alt="{{auth()->user()->name}}">
                            </span>
            </a>
            <div class="dropdown-menu w dropdown-menu-scale pull-right">
                <a class="dropdown-item" href="{{url('user/profile')}}#profile">
                    <span>Profile</span>
                </a>
                <a class="dropdown-item" href="{{url('profile')}}#tracks">
                    <span>Episodes</span>
                </a>
                <a class="dropdown-item" href="{{url('profile')}}#playlists">
                    <span>Playlists</span>
                </a>
{{--                <a class="dropdown-item" href="{{url('profile')}}#likes">--}}
{{--                    <span>Likes</span>--}}
{{--                </a>--}}
                <div class="dropdown-divider">

                </div>
{{--                <a class="dropdown-item" href="docs.html">Need help?</a>--}}
                <a class="dropdown-item" href="{{url('logout')}}">Sign out</a>
            </div>
        </li>
    </ul>
    <div class="collapse navbar-toggleable-sm l-h-0 text-center" id="navbar">
        <ul class="nav navbar-nav nav-md inline text-primary-hover" data-ui-nav>
            <li class="nav-item">
                <a href="{{url('home')}}" class="nav-link">
                    <span class="nav-text">Discover</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('browse')}}" class="nav-link">
                    <span class="nav-text">Browse</span>
                </a>
            </li>
            @can('admin')
            <li class="nav-item dropdown pos-stc">
                <a href="{{url('chart')}}" class="nav-link">
                    <span class="nav-text">Charts</span>
                </a>
            </li>
            @endcan
            <li class="nav-item">
                <a href="{{url('artist')}}" class="nav-link">
                    <span class="nav-text">Podcasts</span>
                </a>
            </li>
        </ul>
    </div>
    </div>
    </div>
    <div class="app-footer app-player grey bg">
        <div class="playlist" style="width:100%">

        </div>
    </div>

    <div class="app-body" id="view">
        <div class="page-content">
            <div class="black dk">
                <div class="row no-gutter item-info-overlay">
                    <div class="col-sm-6 text-white">
                        <div class="owl-carousel owl-theme owl-dots-sm owl-dots-bottom-left" data-ui-jp="owlCarousel" data-ui-options="{
                     items: 1
                    ,loop: true
                    ,autoplay: true
                    ,nav: true

                  }">
                            @foreach($scienceEpisodes as $trending)
                            <div class="item r" data-id="item-115" data-src="{{asset('uploads/pods/')}}{{$trending->file_path}}">
                                <div class="item-media primary">
                                    <a href="{{url('track/'. $trending->id)}}" class="item-media-content" style="background-image: url('{{asset('uploads/cover-images')}}/{{$trending->cover_image}}')">

                                    </a>
                                    <div class="item-overlay center">
                                        <button class="btn-playpause">Play</button>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="item-overlay bottom text-right">
                                        <a href="#" class="btn-favorite">
                                            <i class="fa fa-heart-o">

                                            </i>
                                        </a>
                                        <a href="#" class="btn-more" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h">

                                            </i>
                                        </a>
                                        <div class="dropdown-menu pull-right black lt">

                                        </div>
                                    </div>
                                    <div class="item-title text-ellipsis">
                                        <a href="{{url('track/'. $trending->id)}}">New Album from {{$trending->author}}</a>
                                    </div>
                                    <div class="item-author text-sm text-ellipsis">
                                        <a href="{{url('detail')}}" class="text-muted">{{$trending->author}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    @foreach($politicalEpisodes as $politics)
                    <div class="col-sm-3 col-xs-6">
                        <div class="item r" data-id="item-1" data-src="{{asset('uploads/pods/')}}{{$politics->file_path}}">
                            <div class="item-media">
                                <a href="{{url('track')}}/{{ $politics->id}}" class="item-media-content" style="background-image: url('{{asset('uploads/cover-images')}}/{{$politics->cover_image}}')">

                                </a>
                                <div class="item-overlay center">
                                    <button class="btn-playpause">Play</button>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="item-overlay bottom text-right">
                                    <a href="#" class="btn-favorite">
                                        <i class="fa fa-heart-o">

                                        </i>
                                    </a>
                                    <a href="#" class="btn-more" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-h">

                                        </i>
                                    </a>
                                    <div class="dropdown-menu pull-right black lt">

                                    </div>
                                </div>
                                <div class="item-title text-ellipsis">
                                    <a href="{{url('track')}}/{{$politics->id}}">{{$politics->name}}a>
                                </div>
                                <div class="item-author text-sm text-ellipsis">
                                    <a href="{{url('track')}}/{{$politics->id}}" class="text-muted">{{$politics->author}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="row-col">
                <div class="col-lg-9 b-r no-border-md">
                    <div class="padding">
                        <h2 class="widget-title h4 m-b">Treading</h2>
                        <div class="owl-carousel owl-theme owl-dots-center" data-ui-jp="owlCarousel" data-ui-options="{ margin: 20, responsiveClass:true, responsive:{ 0:{ items: 2 },543:{ items: 3 }}}">
                            @foreach($trendingEpisodes as $trending)
                            <div class="">
                                <div class="item r" data-id="item-4" data-src="{{asset('uploads/pods')}}/{{$trending->file_path}}">
                                    <div class="item-media item-media-4by3">
                                        <a href="{{url('track/'. $trending->id )}}" class="item-media-content" style="background-image: url('{{asset('uploads/cover-images')}}/{{$trending->cover_image}}')">

                                        </a>
                                        <div class="item-overlay center">
                                            <button class="btn-playpause">Play</button>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-overlay bottom text-right">
                                            <a href="#" class="btn-favorite">
                                                <i class="fa fa-heart-o">

                                                </i>
                                            </a>
                                            <a href="#" class="btn-more" data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h">

                                                </i>
                                            </a>
                                            <div class="dropdown-menu pull-right black lt">

                                            </div>
                                        </div>
                                        <div class="item-title text-ellipsis"><a href="{{url('track/'. $trending->id)}}">{{$trending->name}}</a>
                                        </div>
                                        <div class="item-author text-sm text-ellipsis">
                                            <a href="{{url('detail')}}" class="text-muted">{{$trending->author}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <h2 class="widget-title h4 m-b">New</h2>
                        <div class="row">
                            @foreach($newEpisodes as $trending)
                            <div class="col-xs-4 col-sm-4 col-md-3">
                                <div class="item r" data-id="item-8" data-src="{{asset('uploads/pods')}}/{{$trending->file_path}}">
                                    <div class="item-media">
                                        <a href="{{url('track/'. $trending->id)}}" class="item-media-content" style="background-image: url('{{asset('uploads/cover-images')}}/{{$trending->cover_image}}')">

                                        </a>
                                        <div class="item-overlay center">
                                            <button class="btn-playpause">Play</button>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-overlay bottom text-right">
                                            <a href="#" class="btn-favorite">
                                                <i class="fa fa-heart-o">

                                                </i>
                                            </a>
                                            <a href="#" class="btn-more" data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h">

                                                </i>
                                            </a>
                                            <div class="dropdown-menu pull-right black lt">

                                            </div>
                                        </div>
                                        <div class="item-title text-ellipsis">
                                            <a href="{{url('track/'. $trending->id)}}">{{$trending->name}}</a>
                                        </div>
                                        <div class="item-author text-sm text-ellipsis">
                                            <a href="{{url('detail')}}" class="text-muted">{{$trending->author}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 w-xxl w-auto-md">
                    <div class="padding" style="bottom: 60px" data-ui-jp="stick_in_parent">
{{--                        <h6 class="text text-muted">5 Likes</h6>--}}
{{--                        <div class="row item-list item-list-sm m-b">--}}
{{--                            <div class="col-xs-12">--}}
{{--                                <div class="item r" data-id="item-5" data-src="http://streaming.radionomy.com/JamendoLounge">--}}
{{--                                    <div class="item-media">--}}
{{--                                        <a href="track.detail.html" class="item-media-content" style="background-image: url('{{asset('assets/images/b4.jpg')}}')">--}}

{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-info">--}}
{{--                                        <div class="item-title text-ellipsis">--}}
{{--                                            <a href="track.detail.html">Live Radio</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-author text-sm text-ellipsis">--}}
{{--                                            <a href="{{url('vekpod.artist-detail')}}" class="text-muted">Radionomy</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12">--}}
{{--                                <div class="item r" data-id="item-11" data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">--}}
{{--                                    <div class="item-media">--}}
{{--                                        <a href="track.detail.html" class="item-media-content" style="background-image: url('{{asset('assets/images/b10.jpg')}}')">--}}

{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-info">--}}
{{--                                        <div class="item-title text-ellipsis">--}}
{{--                                            <a href="track.detail.html">Spring</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-author text-sm text-ellipsis">--}}
{{--                                            <a href="{{url('vekpod.artist-detail')}}" class="text-muted">Pablo Nouvelle</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12">--}}
{{--                                <div class="item r" data-id="item-9" data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">--}}
{{--                                    <div class="item-media">--}}
{{--                                        <a href="track.detail.html" class="item-media-content" style="background-image: url('{{asset('assets/images/b8.jpg')}}')">--}}

{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-info">--}}
{{--                                        <div class="item-title text-ellipsis">--}}
{{--                                            <a href="track.detail.html">All I Need</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-author text-sm text-ellipsis">--}}
{{--                                            <a href="{{url('vekpod.artist-detail')}}" class="text-muted">Pablo Nouvelle</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12">--}}
{{--                                <div class="item r" data-id="item-8" data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">--}}
{{--                                    <div class="item-media">--}}
{{--                                        <a href="track.detail.html" class="item-media-content" style="background-image: url('{{asset('assets/images/b7.jpg')}}')">--}}

{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-info">--}}
{{--                                        <div class="item-title text-ellipsis">--}}
{{--                                            <a href="track.detail.html">Simple Place To Be</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-author text-sm text-ellipsis">--}}
{{--                                            <a href="{{url('vekpod.artist-detail')}}" class="text-muted">RYD</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12">--}}
{{--                                <div class="item r" data-id="item-2" data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">--}}
{{--                                    <div class="item-media">--}}
{{--                                        <a href="track.detail.html" class="item-media-content" style="background-image: url('{{asset('assets/images/b1.jpg')}}')">--}}

{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-info">--}}
{{--                                        <div class="item-title text-ellipsis">--}}
{{--                                            <a href="track.detail.html">Fireworks</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-author text-sm text-ellipsis">--}}
{{--                                            <a href="{{url('vekpod.artist-detail')}}" class="text-muted">Kygo</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <h6 class="text text-muted">Go mobile</h6>
                        <div class="btn-groups">
                            <a href="" class="btn btn-sm dark lt m-r-xs" style="width: 135px">
                                    <span class="pull-left m-r-sm">
                                        <i class="fa fa-apple fa-2x">

                                        </i>
                                    </span>
                                <span class="clear text-left l-h-1x">
                                        <span class="text-muted text-xxs">Download on the</span>
                                        <b class="block m-b-xs">App Store</b>
                                    </span>
                            </a>
                            <a href="" class="btn btn-sm dark lt" style="width: 133px">
                                    <span class="pull-left m-r-sm"><i class="fa fa-play fa-2x">

                                        </i>
                                    </span>
                                <span class="clear text-left l-h-1x">
                                        <span class="text-muted text-xxs">Get it on</span>
                                        <b class="block m-b-xs m-r-xs">Google Play</b>
                                    </span>
                            </a>
                        </div>
                        <div class="b-b m-y">

                        </div>
                        <div class="nav text-sm _600">
                            <a href="{{url('index')}}" class="nav-link text-muted m-r-xs">About</a>
                            <a href="#" class="nav-link text-muted m-r-xs">Contact</a>
{{--                            <a href="#" class="nav-link text-muted m-r-xs">Legal</a>--}}
                            <a href="#" class="nav-link text-muted m-r-xs">Policy</a>
                        </div>
                        <p class="text-muted text-xs p-b-lg">&copy; Copyright {{$currentYear}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    </div>
@endsection
