@extends('layouts.layout-browse')



@section('content')

    <div class="app dk" id="app">
        <div id="aside" class="app-aside modal fade nav-dropdown">
            <div class="left navside grey dk" data-layout="column">
                <div class="navbar no-radius"><a href="{{url('index')}}" class="navbar-brand md">
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
                <div data-flex class="hide-scroll">
                    <nav class="scroll nav-stacked nav-active-primary">
                        <ul class="nav" data-ui-nav>
                            <li class="nav-header hidden-folded"><span class="text-xs text-muted">Main</span></li>
                            <li><a href="{{url('player')}}"><span class="nav-icon"><i
                                            class="material-icons">play_circle_outline</i></span> <span
                                        class="nav-text">Discover</span></a></li>
                            <li><a href="{{url('browse')}}"><span class="nav-icon"><i class="material-icons">sort</i></span> <span
                                        class="nav-text">Browse</span></a></li>
                            <li><a href="{{url('chart')}}"><span class="nav-icon"><i class="material-icons">trending_up</i></span>
                                    <span class="nav-text">Charts</span></a></li>
                            <li><a href="{{url('artist')}}"><span class="nav-icon"><i class="material-icons">portrait</i></span>
                                    <span class="nav-text">Artist</span></a></li>
                            <li><a data-toggle="modal" data-target="#search-modal"><span class="nav-icon"><i
                                            class="material-icons">search</i></span> <span class="nav-text">Search</span></a></li>
                            <li class="nav-header hidden-folded m-t"><span class="text-xs text-muted">Your collection</span>
                            </li>
                            <li><a href="{{url('profile')}}#tracks"><span class="nav-label"><b class="label">8</b></span> <span
                                        class="nav-icon"><i class="material-icons">list</i></span> <span
                                        class="nav-text">Tracks</span></a></li>
                            <li><a href="{{url('profile')}}#playlists"><span class="nav-icon"><i class="material-icons">queue_music</i></span>
                                    <span class="nav-text">Playlists</span></a></li>
                            <li><a href="{{url('profile')}}#likes"><span class="nav-icon"><i class="material-icons">favorite_border</i></span>
                                    <span class="nav-text">Likes</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div data-flex-no-shrink>
                    <div class="nav-fold dropup"><a data-toggle="dropdown"><span class="pull-left"><img src="{{asset('assets/images/a3.jpg')}}"
                                                                                                        alt="..."
                                                                                                        class="w-32 img-circle"></span>
                            <span class="clear hidden-folded p-x p-y-xs"><span
                                    class="block _500 text-ellipsis">Rachel Platten</span></span></a>
                        <div class="dropdown-menu w dropdown-menu-scale"><a class="dropdown-item"
                                                                            href="{{url('profile')}}#profile"><span>Profile</span></a>
                            <a class="dropdown-item" href="{{url('profile')}}#tracks"><span>Tracks</span></a> <a
                                class="dropdown-item" href="{{url('profile')}}#playlists"><span>Playlists</span></a> <a
                                class="dropdown-item" href="{{url('profile')}}#likes"><span>Likes</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="docs.html">Need help?</a> <a class="dropdown-item"
                                                                                        href="{{url('signin')}}">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="app-content white bg box-shadow-z2" role="main">
            <div class="app-header hidden-lg-up white lt box-shadow-z1">
                <div class="navbar"><a href="{{url('index')}}" class="navbar-brand md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
                            <circle cx="24" cy="24" r="24" fill="rgba(255,255,255,0.2)"/>
                            <circle cx="24" cy="24" r="22" fill="#1c202b" class="brand-color"/>
                            <circle cx="24" cy="24" r="10" fill="#ffffff"/>
                            <circle cx="13" cy="13" r="2" fill="#ffffff" class="brand-animate"/>
                            <path d="M 14 24 L 24 24 L 14 44 Z" fill="#FFFFFF"/>
                            <circle cx="24" cy="24" r="3" fill="#000000"/>
                        </svg>
                        <img src="{{asset('assets/images/logo.png')}}" alt="." class="hide"> <span class="hidden-folded inline">pulse</span></a>
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item"><a data-toggle="modal" data-target="#aside" class="nav-link"><i
                                    class="material-icons">menu</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="app-footer app-player grey bg">
                <div class="playlist" style="width:100%"></div>
            </div>

        <div class="app-body" id="view">
            <div class="page-content">
                <div class="padding">
                    <div class="page-title m-b"><h1 class="inline m-a-0">Discover</h1></div>
                    <div class="item-info-overlay">
                        <div class="owl-carousel owl-theme owl-dots-center" data-ui-jp="owlCarousel" data-ui-options="{
					margin: 20,
					rtl: true
				}">
                            <div class="">
                                <div class="item r" data-id="item-3"
                                     data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                    <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                               style="background-image: url('{{asset('assets/images/b2.jpg')}}')"></a>
                                        <div class="item-overlay center">
                                            <button class="btn-playpause">Play</button>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-overlay bottom text-right"><a href="#" class="btn-favorite"><i
                                                    class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                      data-toggle="dropdown"><i
                                                    class="fa fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu pull-right black lt"></div>
                                        </div>
                                        <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">I Wanna Be In
                                                the Cavalry</a></div>
                                        <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                          class="text-muted">Jeremy
                                                Scott</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="item r" data-id="item-11"
                                     data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                    <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                               style="background-image: url('{{asset('assets/images/b10.jpg')}}')"></a>
                                        <div class="item-overlay center">
                                            <button class="btn-playpause">Play</button>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-overlay bottom text-right"><a href="#" class="btn-favorite"><i
                                                    class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                      data-toggle="dropdown"><i
                                                    class="fa fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu pull-right black lt"></div>
                                        </div>
                                        <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Spring</a>
                                        </div>
                                        <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                          class="text-muted">Pablo
                                                Nouvelle</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="item r" data-id="item-1"
                                     data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                    <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                               style="background-image: url('{{asset('assets/images/b0.jpg')}}')"></a>
                                        <div class="item-overlay center">
                                            <button class="btn-playpause">Play</button>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-overlay bottom text-right"><a href="#" class="btn-favorite"><i
                                                    class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                      data-toggle="dropdown"><i
                                                    class="fa fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu pull-right black lt"></div>
                                        </div>
                                        <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Pull Up</a>
                                        </div>
                                        <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                          class="text-muted">Summerella</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="item r" data-id="item-6"
                                     data-src="http://api.soundcloud.com/tracks/236107824/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                    <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                               style="background-image: url('{{asset('assets/images/b5.jpg')}}')"></a>
                                        <div class="item-overlay center">
                                            <button class="btn-playpause">Play</button>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-overlay bottom text-right"><a href="#" class="btn-favorite"><i
                                                    class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                      data-toggle="dropdown"><i
                                                    class="fa fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu pull-right black lt"></div>
                                        </div>
                                        <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Body on me</a>
                                        </div>
                                        <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                          class="text-muted">Rita
                                                Ora</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="item r" data-id="item-9"
                                     data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                    <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                               style="background-image: url('{{asset('assets/images/b8.jpg')}}')"></a>
                                        <div class="item-overlay center">
                                            <button class="btn-playpause">Play</button>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-overlay bottom text-right"><a href="#" class="btn-favorite"><i
                                                    class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                      data-toggle="dropdown"><i
                                                    class="fa fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu pull-right black lt"></div>
                                        </div>
                                        <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">All I Need</a>
                                        </div>
                                        <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                          class="text-muted">Pablo
                                                Nouvelle</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="item r" data-id="item-7"
                                     data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                    <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                               style="background-image: url('{{asset('assets/images/b6.jpg')}}')"></a>
                                        <div class="item-overlay center">
                                            <button class="btn-playpause">Play</button>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-overlay bottom text-right"><a href="#" class="btn-favorite"><i
                                                    class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                      data-toggle="dropdown"><i
                                                    class="fa fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu pull-right black lt"></div>
                                        </div>
                                        <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Reflection
                                                (Deluxe)</a></div>
                                        <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                          class="text-muted">Fifth
                                                Harmony</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-col">
                    <div class="col-lg-9 b-r no-border-md">
                        <div class="padding"><h2 class="widget-title h4 m-b">Treading</h2>
                            <div class="owl-carousel owl-theme owl-dots-center" data-ui-jp="owlCarousel"
                                 data-ui-options="{
					margin: 20,
					rtl: true,
					responsiveClass:true,
				    responsive:{
				    	0:{
				    		items: 2
				    	},
				        543:{
				            items: 3
				        }
				    }
				}">
                                <div class="">
                                    <div class="item r" data-id="item-5"
                                         data-src="http://streaming.radionomy.com/JamendoLounge">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b4.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Live
                                                    Radio</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Radionomy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="item r" data-id="item-8"
                                         data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b7.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Simple
                                                    Place To Be</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">RYD</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="item r" data-id="item-9"
                                         data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b8.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">All I
                                                    Need</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Pablo
                                                    Nouvelle</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="item r" data-id="item-2"
                                         data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b1.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a
                                                    href="{{url('track-detail')}}">Fireworks</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Kygo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="item r" data-id="item-12"
                                         data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b11.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Happy
                                                    ending</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Postiljonen</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="item r" data-id="item-1"
                                         data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b0.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Pull
                                                    Up</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Summerella</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="item r" data-id="item-4"
                                         data-src="http://api.soundcloud.com/tracks/230791292/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b3.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">What A
                                                    Time To Be Alive</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Judith
                                                    Garcia</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="item r" data-id="item-11"
                                         data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b10.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Spring</a>
                                            </div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Pablo
                                                    Nouvelle</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="widget-title h4 m-b">New</h2>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-3">
                                    <div class="item r" data-id="item-2"
                                         data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b1.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a
                                                    href="{{url('track-detail')}}">Fireworks</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Kygo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3">
                                    <div class="item r" data-id="item-7"
                                         data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b6.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Reflection
                                                    (Deluxe)</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Fifth
                                                    Harmony</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3">
                                    <div class="item r" data-id="item-10"
                                         data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b9.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">The Open
                                                    Road</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Postiljonen</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3">
                                    <div class="item r" data-id="item-4"
                                         data-src="http://api.soundcloud.com/tracks/230791292/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b3.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">What A
                                                    Time To Be Alive</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Judith
                                                    Garcia</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3">
                                    <div class="item r" data-id="item-1"
                                         data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b0.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Pull
                                                    Up</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Summerella</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3">
                                    <div class="item r" data-id="item-11"
                                         data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b10.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Spring</a>
                                            </div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Pablo
                                                    Nouvelle</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3">
                                    <div class="item r" data-id="item-3"
                                         data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b2.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">I Wanna Be
                                                    In the Cavalry</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Jeremy
                                                    Scott</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3">
                                    <div class="item r" data-id="item-6"
                                         data-src="http://api.soundcloud.com/tracks/236107824/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b5.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Body on
                                                    me</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Rita
                                                    Ora</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="widget-title h4 m-b">Recommand for you</h2>
                            <div class="row item-list item-list-md m-b">
                                <div class="col-sm-6">
                                    <div class="item r" data-id="item-12"
                                         data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b11.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Happy
                                                    ending</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Postiljonen</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item r" data-id="item-10"
                                         data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b9.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">The Open
                                                    Road</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Postiljonen</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item r" data-id="item-8"
                                         data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b7.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Simple
                                                    Place To Be</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">RYD</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item r" data-id="item-5"
                                         data-src="http://streaming.radionomy.com/JamendoLounge">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b4.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Live
                                                    Radio</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Radionomy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item r" data-id="item-4"
                                         data-src="http://api.soundcloud.com/tracks/230791292/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b3.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">What A
                                                    Time To Be Alive</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Judith
                                                    Garcia</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item r" data-id="item-9"
                                         data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b8.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">All I
                                                    Need</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Pablo
                                                    Nouvelle</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item r" data-id="item-11"
                                         data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b10.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Spring</a>
                                            </div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Pablo
                                                    Nouvelle</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item r" data-id="item-1"
                                         data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b0.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Pull
                                                    Up</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Summerella</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item r" data-id="item-7"
                                         data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b6.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Reflection
                                                    (Deluxe)</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Fifth
                                                    Harmony</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item r" data-id="item-3"
                                         data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b2.jpg')}}')"></a>
                                            <div class="item-overlay center">
                                                <button class="btn-playpause">Play</button>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-overlay bottom text-right"><a href="#"
                                                                                           class="btn-favorite"><i
                                                        class="fa fa-heart-o"></i></a> <a href="#" class="btn-more"
                                                                                          data-toggle="dropdown"><i
                                                        class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu pull-right black lt"></div>
                                            </div>
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">I Wanna Be
                                                    In the Cavalry</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Jeremy
                                                    Scott</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 w-xxl w-auto-md">
                        <div class="padding" style="bottom: 60px" data-ui-jp="stick_in_parent"><h6
                                class="text text-muted">5 Likes</h6>
                            <div class="row item-list item-list-sm m-b">
                                <div class="col-xs-12">
                                    <div class="item r" data-id="item-5"
                                         data-src="http://streaming.radionomy.com/JamendoLounge">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b4.jpg')}}')"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Live
                                                    Radio</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Radionomy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="item r" data-id="item-1"
                                         data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b0.jpg')}}')"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Pull
                                                    Up</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Summerella</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="item r" data-id="item-12"
                                         data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b11.jpg')}}')"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Happy
                                                    ending</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Postiljonen</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="item r" data-id="item-9"
                                         data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b8.jpg')}}')"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">All I
                                                    Need</a></div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Pablo
                                                    Nouvelle</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="item r" data-id="item-11"
                                         data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                                   style="background-image: url('{{asset('assets/images/b10.jpg')}}')"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Spring</a>
                                            </div>
                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                              class="text-muted">Pablo
                                                    Nouvelle</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text text-muted">Go mobile</h6>
                            <div class="btn-groups"><a href="" class="btn btn-sm dark lt m-r-xs"
                                                       style="width: 135px"><span class="pull-left m-r-sm"><i
                                            class="fa fa-apple fa-2x"></i></span> <span class="clear text-left l-h-1x"><span
                                            class="text-muted text-xxs">Download on the</span> <b
                                            class="block m-b-xs">App Store</b></span></a> <a href="" class="btn btn-sm dark lt"
                                                                                             style="width: 133px"><span
                                        class="pull-left m-r-sm"><i class="fa fa-play fa-2x"></i></span> <span
                                        class="clear text-left l-h-1x"><span class="text-muted text-xxs">Get it on</span> <b
                                            class="block m-b-xs m-r-xs">Google Play</b></span></a></div>
                            <div class="b-b m-y"></div>
                            <div class="nav text-sm _600"><a href="#" class="nav-link text-muted m-r-xs">About</a> <a
                                    href="#" class="nav-link text-muted m-r-xs">Contact</a> <a href="#"
                                                                                               class="nav-link text-muted m-r-xs">Legal</a>
                                <a href="#" class="nav-link text-muted m-r-xs">Policy</a></div>
                            <p class="text-muted text-xs p-b-lg">&copy; Copyright 2016</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="switcher">
        <div class="switcher white" id="sw-theme"><a href="#" data-ui-toggle-class="active" data-ui-target="#sw-theme"
                                                     class="white sw-btn"><i class="fa fa-gear text-muted"></i></a>
            <div class="box-header"><a
                    href="https://themeforest.net/item/pulse-music-audio-radio-template/16798243?ref=flatfull"
                    class="btn btn-xs rounded danger pull-right">BUY</a> <strong>Theme Switcher</strong></div>
            <div class="box-divider"></div>
            <div class="box-body"><p id="settingLayout" class="hidden-md-down"><label class="md-check m-y-xs"
                                                                                      data-target="folded"><input
                            type="checkbox"> <i class="green"></i> <span>Folded Aside</span></label><label
                        class="m-y-xs pointer" data-ui-fullscreen data-target="fullscreen"><span
                            class="fa fa-expand fa-fw m-r-xs"></span> <span>Fullscreen Mode</span></label></p>
                <p>Colors:</p>
                <p data-target="color"><label
                        class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md"><input type="radio"
                                                                                                    name="color"
                                                                                                    value="primary"> <i
                            class="primary"></i></label><label
                        class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md"><input type="radio"
                                                                                                    name="color"
                                                                                                    value="accent"> <i
                            class="accent"></i></label><label
                        class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md"><input type="radio"
                                                                                                    name="color"
                                                                                                    value="warn"> <i
                            class="warn"></i></label><label
                        class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md"><input type="radio"
                                                                                                    name="color"
                                                                                                    value="success"> <i
                            class="success"></i></label><label
                        class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md"><input type="radio"
                                                                                                    name="color"
                                                                                                    value="info"> <i
                            class="info"></i></label><label
                        class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md"><input type="radio"
                                                                                                    name="color"
                                                                                                    value="blue"> <i
                            class="blue"></i></label><label
                        class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md"><input type="radio"
                                                                                                    name="color"
                                                                                                    value="warning"> <i
                            class="warning"></i></label><label
                        class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md"><input type="radio"
                                                                                                    name="color"
                                                                                                    value="danger"> <i
                            class="danger"></i></label></p>
                <p>Themes:</p>
                <div data-target="bg" class="text-u-c text-center _600 clearfix"><label
                        class="p-a col-xs-3 light pointer m-a-0"><input type="radio" name="theme" value="" hidden> <i
                            class="active-checked fa fa-check"></i></label><label
                        class="p-a col-xs-3 grey pointer m-a-0"><input type="radio" name="theme" value="grey" hidden> <i
                            class="active-checked fa fa-check"></i></label><label
                        class="p-a col-xs-3 dark pointer m-a-0"><input type="radio" name="theme" value="dark" hidden> <i
                            class="active-checked fa fa-check"></i></label><label
                        class="p-a col-xs-3 black pointer m-a-0"><input type="radio" name="theme" value="black" hidden>
                        <i class="active-checked fa fa-check"></i></label></div>
            </div>
        </div>
    </div>
    <div class="modal white lt fade" id="search-modal" data-backdrop="false"><a data-dismiss="modal"
                                                                                class="text-muted text-lg p-x modal-close-btn">&times;</a>
        <div class="row-col">
            <div class="p-a-lg h-v row-cell v-m">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="search.html" class="m-b-md">
                            <div class="input-group input-group-lg"><input type="text" class="form-control"
                                                                           placeholder="Type keyword"
                                                                           data-ui-toggle-class="hide"
                                                                           data-ui-target="#search-result"> <span
                                    class="input-group-btn"><button class="btn b-a no-shadow white"
                                                                    type="submit">Search</button></span></div>
                        </form>
                        <div id="search-result" class="animated fadeIn"><p class="m-b-md"><strong>23</strong> <span
                                    class="text-muted">Results found for:</span><strong>Keyword</strong></p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row item-list item-list-sm item-list-by m-b">
                                        <div class="col-xs-12">
                                            <div class="item r" data-id="item-8"
                                                 data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                <div class="item-media"><a href="{{url('track-detail')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b7.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Simple
                                                            Place To Be</a></div>
                                                    <div class="item-author text-sm text-ellipsis"><a
                                                            href="{{url('artist-detail')}}" class="text-muted">RYD</a></div>
                                                    <div class="item-meta text-sm text-muted"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item r" data-id="item-12"
                                                 data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                <div class="item-media"><a href="{{url('track-detail')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b11.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Happy
                                                            ending</a></div>
                                                    <div class="item-author text-sm text-ellipsis"><a
                                                            href="{{url('artist-detail')}}" class="text-muted">Postiljonen</a>
                                                    </div>
                                                    <div class="item-meta text-sm text-muted"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item r" data-id="item-6"
                                                 data-src="http://api.soundcloud.com/tracks/236107824/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                <div class="item-media"><a href="{{url('track-detail')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b5.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Body
                                                            on me</a></div>
                                                    <div class="item-author text-sm text-ellipsis"><a
                                                            href="{{url('artist-detail')}}" class="text-muted">Rita Ora</a>
                                                    </div>
                                                    <div class="item-meta text-sm text-muted"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item r" data-id="item-9"
                                                 data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                <div class="item-media"><a href="{{url('track-detail')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b8.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">All
                                                            I Need</a></div>
                                                    <div class="item-author text-sm text-ellipsis"><a
                                                            href="{{url('artist-detail')}}" class="text-muted">Pablo
                                                            Nouvelle</a></div>
                                                    <div class="item-meta text-sm text-muted"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row item-list item-list-sm item-list-by m-b">
                                        <div class="col-xs-12">
                                            <div class="item">
                                                <div class="item-media rounded"><a href="{{url('artist-detail')}}"
                                                                                   class="item-media-content"
                                                                                   style="background-image: url('{{asset('assets/images/b0.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Jeremy
                                                            Scott</a>
                                                        <div class="text-sm text-muted">14 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item">
                                                <div class="item-media rounded"><a href="{{url('artist-detail')}}"
                                                                                   class="item-media-content"
                                                                                   style="background-image: url('{{asset('assets/images/a1.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">James
                                                            Garcia</a>
                                                        <div class="text-sm text-muted">9 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item">
                                                <div class="item-media rounded"><a href="{{url('artist-detail')}}"
                                                                                   class="item-media-content"
                                                                                   style="background-image: url('{{asset('assets/images/a4.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Judith
                                                            Garcia</a>
                                                        <div class="text-sm text-muted">13 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item">
                                                <div class="item-media rounded"><a href="{{url('artist-detail')}}"
                                                                                   class="item-media-content"
                                                                                   style="background-image: url('{{asset('assets/images/a5.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Judy
                                                            Woods</a>
                                                        <div class="text-sm text-muted">23 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="top-search" class="btn-groups"><strong class="text-muted">Top searches:</strong> <a
                                href="#" class="btn btn-xs white">Happy</a> <a href="#"
                                                                               class="btn btn-xs white">Music</a> <a
                                href="#" class="btn btn-xs white">Weekend</a> <a href="#" class="btn btn-xs white">Summer</a>
                            <a href="#" class="btn btn-xs white">Holiday</a> <a href="#"
                                                                                class="btn btn-xs white">Blue</a> <a
                                href="#" class="btn btn-xs white">Soul</a> <a href="#"
                                                                              class="btn btn-xs white">Calm</a> <a
                                href="#" class="btn btn-xs white">Nice</a> <a href="#"
                                                                              class="btn btn-xs white">Home</a> <a
                                href="#" class="btn btn-xs white">SLeep</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
