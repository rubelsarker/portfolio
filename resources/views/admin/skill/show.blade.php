@extends('admin.layout')
@section('admin-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-left">Skill Details</h4>
                        <a class="btn btn-primary float-right" href="{{route('admin.skill.index')}}">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <h3>Label : {{ $skill->label }}</h3>
                                <h3>Value : {{ $skill->value }}</h3>
                                <p >Created At : {{ $skill->created_at->toDateString() }}</p>
                                <p >Updated At : {{ $skill->updated_at->toDateString() }}</p>
                                @if( $skill->status == 1)
                                    <span class="badge badge-success ">Active</span>
                                @else
                                    <span class="badge badge-danger">Un Active</span>
                                @endif
                                <hr>
                                <a id="delete" href="{{route('admin.skill.destroy',$skill->id)}}" class="btn  btn-danger">DELETE</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection