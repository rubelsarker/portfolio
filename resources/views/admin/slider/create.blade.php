@extends('admin.layout')
@section('admin-content')
    <div class="offset-lg-2 offset-md-2 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Add Slider</h5>
                <a class="float-right btn btn-primary" href="{{route('admin.slider.index')}}">All Slider</a>
            </div>

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{route('admin.slider.store')}}" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="slider_title">Title</label>
                        <input id="slider_title" type="text" name="slider_title" required="" placeholder="Slider Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="slider_description">Description</label>
                        <input id="slider_description" type="text" name="slider_description" placeholder="Slider Description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label >Slider Image</label><br>
                        <input id="slider_image" type="file" name="slider_image"  accept="image/*"   onchange="readURL(this);">
                    </div>
                    <div class="form-group">
                        <img id="image" src="#" />
                    </div>
                    <label class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" value="1" name="status"  class="custom-control-input"><span class="custom-control-label">Status</span>
                    </label>

                    <div class="row">
                        <div class="col-sm-6 offset-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button href="{{route('admin.slider.index')}}" class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('admin-script')
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection