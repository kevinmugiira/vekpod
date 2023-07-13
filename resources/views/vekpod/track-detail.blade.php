@extends('layouts.layout-browse')



@section('content')

    <div class="app-body" id="view">
        <div class="pos-rlt">
            <div class="page-bg" data-stellar-ratio="2" style="background-image: url('{{asset('uploads/cover-images')}}/{{$episodes->cover_image}}')"></div>
        </div>
        <div class="page-content">
            <div class="padding b-b">
                <div class="row-col">
                    <div class="col-sm w w-auto-xs m-b">
                        <div class="item w r">
                            <div class="item-media">
                                <div class="item-media-content"
                                     style="background-image: url('{{asset('uploads/cover-images')}}/{{$episodes->cover_image}}')">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="p-l-md no-padding-xs">
                            <div class="page-title">
                                <h1 class="inline">{{$episodes->name}}</h1>
                            </div>
                            <p class="item-desc text-ellipsis text-muted" data-ui-toggle-class="text-ellipsis">{{$episodes->description}}</p>
{{--                            <div class="item-action m-b">--}}
{{--                                <a class="btn btn-icon white rounded btn-share pull-right" data-toggle="modal" data-target="#share-modal">--}}
{{--                                    <i class="fa fa-share-alt"></i>--}}
{{--                                </a>--}}
{{--                                <button class="btn-playpause text-primary m-r-sm"></button>--}}
{{--                                <span class="text-muted">2356</span>--}}
{{--                                <a class="btn btn-icon rounded btn-favorite">--}}
{{--                                    <i class="fa fa-heart-o"></i>--}}
{{--                                </a>--}}
{{--                                <span class="text-muted">232</span>--}}
{{--                                <div class="inline dropdown m-l-xs">--}}
{{--                                    <a class="btn btn-icon rounded btn-more" data-toggle="dropdown">--}}
{{--                                        <i class="fa fa-ellipsis-h"></i>--}}
{{--                                    </a>--}}
{{--                                    <div class="dropdown-menu pull-right black lt"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="item-meta">
                                @foreach($categories as $category)
                                <a class="btn btn-xs rounded white">{{$category->name}}</a>
                                @endforeach
{{--                                <a class="btn btn-xs rounded white">Happy</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-col">
                <div class="col-lg-9 b-r no-border-md">
                    <div class="padding">
                        <h6 class="m-b">
                            <span class="text-muted">by</span>
                            <a href="{{url('detail')}}" data-pjax class="item-author _600">{{$episodes->author}}</a>
                            <span class="text-muted text-sm">{{$userEpisodes->count()}} episodes</span>
                        </h6>
                        <div id="tracks" class="row item-list item-list-xs item-list-li m-b">
                            <div class="col-xs-12 padding">
                                @foreach($userEpisodes as $episode)
                                <div class="item r" data-id="item-10" data-src="{{asset('upload/pods')}}/{{$episode->file_path}}">
                                    <div class="item-media">
                                        <a href="{{url('track')}}/{{$episode->id}}" class="item-media-content" style="background-image: url('{{asset('uploads/cover-images')}}/{{$episode->cover_image}}')"></a>
                                        <div class="item-overlay center">
                                            <button class="btn-playpause">Play</button>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="item-overlay bottom text-right">
                                            <a href="#" class="btn-favorite">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a href="#" class="btn-more" data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu pull-right black lt">

                                            </div>
                                        </div>
                                        <div class="item-title text-ellipsis">

                                            <a href="{{url('track')}}/{{$episode->id}}">{{$episode->name}} {{$episode->description}}</a>
                                        </div>

                                        <div class="item-author text-sm text-ellipsis hide">
                                            <a href="{{url('track')}}/{{$episode->id}}" class="text-muted">{{$episode->author}}</a>
                                        </div>
{{--                                        <div class="item-meta text-sm text-muted">--}}
{{--                                            <span class="item-meta-right">5:20</span>--}}
{{--                                        </div>--}}

                                    </div>
                                </div>
                                @endforeach
                            </div>

{{--                            <h5 class="m-b ">Comments</h5>--}}
{{--                        <div class="streamline m-b m-l">--}}
{{--                          @forelse($episodes->comments as $comment)--}}


{{--                            <div class="sl-item">--}}
{{--                                <div class="sl-left">--}}
{{--                                    <img src="{{$comment->user->profile_photo_url}}" alt="." class="img-circle">--}}
{{--                                </div>--}}
{{--                                <div class="sl-content">--}}
{{--                                    <div class="sl-author m-b-0">--}}
{{--                                        @if($comment->user)--}}
{{--                                       <h6>--}}
{{--                                           <a href="#">{{$comment->user->name}}</a>--}}

{{--                                        @endif--}}

{{--                                            <span class="sl-date text-muted">{{$comment->created_at->format('g:i')}}--}}

{{--                                            </span>--}}
{{--                                       </h6>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <p>{{$comment->comment_body}}</p>--}}
{{--                                    </div>--}}
{{--                                    @if(auth()->user() && auth()->user()->id == $comment->user_id)--}}
{{--                                    <div class="sl-footer">--}}
{{--                                        <a href="#" data-toggle="collapse" class="btn-sm  rounded green-200" data-target="#reply-1">--}}
{{--                                            <i class="fa fa-fw fa-mail-reply"></i>--}}
{{--                                            Reply--}}
{{--                                        </a>--}}
{{--                                        <a href="#" data-toggle="collapse" class="btn-sm btn-outline-secondary rounded sm blue-200" data-target="#reply-1">--}}

{{--                                            Edit--}}
{{--                                        </a>--}}
{{--                                        <form action="{{url('comment/delete') }}/{{$comment->id}}" method="POST" >--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button data-toggle="collapse" class="deleteComment btn-sm btn-outline-secondary rounded sm red-200">--}}
{{--                                                Delete--}}
{{--                                            </button>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                    @endif--}}
{{--                                    <div class="box collapse m-a-0 b-a" id="reply-1">--}}
{{--                                        <form>--}}
{{--                                            <textarea class="form-control no-border" rows="3" placeholder="Type something..."></textarea>--}}
{{--                                        </form>--}}
{{--                                        <div class="box-footer clearfix">--}}
{{--                                            <button class="btn btn-info pull-right btn-sm">Post</button>--}}
{{--                                            <ul class="nav nav-pills nav-sm">--}}
{{--                                                <li class="nav-item">--}}
{{--                                                    <a class="nav-link" href="#">--}}
{{--                                                        <i class="fa fa-camera text-muted"></i>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="nav-item">--}}
{{--                                                    <a class="nav-link" href="#">--}}
{{--                                                        <i class="fa fa-video-camera text-muted"></i>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @empty--}}

{{--                              <div class="card card-footer shadow-sm mt-3">--}}
{{--                                <h6>No Comments yet!!</h6>--}}
{{--                              </div>--}}

{{--                            @endforelse--}}
{{--                            <div class="sl-item">--}}
{{--                                <div class="sl-left">--}}
{{--                                    <img src="{{asset('assets/images/a2.jpg')}}" alt="." class="img-circle"></div>--}}
{{--                                <div class="sl-content">--}}
{{--                                    <div class="sl-author m-b-0">--}}
{{--                                        <a href="#">Moke</a>--}}
{{--                                        <span class="sl-date text-muted">8:30</span>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <p>Call to customer--}}
{{--                                            <a href="#" class="text-primary">Jacob</a>--}}
{{--                                            and discuss the detail.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="sl-item">--}}
{{--                                <div class="sl-left">--}}
{{--                                    <img src="{{asset('assets/images/a3.jpg')}}" alt="." class="img-circle">--}}
{{--                                </div>--}}
{{--                                <div class="sl-content">--}}
{{--                                    <div class="sl-author m-b-0">--}}
{{--                                        <a href="#">Moke</a>--}}
{{--                                        <span class="sl-date text-muted">Sat, 5 Mar</span>--}}
{{--                                    </div>--}}
{{--                                    <blockquote>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer--}}
{{--                                            posuere erat a ante soe aiea ose dos soois.</p>--}}
{{--                                        <small>Someone famous in--}}
{{--                                            <cite title="Source Title">Source Title</cite>--}}
{{--                                        </small>--}}
{{--                                    </blockquote>--}}
{{--                                    <div class="sl-item">--}}
{{--                                        <div class="sl-left">--}}
{{--                                            <img src="{{asset('assets/images/a2.jpg')}}" alt="." class="img-circle">--}}
{{--                                        </div>--}}
{{--                                        <div class="sl-content">--}}
{{--                                            <div class="sl-date text-muted">Sun, 11 Feb</div>--}}
{{--                                            <p>--}}
{{--                                                <a href="#" class="text-primary">Jessi</a> assign you a task--}}
{{--                                                <a href="#" class="text-primary">Mockup Design</a>.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="sl-item">--}}
{{--                                        <div class="sl-left">--}}
{{--                                            <img src="{{asset('assets/images/a5.jpg')}}" alt="." class="img-circle">--}}
{{--                                        </div>--}}
{{--                                        <div class="sl-content">--}}
{{--                                            <div class="sl-date text-muted">Thu, 17 Jan</div>--}}
{{--                                            <p>Follow up to close deal</p></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        @if(session('message'))--}}
{{--                            <h6 class="alert alert-info mb-3">{{session('message')}}</h6>--}}
{{--                        @endif--}}
{{--                        @if(Session::get('success'))--}}
{{--                            <div class="alert alert-success mb-3">--}}
{{--                                {{ Session::get('success') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        @if(Session::get('fail'))--}}
{{--                            <div class="alert alert-danger mb-3">--}}
{{--                                {{ Session::get('fail') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        <h5 class="m-t-lg m-b">Leave a comment</h5>--}}
{{--                        <form action="{{url('comments')}}" method="POST" enctype="multipart/form-data">--}}

{{--                            @csrf--}}

{{--                            <div class="form-group row">--}}
{{--                                <div class="col-sm-6">--}}

{{--                                    <input type="hidden" name="episode_id" id="episode_id" class="form-control" value="{{$episodes->id}}">--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Comment</label>--}}
{{--                                <textarea class="form-control" name="comment_body" rows="5" placeholder="Type your comment" required></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <button type="submit" class="btn btn-sm-primary blue rounded">Submit comment</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
                    </div>
                </div>
                <div class="col-lg-3 w-xxl w-auto-md">
                    <div class="padding" style="bottom: 60px" data-ui-jp="stick_in_parent">
{{--                                                              class="nav-link text-muted m-r-xs">Legal</a>--}}
                            <a href="#" class="nav-link text-muted m-r-xs">Policy</a>
                    </div>
                        <p class="text-muted text-xs p-b-lg">&copy; Copyright 2023</p>
                </div>
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
                                                <div class="item-media"><a href="{{url('track')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b2.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track')}}">I
                                                            Wanna Be In the Cavalry</a></div>
                                                    <div class="item-author text-sm text-ellipsis"><a
                                                            href="{{url('detail')}}" class="text-muted">Jeremy
                                                            Scott</a></div>
                                                    <div class="item-meta text-sm text-muted"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item r" data-id="item-8"
                                                 data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                <div class="item-media"><a href="{{url('track')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b7.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track')}}">Simple
                                                            Place To Be</a></div>
                                                    <div class="item-author text-sm text-ellipsis"><a
                                                            href="{{url('detail')}}" class="text-muted">RYD</a></div>
                                                    <div class="item-meta text-sm text-muted"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item r" data-id="item-12"
                                                 data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                <div class="item-media"><a href="{{url('track')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b11.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track')}}">Happy
                                                            ending</a></div>
                                                    <div class="item-author text-sm text-ellipsis"><a
                                                            href="{{url('detail')}}" class="text-muted">Postiljonen</a>
                                                    </div>
                                                    <div class="item-meta text-sm text-muted"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item r" data-id="item-10"
                                                 data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                <div class="item-media"><a href="{{url('track')}}"
                                                                           class="item-media-content"
                                                                           style="background-image: url('{{asset('assets/images/b9.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('track')}}">The
                                                            Open Road</a></div>
                                                    <div class="item-author text-sm text-ellipsis"><a
                                                            href="{{url('detail')}}" class="text-muted">Postiljonen</a>
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
                                                <div class="item-media rounded"><a href="{{url('detail')}}"
                                                                                   class="item-media-content"
                                                                                   style="background-image: url('{{asset('assets/images/a0.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('detail')}}">Crystal
                                                            Guerrero</a>
                                                        <div class="text-sm text-muted">12 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item">
                                                <div class="item-media rounded"><a href="{{url('detail')}}"
                                                                                   class="item-media-content"
                                                                                   style="background-image: url('{{asset('assets/images/a5.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('detail')}}">Judy
                                                            Woods</a>
                                                        <div class="text-sm text-muted">23 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item">
                                                <div class="item-media rounded"><a href="{{url('detail')}}"
                                                                                   class="item-media-content"
                                                                                   style="background-image: url('{{asset('assets/images/a3.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('detail')}}">Joe
                                                            Holmes</a>
                                                        <div class="text-sm text-muted">24 songs</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="item">
                                                <div class="item-media rounded"><a href="{{url('detail')}}"
                                                                                   class="item-media-content"
                                                                                   style="background-image: url('{{asset('assets/images/a8.jpg')}}')"></a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title text-ellipsis"><a href="{{url('detail')}}">Sara
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
