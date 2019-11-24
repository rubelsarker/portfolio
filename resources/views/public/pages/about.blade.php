@extends('public.layout')
@section('stylesheet')
    <style>
        .progress-table .table-row .percentage .progress {
            width: 80%;
            border-radius: 0px;
            height: 5px;
            background: wheat;
        }
    </style>
@endsection
@section('content')
    <!--================ About Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-right">
                    <h1>About Us</h1>
                    <div class="page_link">
                        <a href="{{url('/')}}">Home</a>
                        <a href="{{route('user.about')}}">About</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End About Banner Area =================-->

    <!--================ Start About Area =================-->
    @php
        $about = \App\Model\About::first();
    @endphp
    <section class="about-area section_gap gray-bg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 about-left">
                    <img class="img-fluid" src="{{URL::to($about->about_image)}}" alt="">
                    <div class="main-title text-left mt-3">
                        <h1>about myself</h1>
                    </div>
                    <div class="mb-50 wow fadeIn" data-wow-duration=".8s">
                        <p>
                          {{$about->about_myself}}
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 about-right">
                    <div class="main-title text-left">
                        <h1>My Skills</h1>
                    </div>
                    <div class="mb-50 wow fadeIn" data-wow-duration=".8s">
                        <div class="progress-table-wrap">
                            <div class="progress-table" style="background-color: inherit">
                                @php
                                    $skills = \App\Model\Skill::where('status',1)->get();
                                @endphp
                                @foreach($skills as $skill)
                                    <div class="table-row border-0">
                                        <div class="visit">{{ $skill->label }}</div>
                                        <div class="percentage">
                                            <div class="progress">
                                                <div class="progress-bar color-4" role="progressbar" style="width: {{$skill->value}}%" aria-valuenow="{{$skill->value}}" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <a href="{{route('user.about')}}" class="primary-btn">More Info</a>
                    <a href="{{route('cv.download')}}" class="primary-btn">Download CV</a>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Area =================-->
    <!--================ Start Testimonial Area =================-->
    <div class="section_gap testimonial_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-left">
                    <div class="active_testimonial owl-carousel" data-slider-id="1">
                        <!-- single testimonial -->
                        <div class="single_testimonial">
                            <div class="testimonial_head">
                                <img src="{{url('')}}/public/asset/public/img/quote.png" alt="">
                                <h4>Fanny Spencer</h4>
                                <div class="review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial_content">
                                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
                                    it, you travel across her face</p>
                            </div>
                        </div>

                        <div class="single_testimonial">
                            <div class="testimonial_head">
                                <img src="{{url('')}}/public/asset/public/img/quote.png" alt="">
                                <h4>Fanny Spencer</h4>
                                <div class="review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial_content">
                                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
                                    it, you travel across her face</p>
                            </div>
                        </div>

                        <div class="single_testimonial">
                            <div class="testimonial_head">
                                <img src="{{url('')}}/public/asset/public/img/quote.png" alt="">
                                <h4>Fanny Spencer</h4>
                                <div class="review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial_content">
                                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
                                    it, you travel across her face</p>
                            </div>
                        </div>

                        <div class="single_testimonial">
                            <div class="testimonial_head">
                                <img src="{{url('')}}/public/asset/public/img/quote.png" alt="">
                                <h4>Fanny Spencer</h4>
                                <div class="review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial_content">
                                <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about
                                    it, you travel across her face</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="testimonial_logos">
                        <div class="top_logos">
                            <img src="{{url('')}}/public/asset/public/img/brands/logo1.png" alt="">
                            <img src="{{url('')}}/public/asset/public/img/brands/logo2.png" alt="">
                        </div>
                        <div class="mid_logo">
                            <img src="{{url('')}}/public/asset/public/img/brands/logo3.png" alt="">
                        </div>
                        <div class="bottom_logos jus">
                            <img src="{{url('')}}/public/asset/public/img/brands/logo4.png" alt="">
                            <img src="{{url('')}}/public/asset/public/img/brands/logo5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Testimonial Area =================-->

@endsection