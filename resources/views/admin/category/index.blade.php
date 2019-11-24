@extends('admin.layout')
@section('admin-content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-1 pt-1 float-left">All Category</h3>
                <a href="{{route('admin.category.create')}}" class="btn btn-primary float-right">Create Category</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Status</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $key => $category)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->created_at->toDateString() }}</td>
                        <td>
                           @if( $category->category_status == 1)
                                <span class="badge badge-success ">Active</span>
                           @else
                                <span class="badge badge-danger">Un Active</span>
                           @endif
                        </td>
                        <td class="text-center">
                            @if( $category->category_status == 1)
                                <a href="{{route('admin.inactive.category',$category->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-thumbs-down"></i></a>
                            @else
                                <a href="{{route('admin.active.category',$category->id)}}" class="btn btn-sm btn-success"><i class="fas fa-thumbs-up"></i></a>
                            @endif
                            <a href="{{route('admin.category.show',$category->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                            <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a id="delete" href="{{route('admin.category.destroy',$category->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection