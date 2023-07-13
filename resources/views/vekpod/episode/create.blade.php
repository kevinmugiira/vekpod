@extends('layouts.layout-browse')



@section('content')


    <div class="form-control">
    <div class="col-md-6 offset-md-3 mt-5">
        <div class="form-title">

        </div>
        <div class="form-body">
        <h2>Upload an Episode</h2>
        <br>
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

        <form action="{{url('episode-store')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="exampleInputName">Episode Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter episode name" value="{{old("name")}}" required="required">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Episode Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description" required="required">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Category</label>
                <select class="form-control" id="category_id" name="category_id" required="required">
                    @foreach($category as $cat)
                    <option>{{ $cat }}</option>
                    @endforeach
                </select>

            </div>
            <hr>
            <div class="form-group mt-3">
                <label class="mr-2">Upload your episode file:</label>
                <input type="file" name="file_path" id="file_path" accept="mp4" required="required">
            </div>

            <div class="form-group mt-3">
                <label class="mr-2">Upload your episode cover Image:</label>
                <input type="file" name="cover_image" id="cover_image" required="required">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary rounded">Upload Episode</button>
        </form>
    </div>
    </div>
    </div>


{{--    <div id="page-wrapper">--}}
{{--        <div class="main-page">--}}
{{--            <div class="forms">--}}
{{--                <h2 class="title1"></h2>--}}
{{--                <div class="card-header">--}}
{{--                    <div class="form-grids row widget-shadow" data-example-id="basic-forms">--}}
{{--                        <div class="form-title">--}}
{{--                            <h4>Upload Episode :--}}
{{--                                <a href="{{ url('home') }}" class="btn btn-primary pull-right">Back</a>--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                        <div class="form-body">--}}
{{--                            @if(Session::get('success'))--}}
{{--                                <div class="alert alert-success">--}}
{{--                                    {{ Session::get('success') }}--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            @if(Session::get('fail'))--}}
{{--                                <div class="alert alert-danger">--}}
{{--                                    {{ Session::get('fail') }}--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            <form action="{{url('episode-store')}}" method="POST" enctype="multipart/form-data">--}}

{{--                                @csrf--}}

{{--                                <div class="form-group mt-3">--}}
{{--                                    <label for="exampleInputEmail1">Episode name</label>--}}
{{--                                    <input type="text"--}}
{{--                                           name="name"--}}
{{--                                           class="form-control @error('name') list-group-item-danger @enderror"--}}
{{--                                           id="exampleInputEmail1"--}}
{{--                                           placeholder="Name">--}}
{{--                                    @error('name')--}}
{{--                                    <p class="help list-group-item-danger">{{ $errors->first('name') }}</p>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1">Episode Description</label>--}}
{{--                                    <input type="text"--}}
{{--                                           name="description"--}}
{{--                                           class="form-control @error('type') list-group-item-danger @enderror"--}}
{{--                                           id="exampleInputPassword1"--}}
{{--                                           placeholder="Description">--}}

{{--                                    @error('type')--}}
{{--                                    <p class="help list-group-item-danger">{{ $errors->first('type') }}</p>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleFormControlSelect1">Select Category</label>--}}
{{--                                    <select class="form-control" id="category_id" name="platform" required="required">--}}
{{--                                        @foreach($category as $cat)--}}
{{--                                            <option>{{ $cat }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}

{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1">Upload episode</label>--}}
{{--                                    <input type="file"--}}
{{--                                           name="file_path"--}}
{{--                                           class="form-control @error('type') list-group-item-danger @enderror"--}}
{{--                                           id="file_path"--}}
{{--                                           accept="video/mp4">--}}

{{--                                    @error('type')--}}
{{--                                    <p class="help list-group-item-danger">{{ $errors->first('type') }}</p>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1">Upload cover_image</label>--}}
{{--                                    <input type="file"--}}
{{--                                           name="cover_image"--}}
{{--                                           class="form-control @error('type') list-group-item-danger @enderror"--}}
{{--                                           id="cover_image">--}}

{{--                                    @error('type')--}}
{{--                                    <p class="help list-group-item-danger">{{ $errors->first('type') }}</p>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}




{{--                                <button type="submit" class="btn btn-primary">Add Category</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



@endsection
