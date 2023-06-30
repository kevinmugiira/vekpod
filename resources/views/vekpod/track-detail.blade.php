@extends('layouts.layout-browse')



@section('content')

    <div class="app-body" id="view">
        <div class="pos-rlt">
            <div class="page-bg" data-stellar-ratio="2" style="background-image: url('{{asset('assets/images/b0.jpg')}}')"></div>
        </div>
        <div class="page-content">
            <div class="padding b-b">
                <div class="row-col">
                    <div class="col-sm w w-auto-xs m-b">
                        <div class="item w r">
                            <div class="item-media">
                                <div class="item-media-content"
                                     style="background-image: url('{{asset('assets/images/b0.jpg')}}')"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="p-l-md no-padding-xs">
                            <div class="page-title"><h1 class="inline">Simple Place To Be</h1></div>
                            <p class="item-desc text-ellipsis text-muted" data-ui-toggle-class="text-ellipsis">Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit. Quamquam tu hanc copiosiorem
                                etiam soles dicere. Nihil illinc huc pervenit. Verum hoc idem saepe faciamus. Quid
                                ad utilitatem tantae pecuniae? Utram tandem linguam nescio? Sed hoc sane
                                concedamus.</p>
                            <div class="item-action m-b"><a class="btn btn-icon white rounded btn-share pull-right"
                                                            data-toggle="modal" data-target="#share-modal"><i
                                        class="fa fa-share-alt"></i></a>
                                <button class="btn-playpause text-primary m-r-sm"></button>
                                <span class="text-muted">2356</span> <a class="btn btn-icon rounded btn-favorite"><i
                                        class="fa fa-heart-o"></i></a> <span class="text-muted">232</span>
                                <div class="inline dropdown m-l-xs"><a class="btn btn-icon rounded btn-more"
                                                                       data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-h"></i></a>
                                    <div class="dropdown-menu pull-right black lt"></div>
                                </div>
                            </div>
                            <div class="item-meta"><a class="btn btn-xs rounded white">Pop</a> <a
                                    class="btn btn-xs rounded white">Happy</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-col">
                <div class="col-lg-9 b-r no-border-md">
                    <div class="padding"><h6 class="m-b"><span class="text-muted">by</span> <a
                                href="{{url('artist-detail')}}" data-pjax class="item-author _600">Rachel Platten</a> <span
                                class="text-muted text-sm">- 10 song, 50 min 32 sec</span></h6>
                        <div id="tracks" class="row item-list item-list-xs item-list-li m-b">
                            <div class="col-xs-12">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">Postiljonen</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-right">5:20</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">RYD</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-right">4:20</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">Fifth Harmony</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-right">5:05</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">Jeremy Scott</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-right">2:50</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">Pablo Nouvelle</a>
                                        </div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-right">3:10</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">Rita Ora</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-right">3:55</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">Summerella</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-right">2:50</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">Postiljonen</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-right">5:20</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">Radionomy</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-right">3:35</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">Judith Garcia</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-right">6:00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="m-b">From Rachel</h5>
                        <div class="row m-b">
                            <div class="col-xs-6 col-sm-6 col-md-3">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">Kygo</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-stats text-xs"><i
                                                    class="fa fa-play text-muted"></i> 30 <i
                                                    class="fa fa-heart m-l-sm text-muted"></i> 10</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">RYD</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-stats text-xs"><i
                                                    class="fa fa-play text-muted"></i> 400 <i
                                                    class="fa fa-heart m-l-sm text-muted"></i> 220</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">Postiljonen</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-stats text-xs"><i
                                                    class="fa fa-play text-muted"></i> 860 <i
                                                    class="fa fa-heart m-l-sm text-muted"></i> 240</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3">
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
                                        <div class="item-author text-sm text-ellipsis hide"><a
                                                href="{{url('artist-detail')}}" class="text-muted">Judith Garcia</a></div>
                                        <div class="item-meta text-sm text-muted"><span
                                                class="item-meta-stats text-xs"><i
                                                    class="fa fa-play text-muted"></i> 320 <i
                                                    class="fa fa-heart m-l-sm text-muted"></i> 20</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="m-b">Comments</h5>
                        <div class="streamline m-b m-l">
                            <div class="sl-item">
                                <div class="sl-left"><img src="{{asset('assets/images/a0.jpg')}}" alt="." class="img-circle"></div>
                                <div class="sl-content">
                                    <div class="sl-author m-b-0"><a href="#">Peter Joo</a> <span
                                            class="sl-date text-muted">2 minutes ago</span></div>
                                    <div><p>Check your Internet connection</p></div>
                                    <div class="sl-footer"><a href="#" data-toggle="collapse"
                                                              data-target="#reply-1"><i
                                                class="fa fa-fw fa-mail-reply text-muted"></i> Reply</a></div>
                                    <div class="box collapse m-a-0 b-a" id="reply-1">
                                        <form><textarea class="form-control no-border" rows="3"
                                                        placeholder="Type something..."></textarea></form>
                                        <div class="box-footer clearfix">
                                            <button class="btn btn-info pull-right btn-sm">Post</button>
                                            <ul class="nav nav-pills nav-sm">
                                                <li class="nav-item"><a class="nav-link" href="#"><i
                                                            class="fa fa-camera text-muted"></i></a></li>
                                                <li class="nav-item"><a class="nav-link" href="#"><i
                                                            class="fa fa-video-camera text-muted"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left"><img src="{{asset('assets/images/a2.jpg')}}" alt="." class="img-circle"></div>
                                <div class="sl-content">
                                    <div class="sl-author m-b-0"><a href="#">Moke</a> <span
                                            class="sl-date text-muted">8:30</span></div>
                                    <div><p>Call to customer <a href="#" class="text-primary">Jacob</a> and discuss
                                            the detail.</p></div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left"><img src="{{asset('assets/images/a3.jpg')}}" alt="." class="img-circle"></div>
                                <div class="sl-content">
                                    <div class="sl-author m-b-0"><a href="#">Moke</a> <span
                                            class="sl-date text-muted">Sat, 5 Mar</span></div>
                                    <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                            posuere erat a ante soe aiea ose dos soois.</p><small>Someone famous in
                                            <cite title="Source Title">Source Title</cite></small></blockquote>
                                    <div class="sl-item">
                                        <div class="sl-left"><img src="{{asset('assets/images/a2.jpg')}}" alt="." class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Sun, 11 Feb</div>
                                            <p><a href="#" class="text-primary">Jessi</a> assign you a task <a
                                                    href="#" class="text-primary">Mockup Design</a>.</p></div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"><img src="{{asset('assets/images/a5.jpg')}}" alt="." class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Thu, 17 Jan</div>
                                            <p>Follow up to close deal</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="m-t-lg m-b">Leave a comment</h5>
                        <form>
                            <div class="form-group row">
                                <div class="col-sm-6"><label>Your name</label><input type="text"
                                                                                     class="form-control"
                                                                                     placeholder="Name"></div>
                                <div class="col-sm-6"><label>Email</label><input type="email" class="form-control"
                                                                                 placeholder="Enter email"></div>
                            </div>
                            <div class="form-group"><label>Comment</label><textarea class="form-control" rows="5"
                                                                                    placeholder="Type your comment"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm white rounded">Submit comment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 w-xxl w-auto-md">
                    <div class="padding" style="bottom: 60px" data-ui-jp="stick_in_parent"><h6
                            class="text text-muted">5 Likes</h6>
                        <div class="row item-list item-list-sm m-b">
                            <div class="col-xs-12">
                                <div class="item r" data-id="item-3"
                                     data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                    <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                               style="background-image: url('{{asset('assets/images/b2.jpg')}}')"></a>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">I Wanna Be
                                                In the Cavalry</a></div>
                                        <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                          class="text-muted">Jeremy
                                                Scott</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="item r" data-id="item-6"
                                     data-src="http://api.soundcloud.com/tracks/236107824/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                    <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                               style="background-image: url('{{asset('assets/images/b5.jpg')}}')"></a>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Body on
                                                me</a></div>
                                        <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                          class="text-muted">Rita
                                                Ora</a></div>
                                    </div>
                                </div>
                            </div>
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
                                <div class="item r" data-id="item-7"
                                     data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                    <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"
                                                               style="background-image: url('{{asset('assets/images/b6.jpg')}}')"></a>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Reflection
                                                (Deluxe)</a></div>
                                        <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"
                                                                                          class="text-muted">Fifth
                                                Harmony</a></div>
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
                                            <div class="item r" data-id="item-3"
                                                 data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                <div class="item-media"><a href="{{url('track-detail')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b2.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">I
                                                            Wanna Be In the Cavalry</a></div>
                                                    <div class="item-author text-sm text-ellipsis"><a
                                                            href="{{url('artist-detail')}}" class="text-muted">Jeremy
                                                            Scott</a></div>
                                                    <div class="item-meta text-sm text-muted"></div>
                                                </div>
                                            </div>
                                        </div>
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
                                            <div class="item r" data-id="item-10"
                                                 data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                <div class="item-media"><a href="{{url('track-detail')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b9.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">The
                                                            Open Road</a></div>
                                                    <div class="item-author text-sm text-ellipsis"><a
                                                            href="{{url('artist-detail')}}" class="text-muted">Postiljonen</a>
                                                    </div>
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
                                                                                   style="background-image: url('{{asset('assets/images/a0.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Crystal
                                                            Guerrero</a>
                                                        <div class="text-sm text-muted">12 songs</div>
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
                                        <div class="col-xs-12">
                                            <div class="item">
                                                <div class="item-media rounded"><a href="{{url('artist-detail')}}"
                                                                                   class="item-media-content"
                                                                                   style="background-image: url('{{asset('assets/images/a3.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Joe
                                                            Holmes</a>
                                                        <div class="text-sm text-muted">24 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item">
                                                <div class="item-media rounded"><a href="{{url('artist-detail')}}"
                                                                                   class="item-media-content"
                                                                                   style="background-image: url('{{asset('assets/images/a8.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Sara
                                                            King</a>
                                                        <div class="text-sm text-muted">14 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection
