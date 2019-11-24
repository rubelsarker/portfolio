@extends('admin.layout')
@section('admin-content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-1 pt-1 float-left">All Skill</h3>
                <a href="{{route('admin.skill.create')}}" class="btn btn-primary float-right">Create Skill</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Label</th>
                        <th scope="col">Value</th>
                        <th scope="col">Status</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($skills as $key => $skill)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $skill->label }}</td>
                        <td>{{ $skill->value }}%</td>
                        <td>
                           @if( $skill->status == 1)
                                <span class="badge badge-success ">Active</span>
                           @else
                                <span class="badge badge-danger">Un Active</span>
                           @endif
                        </td>
                        <td class="text-center">
                            @if( $skill->status == 1)
                                <a href="{{route('admin.inactive.skill',$skill->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-thumbs-down"></i></a>
                            @else
                                <a href="{{route('admin.active.skill',$skill->id)}}" class="btn btn-sm btn-success"><i class="fas fa-thumbs-up"></i></a>
                            @endif
                            <a href="{{route('admin.skill.show',$skill->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                            <a href="{{route('admin.skill.edit',$skill->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a id="delete" href="{{route('admin.skill.destroy',$skill->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection