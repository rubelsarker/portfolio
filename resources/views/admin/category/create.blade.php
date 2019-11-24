@extends('admin.layout')
@section('admin-content')
    <div class="offset-lg-2 offset-md-2 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Add Slider</h5>
                <a class="float-right btn btn-primary" href="{{route('admin.category.index')}}">All Category</a>
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
                <form method="post" action="{{route('admin.category.store')}}" >
                    @csrf
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input id="category_name" type="text" name="category_name" required="" placeholder="Category Name" class="form-control">
                    </div>

                    <label class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" value="1" name="category_status"  class="custom-control-input"><span class="custom-control-label">Status</span>
                    </label>

                    <div class="row">
                        <div class="col-sm-6 offset-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button href="{{route('admin.category.index')}}" class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
