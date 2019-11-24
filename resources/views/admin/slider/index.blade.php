@extends('admin.layout')
@section('admin-content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-1 pt-1 float-left">All Slider</h3>
                <a href="{{route('admin.slider.create')}}" class="btn btn-primary float-right">Create Slider</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $key => $slider)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ Str::limit($slider->slider_title, 20, '...') }}</td>
                        <td><img src="{{URL::to($slider->slider_image)}}" alt="slider-image" width="100" height="100"></td>
                        <td>
                           @if( $slider->status == 1)
                                <span class="badge badge-success ">Active</span>
                           @else
                                <span class="badge badge-danger">Un Active</span>
                           @endif
                        </td>
                        <td class="text-center">
                            @if( $slider->status == 1)
                                <a href="{{route('admin.inactive.slider',$slider->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-thumbs-down"></i></a>
                            @else
                                <a href="{{route('admin.active.slider',$slider->id)}}" class="btn btn-sm btn-success"><i class="fas fa-thumbs-up"></i></a>
                            @endif
                            <a href="{{route('admin.slider.show',$slider->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                            <a href="{{route('admin.slider.edit',$slider->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a id="delete" href="{{route('admin.slider.destroy',$slider->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection