@extends('admin.layout')
@section('admin-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-left">Category Details</h4>
                        <a class="btn btn-primary float-right" href="{{route('admin.category.index')}}">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <h3>Name : {{ $category->category_name }}</h3>
                                <h4>Slug : {{ $category->category_slug }}</h4>
                                <p >Created At : {{ $category->created_at->toDateString() }}</p>
                                <p >Updated At : {{ $category->updated_at->toDateString() }}</p>
                                @if( $category->category_status == 1)
                                    <span class="badge badge-success ">Active</span>
                                @else
                                    <span class="badge badge-danger">Un Active</span>
                                @endif
                                <hr>
                                <a id="delete" href="{{route('admin.category.destroy',$category->id)}}" class="btn  btn-danger">DELETE</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection