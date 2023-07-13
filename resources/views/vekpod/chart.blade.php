@extends('layouts.layout-browse')



@section('content')



    <div class="padding">
        <h6>Admin Charts</h6>
        <div class="row m-b">
            <div class="col-sm-4">
                <div class="box rou">
                    <div class="box-header light-green-800">
                        <h3>Users</h3>
                        <a href="{{url('users')}}">
                            <small>Proceed to view users</small></a>
                        <div class="box-tool">
                            <ul class="nav">
                                <li class="nav-item inline">
                                    <a class="nav-link">
                                        <i class="fa fa-fw fa-refresh"></i>
                                    </a>
                                </li>
                                <li class="nav-item inline dropdown">
                                    <a class="nav-link" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item">Separated link</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-body">
                        <a href="{{url('users')}}" >
                            <h3 class="m-a-0">
                            {{$users}}
                        </h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box rou">
                    <div class="box-header primary light-blue-200">
                        <h3>Episodes</h3>
                        <a href="{{url('episodes')}}">
                            <small>Proceed to view Episodes</small></a>
                        <div class="box-tool">
                            <ul class="nav">
                                <li class="nav-item inline">
                                    <a class="nav-link">
                                        <i class="fa fa-fw fa-refresh"></i>
                                    </a>
                                </li>
                                <li class="nav-item inline dropdown">
                                    <a class="nav-link" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-ellipsis-v"></i>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-body">
                        <a href="{{url('episodes')}}" >
                            <h3 class="m-a-0">
                                {{$episodes}}
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box ">
                    <div class="box-header yellow-800">
                        <h3>Categories</h3>
                        <a href="{{url('categories')}}">
                            <small>Proceed to view categories</small>
                        </a>
                        <div class="box-tool">
                            <ul class="nav">
                                <li class="nav-item inline">
                                    <a class="nav-link">
                                        <i class="fa fa-fw fa-refresh"></i>
                                    </a>
                                </li>
                                <li class="nav-item inline dropdown">
                                    <a class="nav-link" data-toggle="dropdown">
                                        <i class="fa fa-fw fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item">Separated link</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-body">
                        <a href="{{url('categories')}}" >
                            <h3 class="m-a-0">
                                {{$categories}}
                            </h3>
                        </a>
                    </div>
                </div>
            </div>


        </div>



    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-area-chart me-1"></i>
                    Area Chart Users
                </div>
                <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="40"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart Users
                </div>
                <div class="card-body">
                    <canvas id="myBarChart" width="100%" height="40"></canvas>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript">

        var _ydata=JSON.parse('{!! json_encode($months) !!}');
        var _xdata=JSON.parse('{!! json_encode($monthCount) !!}');
    </script>
    <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>

@endsection
