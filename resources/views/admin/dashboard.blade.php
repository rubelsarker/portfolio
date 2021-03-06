@extends('admin.layout')
@section('admin-content')
    <div class="ecommerce-widget">

        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Total Revenue</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">$12099</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Affiliate Revenue</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">$12099</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue2"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Refunds</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">0.00</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                            <span>N/A</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue3"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Avg. Revenue Per User</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">$28000</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                            <span>-2.00%</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue4"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                <!-- ============================================================== -->
                <!-- social source  -->
                <!-- ============================================================== -->
                <div class="card">
                    <h5 class="card-header"> Sales By Social Source</h5>
                    <div class="card-body p-0">
                        <ul class="social-sales list-group list-group-flush">
                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle facebook-bgcolor mr-2"><i class="fab fa-facebook-f"></i></span><span class="social-sales-name">Facebook</span><span class="social-sales-count text-dark">120 Sales</span>
                            </li>
                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle twitter-bgcolor mr-2"><i class="fab fa-twitter"></i></span><span class="social-sales-name">Twitter</span><span class="social-sales-count text-dark">99 Sales</span>
                            </li>
                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle instagram-bgcolor mr-2"><i class="fab fa-instagram"></i></span><span class="social-sales-name">Instagram</span><span class="social-sales-count text-dark">76 Sales</span>
                            </li>
                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle pinterest-bgcolor mr-2"><i class="fab fa-pinterest-p"></i></span><span class="social-sales-name">Pinterest</span><span class="social-sales-count text-dark">56 Sales</span>
                            </li>
                            <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle googleplus-bgcolor mr-2"><i class="fab fa-google-plus-g"></i></span><span class="social-sales-name">Google Plus</span><span class="social-sales-count text-dark">36 Sales</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn-primary-link">View Details</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end social source  -->
                <!-- ============================================================== -->
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <!-- ============================================================== -->
                <!-- sales traffice source  -->
                <!-- ============================================================== -->
                <div class="card">
                    <h5 class="card-header"> Sales By Traffic Source</h5>
                    <div class="card-body p-0">
                        <ul class="traffic-sales list-group list-group-flush">
                            <li class="traffic-sales-content list-group-item "><span class="traffic-sales-name">Direct</span><span class="traffic-sales-amount">$4000.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                            </li>
                            <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Search<span class="traffic-sales-amount">$3123.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                                </span>
                            </li>
                            <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Social<span class="traffic-sales-amount ">$3099.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
                                                </span>
                            </li>
                            <li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Referrals<span class="traffic-sales-amount ">$2220.00   <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1 text-danger">4.02%</span></span>
                                                </span>
                            </li>
                            <li class="traffic-sales-content list-group-item "><span class="traffic-sales-name">Email<span class="traffic-sales-amount">$1567.00   <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1 text-danger">3.86%</span></span>
                                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn-primary-link">View Details</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end sales traffice source  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- sales traffic country source  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Sales By Country Traffic Source</h5>
                    <div class="card-body p-0">
                        <ul class="country-sales list-group list-group-flush">
                            <li class="country-sales-content list-group-item"><span class="mr-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> </span>
                                <span class="">United States</span><span class="float-right text-dark">78%</span>
                            </li>
                            <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i></span><span class="">Canada</span><span class="float-right text-dark">7%</span>
                            </li>
                            <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i></span><span class="">Russia</span><span class="float-right text-dark">4%</span>
                            </li>
                            <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-in" title="in" id="in"></i></span><span class="">India</span><span class="float-right text-dark">12%</span>
                            </li>
                            <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i></span><span class="">France</span><span class="float-right text-dark">16%</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn-primary-link">View Details</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end sales traffice country source  -->
            <!-- ============================================================== -->
        </div>
    </div>
@endsection