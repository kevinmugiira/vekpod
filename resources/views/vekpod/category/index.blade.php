@extends('layouts.layout-browse')


@section('content')

    <div class="form-control">

        <div class="col-md-6 offset-md-3 mt-5">

    <!-- main content start-->
    <div id="form-control ">
        <div class="main-page">
            <div class="form-body">
                <h2 class="title1 font-weight-bold mb-8 pb-2 border-b">Category add</h2>
{{--                <div class="card-header">--}}
{{--                    <div class="form-grids row widget-shadow" data-example-id="basic-forms">--}}
                        <div class="form-title">
{{--                            <h4>Add Category :--}}
{{--                                <a href="{{ url('home') }}" class="btn btn-primary pull-right">Back</a>--}}
{{--                            </h4>--}}
                        </div>
                        <div class="form-body">
                            @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif

                            <form action="{{url('category-store')}}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category name</label>
                                    <input type="text"
                                           name="name"
                                           class="form-control"
                                           id="name"
                                           value="{{old('name')}}"
                                           placeholder="Name"
                                           required="required">
                                    @error('name')
                                    <p class="help list-group-item-danger">{{ $errors->first('name') }}</p>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Description</label>
                                    <input type="text"
                                           name="type"
                                           class="form-control @error('type') list-group-item-danger @enderror"
                                           id="description"
                                           value="{{old('description')}}"
                                           placeholder="Description"
                                           required="required">

                                    @error('type')
                                    <p class="help list-group-item-danger">{{ $errors->first('type') }}</p>
                                    @enderror

                                </div>


                                <button type="submit" class="btn btn-primary rounded">Add Category</button>
                            </form>
                        </div>
{{--                    </div>--}}
                </div>


            </div>
        </div>
    </div>




@endsection
