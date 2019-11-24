<script src="{{url('')}}/public/asset/admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="{{url('')}}/public/asset/admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="{{url('')}}/public/asset/admin/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="{{url('')}}/public/asset/admin/assets/libs/js/main-js.js"></script>
<!-- chart chartist js -->
{{--<script src="{{url('')}}/public/asset/admin/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>--}}
<!-- sparkline js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{url('')}}/public/asset/admin/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
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

<!-- morris js -->
{{--<script src="{{url('')}}/public/asset/admin/assets/vendor/charts/morris-bundle/raphael.min.js"></script>--}}
{{--<script src="{{url('')}}/public/asset/admin/assets/vendor/charts/morris-bundle/morris.js"></script>--}}
{{--<!-- chart c3 js -->--}}
{{--<script src="{{url('')}}/public/asset/admin/assets/vendor/charts/c3charts/c3.min.js"></script>--}}
{{--<script src="{{url('')}}/public/asset/admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>--}}
{{--<script src="{{url('')}}/public/asset/admin/assets/vendor/charts/c3charts/C3chartjs.js"></script>--}}
{{--<script src="{{url('')}}/public/asset/admin/assets/libs/js/dashboard-ecommerce.js"></script>--}}
@yield('admin-script')