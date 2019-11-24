<!doctype html>
<html lang="en">
<head>
@include('admin.partial._head')
</head>
<body>
<div class="dashboard-main-wrapper">
    @include('admin.partial._navbar')
    @include('admin.partial._sidebar')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
{{--                @include('admin.partial._breadcrumb')--}}
                @yield('admin-content')
            </div>
        </div>
{{--        @include('admin.partial._footer')--}}
    </div>
</div>
@include('admin.partial._script')
</body>

</html>