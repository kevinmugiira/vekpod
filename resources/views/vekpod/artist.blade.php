@extends('layouts.layout-browse')




@section('content')
        <div class="app-body" id="view">
            <div class="page-content">
                <div class="row-col">
                    <div class="col-lg-9 b-r no-border-md">
                        <div class="padding">
                            <div class="page-title m-b"><h1 class="inline m-a-0">Podcasters</h1>
                                <div class="dropdown inline">
                                    <button class="btn btn-sm no-bg h4 m-y-0 v-b dropdown-toggle text-primary"
                                            data-toggle="dropdown">By name
                                    </button>
                                    <div class="dropdown-menu"><a href="#" class="dropdown-item active">By name</a>
                                        <a href="#" class="dropdown-item">Podcasts</a></div>
                                </div>
                            </div>
                            <div data-ui-jp="jscroll" data-ui-options="{autoTrigger: false,loadingHtml:
                            '<i class=\'fa fa-refresh fa-spin text-md text-muted\'></i>', padding: 50, nextSelector: 'a.jscroll-next:last' }">
                                <div class="row row-lg">
                                    @foreach($user as $users)
                                    <div class="col-xs-4 col-sm-4 col-md-3">
                                        <div class="item">
                                            <div class="item-media rounded">
                                                <a href="{{url('artist-detail')}}" class="item-media-content" style="background-image: url('{{$users->profile_photo_path}}')"></a>
                                            </div>
                                            <div class="item-info text-center">
                                                <div class="item-title text-ellipsis">

                                                    <a href="{{url('artist-detail')}}">{{ $users->name }}</a>

                                                    <div class="text-sm text-muted">23 episodes</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
{{--                                    <div class="col-xs-4 col-sm-4 col-md-3">--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="item-media rounded"><a href="{{url('artist-detail')}}"--}}
{{--                                                                               class="item-media-content"--}}
{{--                                                                               style="background-image: url('{{asset('assets/images/a7.jpg')}}')"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="item-info text-center">--}}
{{--                                                <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Richard--}}
{{--                                                        Carr</a>--}}
{{--                                                    <div class="text-sm text-muted">6 songs</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-4 col-sm-4 col-md-3">--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="item-media rounded"><a href="{{url('artist-detail')}}"--}}
{{--                                                                               class="item-media-content"--}}
{{--                                                                               style="background-image: url('{{asset('assets/images/a5.jpg')}}')"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="item-info text-center">--}}
{{--                                                <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Judy--}}
{{--                                                        Woods</a>--}}
{{--                                                    <div class="text-sm text-muted">23 songs</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-4 col-sm-4 col-md-3">--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="item-media rounded"><a href="{{url('artist-detail')}}"--}}
{{--                                                                               class="item-media-content"--}}
{{--                                                                               style="background-image: url('{{asset('assets/images/a2.jpg')}}')"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="item-info text-center">--}}
{{--                                                <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Jean--}}
{{--                                                        Schneider</a>--}}
{{--                                                    <div class="text-sm text-muted">8 songs</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-4 col-sm-4 col-md-3">--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="item-media rounded"><a href="{{url('artist-detail')}}"--}}
{{--                                                                               class="item-media-content"--}}
{{--                                                                               style="background-image: url('{{asset('assets/images/b1.jpg')}}')"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="item-info text-center">--}}
{{--                                                <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Melissa--}}
{{--                                                        Garza</a>--}}
{{--                                                    <div class="text-sm text-muted">20 songs</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-4 col-sm-4 col-md-3">--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="item-media rounded"><a href="{{url('artist-detail')}}"--}}
{{--                                                                               class="item-media-content"--}}
{{--                                                                               style="background-image: url('{{asset('assets/images/a9.jpg')}}')"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="item-info text-center">--}}
{{--                                                <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Douglas--}}
{{--                                                        Torres</a>--}}
{{--                                                    <div class="text-sm text-muted">20 songs</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-4 col-sm-4 col-md-3">--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="item-media rounded"><a href="{{url('artist-detail')}}"--}}
{{--                                                                               class="item-media-content"--}}
{{--                                                                               style="background-image: url('{{asset('assets/images/a0.jpg')}}')"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="item-info text-center">--}}
{{--                                                <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Crystal--}}
{{--                                                        Guerrero</a>--}}
{{--                                                    <div class="text-sm text-muted">12 songs</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-4 col-sm-4 col-md-3">--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="item-media rounded"><a href="{{url('artist-detail')}}"--}}
{{--                                                                               class="item-media-content"--}}
{{--                                                                               style="background-image: url('{{asset('assets/images/a1.jpg')}}')"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="item-info text-center">--}}
{{--                                                <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">James--}}
{{--                                                        Garcia</a>--}}
{{--                                                    <div class="text-sm text-muted">9 songs</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-4 col-sm-4 col-md-3">--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="item-media rounded"><a href="{{url('artist-detail')}}"--}}
{{--                                                                               class="item-media-content"--}}
{{--                                                                               style="background-image: url('{{asset('assets/images/a8.jpg')}}')"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="item-info text-center">--}}
{{--                                                <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Sara--}}
{{--                                                        King</a>--}}
{{--                                                    <div class="text-sm text-muted">14 songs</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-4 col-sm-4 col-md-3">--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="item-media rounded"><a href="{{url('artist-detail')}}"--}}
{{--                                                                               class="item-media-content"--}}
{{--                                                                               style="background-image: url('{{asset('assets/images/a3.jpg')}}')"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="item-info text-center">--}}
{{--                                                <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Joe--}}
{{--                                                        Holmes</a>--}}
{{--                                                    <div class="text-sm text-muted">24 songs</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-4 col-sm-4 col-md-3">--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="item-media rounded"><a href="{{url('artist-detail')}}"--}}
{{--                                                                               class="item-media-content"--}}
{{--                                                                               style="background-image: url('{{asset('assets/images/a4.jpg')}}')"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="item-info text-center">--}}
{{--                                                <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Judith--}}
{{--                                                        Garcia</a>--}}
{{--                                                    <div class="text-sm text-muted">13 songs</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xs-4 col-sm-4 col-md-3">--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="item-media rounded"><a href="{{url('artist-detail')}}"--}}
{{--                                                                               class="item-media-content"--}}
{{--                                                                               style="background-image: url('{{asset('assets/images/b0.jpg')}}')"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="item-info text-center">--}}
{{--                                                <div class="item-title text-ellipsis"><a href="{{url('artist-detail')}}">Jeremy--}}
{{--                                                        Scott</a>--}}
{{--                                                    <div class="text-sm text-muted">14 songs</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                                <a href="scroll.author.html" class="btn btn-sm white rounded jscroll-next">Show More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 w-xxl w-auto-md">
{{--                        <div class="padding" style="bottom: 60px" data-ui-jp="stick_in_parent">--}}
{{--                            <h6 class="text text-muted">5 Likes</h6>--}}
{{--                            <div class="row item-list item-list-sm m-b">--}}
{{--                                <div class="col-xs-12">--}}
{{--                                    <div class="item r" data-id="item-11"--}}
{{--                                         data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">--}}
{{--                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"--}}
{{--                                                                   style="background-image: url('{{asset('assets/images/b10.jpg')}}')"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-info">--}}
{{--                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Spring</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"--}}
{{--                                                                                              class="text-muted">Pablo--}}
{{--                                                    Nouvelle</a></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xs-12">--}}
{{--                                    <div class="item r" data-id="item-7"--}}
{{--                                         data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">--}}
{{--                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"--}}
{{--                                                                   style="background-image: url('{{asset('assets/images/b6.jpg')}}')"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-info">--}}
{{--                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Reflection--}}
{{--                                                    (Deluxe)</a></div>--}}
{{--                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"--}}
{{--                                                                                              class="text-muted">Fifth--}}
{{--                                                    Harmony</a></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xs-12">--}}
{{--                                    <div class="item r" data-id="item-2"--}}
{{--                                         data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">--}}
{{--                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"--}}
{{--                                                                   style="background-image: url('{{asset('assets/images/b1.jpg')}}')"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-info">--}}
{{--                                            <div class="item-title text-ellipsis"><a--}}
{{--                                                    href="{{url('track-detail')}}">Fireworks</a></div>--}}
{{--                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"--}}
{{--                                                                                              class="text-muted">Kygo</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xs-12">--}}
{{--                                    <div class="item r" data-id="item-1"--}}
{{--                                         data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">--}}
{{--                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"--}}
{{--                                                                   style="background-image: url('{{asset('assets/images/b0.jpg')}}')"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-info">--}}
{{--                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Pull--}}
{{--                                                    Up</a></div>--}}
{{--                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"--}}
{{--                                                                                              class="text-muted">Summerella</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xs-12">--}}
{{--                                    <div class="item r" data-id="item-10"--}}
{{--                                         data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">--}}
{{--                                        <div class="item-media"><a href="{{url('track-detail')}}" class="item-media-content"--}}
{{--                                                                   style="background-image: url('{{asset('assets/images/b9.jpg')}}')"></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-info">--}}
{{--                                            <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">The Open--}}
{{--                                                    Road</a></div>--}}
{{--                                            <div class="item-author text-sm text-ellipsis"><a href="{{url('artist-detail')}}"--}}
{{--                                                                                              class="text-muted">Postiljonen</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h6 class="text text-muted">Go mobile</h6>--}}
{{--                            <div class="btn-groups"><a href="" class="btn btn-sm dark lt m-r-xs"--}}
{{--                                                       style="width: 135px"><span class="pull-left m-r-sm"><i--}}
{{--                                            class="fa fa-apple fa-2x"></i></span> <span class="clear text-left l-h-1x"><span--}}
{{--                                            class="text-muted text-xxs">Download on the</span> <b--}}
{{--                                            class="block m-b-xs">App Store</b></span></a> <a href="" class="btn btn-sm dark lt"--}}
{{--                                                                                             style="width: 133px"><span--}}
{{--                                        class="pull-left m-r-sm"><i class="fa fa-play fa-2x"></i></span> <span--}}
{{--                                        class="clear text-left l-h-1x"><span class="text-muted text-xxs">Get it on</span> <b--}}
{{--                                            class="block m-b-xs m-r-xs">Google Play</b></span></a></div>--}}
{{--                            <div class="b-b m-y"></div>--}}
{{--                            <div class="nav text-sm _600"><a href="#" class="nav-link text-muted m-r-xs">About</a> <a--}}
{{--                                    href="#" class="nav-link text-muted m-r-xs">Contact</a> <a href="#"--}}
{{--                                                                                               class="nav-link text-muted m-r-xs">Legal</a>--}}
{{--                                <a href="#" class="nav-link text-muted m-r-xs">Policy</a></div>--}}
{{--                            <p class="text-muted text-xs p-b-lg">&copy; Copyright 2016</p></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="switcher">
        <div class="switcher white" id="sw-theme">
            <a href="#" data-ui-toggle-class="active" data-ui-target="#sw-theme" class="white sw-btn">
                <i class="fa fa-gear text-muted"></i>
            </a>
            <div class="box-header">
                <a href="https://themeforest.net/item/pulse-music-audio-radio-template/16798243?ref=flatfull"
                    class="btn btn-xs rounded danger pull-right">BUY</a>
                <strong>Theme Switcher</strong>
            </div>
            <div class="box-divider"></div>
            <div class="box-body">
                <p id="settingLayout" class="hidden-md-down">
                    <label class="md-check m-y-xs" data-target="folded">
                        <input type="checkbox">
                        <i class="green"></i>
                        <span>Folded Aside</span>
                    </label>
                    <label class="m-y-xs pointer" data-ui-fullscreen data-target="fullscreen">
                        <span class="fa fa-expand fa-fw m-r-xs"></span>
                        <span>Fullscreen Mode</span>
                    </label>
                </p>
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
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control"
                                                                           placeholder="Type keyword"
                                                                           data-ui-toggle-class="hide"
                                                                           data-ui-target="#search-result"> <span
                                    class="input-group-btn">
                                    <button class="btn b-a no-shadow white" type="submit">Search</button>
                                </span>
                            </div>
                        </form>
                        <div id="search-result" class="animated fadeIn">
                            <p class="m-b-md"><strong>23</strong> <span
                                    class="text-muted">Results found for:</span><strong>Keyword</strong></p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row item-list item-list-sm item-list-by m-b">
                                        <div class="col-xs-12">
                                            <div class="item r" data-id="item-5"
                                                 data-src="http://streaming.radionomy.com/JamendoLounge">
                                                <div class="item-media"><a href="{{url('track-detail')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b4.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Live
                                                            Radio</a></div>
                                                    <div class="item-author text-sm text-ellipsis"><a
                                                            href="{{url('artist-detail')}}" class="text-muted">Radionomy</a>
                                                    </div>
                                                    <div class="item-meta text-sm text-muted"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item r" data-id="item-2"
                                                 data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                <div class="item-media"><a href="{{url('track-detail')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b1.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Fireworks</a>
                                                    </div>
                                                    <div class="item-author text-sm text-ellipsis"><a
                                                            href="{{url('artist-detail')}}" class="text-muted">Kygo</a></div>
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
                                            <div class="item r" data-id="item-11"
                                                 data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                <div class="item-media"><a href="{{url('track-detail')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b10.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track-detail')}}">Spring</a>
                                                    </div>
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
