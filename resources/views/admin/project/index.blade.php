@extends('admin.layout')
@section('admin-content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-1 pt-1 float-left">All Project</h3>
                <a href="{{route('admin.portfolio.create')}}" class="btn btn-primary float-right">Create Project</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $key => $project)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ Str::limit($project->title, 30, '...') }}</td>
                        <td>{{ $project->category->category_name }}</td>
                        <td><img src="{{URL::to($project->image)}}" alt="project-image" width="100" height="100"></td>
                        <td>
                           @if( $project->status == 1)
                                <span class="badge badge-success ">Active</span>
                           @else
                                <span class="badge badge-danger">Un Active</span>
                           @endif
                        </td>
                        <td class="text-center">
                            @if( $project->status == 1)
                                <a href="{{route('admin.inactive.portfolio',$project->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-thumbs-down"></i></a>
                            @else
                                <a href="{{route('admin.active.portfolio',$project->id)}}" class="btn btn-sm btn-success"><i class="fas fa-thumbs-up"></i></a>
                            @endif
                            <a href="{{route('admin.portfolio.show',$project->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                            <a href="{{route('admin.portfolio.edit',$project->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a id="delete" href="{{route('admin.portfolio.destroy',$project->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection