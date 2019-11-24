@extends('admin.layout')
@section('admin-content')
<div class="col-lg-8 offset-lg-2">
    <div class="card p-4">
        <div class="card-header">
            <h3 class="float-left">About Section</h3>
        </div>
        <form action="{{route('admin.about.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row p-4">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label >About Section Image</label><br>
                        <input class="form-control" type="file" name="about_image"  accept="image/*"  onchange="readURL(this);">
                    </div>
                    <div class="form-group">
                        <label >Upload Cv</label><br>
                        <input class="form-control" type="file" name="cv">
                        <br>
                        <span class="mt-2">Old Cv : {{$about->cv}}</span>
                    </div>

                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label">Uploaded Image</label><br>
                                <img id="image" src="#" />
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Old Image</label><br>
                                <img style="height: 200px; width: 200px;"  src="{{ URL::to($about->about_image) }}" />
                            </div>
                        </div>

                    </div>

                </div>


            </div>
            <div class="row p-4">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label >About Myself</label><br>
                        <textarea name="about_myself" placeholder="About Myself..." class="form-control" rows="5">{{$about->about_myself}}</textarea>
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="{{$about->id}}">

            <button type="submit" class="btn btn-success float-right">Update</button>

        </form>

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
                        .height(300);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
@endsection