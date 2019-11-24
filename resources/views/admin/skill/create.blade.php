@extends('admin.layout')
@section('admin-content')
    <div class="offset-lg-2 offset-md-2 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Add Skill</h5>
                <a class="float-right btn btn-primary" href="{{route('admin.skill.index')}}">All Skill</a>
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
                <form method="post" action="{{route('admin.skill.store')}}" >
                    @csrf
                    <div class="form-group">
                        <label for="label">Label</label>
                        <input id="label" type="text" name="label" required="" placeholder="Label" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="skill_value">Value</label>
                        <input id="skill_value" type="number" name="value" required="" placeholder="Value" class="form-control">
                    </div>

                    <label class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" value="1" name="status"  class="custom-control-input"><span class="custom-control-label">Status</span>
                    </label>

                    <div class="row">
                        <div class="col-sm-6 offset-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button href="{{route('admin.skill.index')}}" class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
