@extends('admin.layout')
@section('admin-content')
<div class="col-lg-8 offset-lg-2">
    <div class="card p-4">
        <div class="card-header">
            <h3 class="float-left">Contact Section</h3>
        </div>
        <form action="{{route('admin.contact.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row p-4">
                <div class="col-lg-5">
                    <div class="form-group">
                        <label >Logo</label><br>
                        <input class="form-control" type="file" name="logo"  accept="image/*"  onchange="readURL(this);">
                    </div>
                    <div class="form-group">
                        <label >FavIcon</label><br>
                        <input class="form-control" type="file" name="favicon"  accept="image/*"  onchange="readURL1(this);">
                    </div>
                    <div class="form-group">
                        <label >Facebook</label><br>
                        <input value="{{$contact->facebook}}" class="form-control" type="text" name="facebook" >
                    </div>
                    <div class="form-group">
                        <label >Github</label><br>
                        <input value="{{$contact->github}}" class="form-control" type="text" name="github" >
                    </div>
                    <div class="form-group">
                        <label >Linked In</label><br>
                        <input value="{{$contact->linkedin}}" class="form-control" type="text" name="linkedin" >
                    </div>
                    <div class="form-group">
                        <label >Email</label><br>
                        <input value="{{$contact->gmail}}" class="form-control" type="email" name="gmail" >
                    </div>
                    <div class="form-group">
                        <label >Copyright Link</label><br>
                        <input value="{{$contact->copyright}}" class="form-control" type="text" name="copyright" >
                    </div>
                    <div class="form-group">
                        <label >Phone</label><br>
                        <input value="{{$contact->phone}}" class="form-control" type="text" name="phone" >
                    </div>

                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label">Uploaded Logo</label><br>
                                <img id="logo" src="#" />
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Old Logo</label><br>
                                <img style="height: 200px; width: 200px;"  src="{{ URL::to($contact->logo) }}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label">Uploaded Favicon</label><br>
                                <img id="favicon" src="#" />
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Old Logo</label><br>
                                <img style="height: 30px; width: 30px;"  src="{{ URL::to($contact->favicon) }}" />
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div class="form-group">
                <label >Google Map</label><br>
                <textarea rows="5" placeholder="Google Map " class="form-control" name="google_map">{{$contact->google_map}}</textarea>
            </div>
            <div class="form-group">
                <label >Address</label><br>
                <textarea id="editor" rows="5"  class="form-control" name="address">{{$contact->address}}</textarea>
            </div>

            <input type="hidden" name="id" value="{{$contact->id}}">

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
                    $('#logo')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#favicon')
                        .attr('src', e.target.result)
                        .width(300)
                        .height(300);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
@endsection