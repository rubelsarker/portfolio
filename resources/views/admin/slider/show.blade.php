@extends('admin.layout')
@section('admin-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-left">Slider Details</h4>
                        <a class="btn btn-primary float-right" href="{{route('admin.slider.index')}}">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Title : {{ $slider->slider_title }}</h3>
                                <p>Description : {{ $slider->slider_description }}</p>
                                @if( $slider->status == 1)
                                    <span class="badge badge-success ">Active</span>
                                @else
                                    <span class="badge badge-danger">Un Active</span>
                                @endif
                                <hr>
                                <a id="delete" href="{{route('admin.slider.destroy',$slider->id)}}" class="btn  btn-danger">DELETE</a>

                            </div>
                            <div class="col-lg-6">
                                <img src="{{ URL::to($slider->slider_image) }}" class="img-fluid" alt="slider-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection