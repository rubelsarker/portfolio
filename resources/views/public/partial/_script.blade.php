<script src="{{url('')}}/public/asset/public/js/jquery-3.2.1.min.js"></script>
<script src="{{url('')}}/public/asset/public/js/popper.js"></script>
<script src="{{url('')}}/public/asset/public/js/bootstrap.min.js"></script>
<script src="{{url('')}}/public/asset/public/js/stellar.js"></script>
<script src="{{url('')}}/public/asset/public/js/jquery.magnific-popup.min.js"></script>
<script src="{{url('')}}/public/asset/public/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="{{url('')}}/public/asset/public/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="{{url('')}}/public/asset/public/vendors/isotope/isotope-min.js"></script>
<script src="{{url('')}}/public/asset/public/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{url('')}}/public/asset/public/js/jquery.ajaxchimp.min.js"></script>
<script src="{{url('')}}/public/asset/public/js/mail-script.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{url('')}}/public/asset/public/js/gmaps.min.js"></script>
<script src="{{url('')}}/public/asset/public/js/theme.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>
<script>
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are you Want to delete?",
            text: "Once Delete, This will be Permanently Delete!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                } else {
                    swal("Safe Data!");
                }
            });
    });
</script>

<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{$error}}','Error',{
        closeButton:true,
        progressBar:true,
    });
    @endforeach
    @endif()
</script>
@yield('script')