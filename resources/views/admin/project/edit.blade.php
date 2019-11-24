@extends('admin.layout')
@section('admin-content')
    <div class="offset-lg-2 offset-md-2 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Update Project</h5>
                <a class="float-right btn btn-primary" href="{{route('admin.portfolio.index')}}">All Project</a>
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
                <form method="post" action="{{route('admin.portfolio.update',$project->id)}}" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Project Title</label>
                        <input value="{{ $project->title }}" id="title" type="text" name="title" required="" placeholder="Project Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea  name="description" class="form-control" placeholder="Project Description..." rows="5">{{ $project->description}}</textarea>
                    </div>
                    <div class="card p-2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select name="category_id" class="form-control">
                                        <option readonly="">--Select--</option>
                                        @foreach($categories as $category)
                                            <option {{$project->category_id == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Project Completed</label>
                                    <input value="{{ $project->completed_date }}" type="date" name="completed_date" placeholder="Completed Date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Project Type</label>
                                    <input value="{{ $project->type }}" type="text" name="type" placeholder="Project Type" class="form-control">
                                </div>

                                <label class="custom-control custom-checkbox custom-control-inline">
                                    <input {{ $project->status == 1 ? 'checked' : ''}} type="checkbox" value="1" name="status"  class="custom-control-input"><span class="custom-control-label">Status</span>
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Rating</label>
                                    <input value="{{ $project->rating }}" type="number" name="rating" placeholder="Rating" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Website</label>
                                    <input value="{{ $project->website_link }}" type="text" name="website_link" placeholder="Website Link" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Project Image</label><br>
                                    <input type="file" name="image"  accept="image/*"   onchange="readURL(this);">
                                </div>
                                <div class="form-group">
                                    <img id="image" src="#" />
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Old Image</label><br>
                                    <img style="height: 200px; width: 200px;"  src="{{ URL::to($project->image) }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 offset-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button href="{{route('admin.portfolio.index')}}" class="btn btn-space btn-secondary">Cancel</button>
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
                        .width(300)
                        .height(200);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection