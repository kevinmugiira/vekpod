@extends('layouts.layout-index')



@section('content')

                <ul class="nav navbar-nav pull-right">
                    <li class="nav-item">
                        <a href="{{url('register')}}" class="nav-link">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('login')}}" class="nav-link">
                            <span class="btn btn-sm rounded primary _600">Signin</span>
                        </a>
                    </li>
                </ul>
                <div class="collapse navbar-toggleable-sm l-h-0 text-center" id="navbar">
                    <ul class="nav navbar-nav nav-md inline text-primary-hover">
                        <li class="nav-item">
                            <a href="{{url('home')}}" class="nav-link">
                                <span class="nav-text">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('player')}}" class="nav-link">
                                <span class="nav-text">App</span>
                            </a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{url('rtl')}}" class="nav-link">--}}
{{--                                <span class="nav-text">Rtl</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="app-body">
            <div class="owl-carousel black owl-theme owl-dots-bottom-center" data-ui-jp="owlCarousel" data-ui-options="{
             items: 1
            ,loop: true
            ,autoplay: true
            ,nav: true
          }">
                <div class="row-col">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8 text-center">
                        <div class="p-a-lg">
                            <h2 class="display-4 m-y-lg">A simple and fast Podcasting site</h2>
                            <h6 class="text-muted m-b-lg">Try now for free</h6>
                            <a href="{{url('home')}}" class="btn circle btn-outline b-primary m-b-lg p-x-md">Get it now</a>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <div class="row-col">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8 text-center">
                        <div class="p-a-lg">
                            <h2 class="display-4 m-y-lg">Podcasting has never been so easy</h2>
                            <h6 class="text-muted m-b-lg">Register for free</h6>
                            <a href="{{url('player')}}" class="btn circle btn-outline b-primary m-b-lg p-x-md">View App</a>
                        </div>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
                <div class="row-col">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8 text-center">
                        <div class="p-a-lg"><h2 class="display-4 m-y-lg">Listen to your favorite podcast on the go</h2>
                            <h6 class="text-muted m-b-lg">No hustles, No fees. Completly free</h6>
                            <a href="{{url('rtl')}}" class="btn circle btn-outline b-primary m-b-lg p-x-md">Get RTL</a>
                        </div>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
            </div>
            <div class="row-col">
                <div class="col-sm-6">
                    <div class="black cover cover-gd" style="background-image: url('{{asset('assets/images/b1.jpg')}}')">
                        <div class="p-a-lg text-center">
                            <h3 class="display-3 m-y-lg">Podcasts</h3>
                            <p class="text-muted text-md m-b-lg">Get ready for high sound quality.</p>
                            <a href="{{url('player')}}" class="btn circle white m-b-lg p-x-md">Try Free</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 black lt">
                    <div class="black cover cover-gd" style="background-image: url('{{asset('assets/images/b7.jpg')}}')">
                        <div class="p-a-lg text-center">
                            <h3 class="display-3 m-y-lg">Podcasters</h3>
                            <p class="text-muted text-md m-b-lg">Listen to your favorite podcaster.</p>
                            <a href="{{url('home')}}" class="btn circle white m-b-lg p-x-md">View podcasters</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-col dark-white">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <div class="p-a-lg text-center">
                        <h3 class="display-4 m-y-lg">Reinvent your podcasting carrier</h3>
                        <p class="text-muted text-md m-b-lg">Get started today with a free account</p>
                        <a href="{{url('home')}}" class="btn circle btn-outline b-black m-b-lg p-x-md">Try Settings</a>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>
            <div class="black cover" data-stellar-background-ratio="0.5" style="background-image: url('{{asset('assets/images/b10.jpg')}}')">
                <div class="row-col">
                    <div class="col-md-4">
                        <div class="p-a-lg text-center">
                            <h4 class="m-y-lg">Stream all you want today with Vekpod</h4>
                            <p class="text-muted text-md m-b-lg">Receive unlimited storage space for the first three months</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-a-lg text-center">
                            <h4 class="m-y-lg">Share with others through Amazon, Google, Spotify and Sound Cloud</h4>
                            <p class="text-muted text-md m-b-lg">Build a podcast in minutes. Registration is free</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-a-lg text-center">
                            <h4 class="m-y-lg">Reinvent your podcasting carrier</h4>
                            <p class="text-muted text-md m-b-lg">Choose the suitable pod style for your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white dk pos-rlt">
            <div class="p-a-md">
                <div class="footer p-y-md text-primary-hover">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="clearfix m-b-lg">
                                <a href="{{url('index')}}" class="navbar-brand md">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
                                        <circle cx="24" cy="24" r="24" fill="rgba(255,255,255,0.2)"/>
                                        <circle cx="24" cy="24" r="22" fill="#1c202b" class="brand-color"/>
                                        <circle cx="24" cy="24" r="10" fill="#ffffff"/>
                                        <circle cx="13" cy="13" r="2" fill="#ffffff" class="brand-animate"/>
                                        <path d="M 14 24 L 24 24 L 14 44 Z" fill="#FFFFFF"/>
                                        <circle cx="24" cy="24" r="3" fill="#000000"/></svg>
                                    <img src="{{asset('assets/images/logo.png')}}" alt="." class="hide">
                                    <span class="hidden-folded inline">Vekpod</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <h6 class="text-u-c m-b text-muted">About</h6>
                            <div class="m-b-md">
                                <ul class="nav l-h-2x _600">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About us</a>
                                    </li>
{{--                                    <li class="nav-item"><a class="nav-link" href="#">Mobile apps</a>--}}
{{--                                    </li>--}}
                                    <li class="nav-item"><a class="nav-link" href="#">Blog</a>
                                    </li>
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" href="#">Jobs</a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <h6 class="text-u-c m-b text-muted">Links</h6>
                            <div class="m-b-md"><ul class="nav l-h-2x _600">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Help</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Support</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Legal</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Copyright</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <h6 class="text-u-c m-b text-muted">Connect</h6>
                            <div class="m-b-md"><ul class="nav l-h-2x _600">
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.facebook.com/">Facebook</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin%3Flang%3Den">Twitter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://accounts.google.com/v3/signin/identifier?dsh=S1325770267%3A1688715339123031&ifkv=AeDOFXisqAdJQ5x3NrvI89gpbZEKiDFpSLIgL5dYbQ79O2KpU81pzAVfvfRioIkPQxu7WD_SzmrC&ltmpl=mobNH&flowName=GlifWebSignIn&flowEntry=ServiceLogin">Google+</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h6 class="text-u-c m-b text-muted">Subscribe</h6>
                            <p>Do not want to miss our newsletter?</p>
                            <form class="m-b-lg">
                                <input type="text" class="form-control" placeholder="Your email">
                                <button type="submit" class="btn btn-sm btn-outline b-dark rounded m-t">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="b b-b m-b m-t-lg">

                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <a href="#" class="text-muted text-sm">Cookies</a>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-sm-right text-xs-left">
                                <small class="text-muted">&copy; Copyright. All rights reserved.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
