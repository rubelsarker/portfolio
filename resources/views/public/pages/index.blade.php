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
    @include('public.partial._banner')
    <!--================ Start Portfolio Area =================-->
    <section class="section_gap portfolio_area" id="work">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="main-title">
                        <h1>Latest Works</h1>
                    </div>
                </div>
            </div>
            @php
            $categories = \App\Model\Category::where('category_status',1)->get();
            @endphp
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="projects_fillter">
                        <ul class="filter list">
                            <li class="active" data-filter="*">All Categories</li>
                            @foreach($categories as $category)
                            <li data-filter=".{{$category->category_slug}}">{{$category->category_name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @php
            $projects = \App\Model\Project::where('status',1)->get();
            @endphp
            <div class="projects_inner row grid">
                <div class="grid-sizer col-sm-6 col-md-3 col-lg-3"></div>
                @foreach($projects as $project)
                <div class="col-lg-6 col-sm-6 col-sm-12 {{$project->category->category_slug}} web grid-item">
                    <div class="projects_item">
                        <img class="img-fluid w-100" src="{{URL::to($project->image)}}" alt="">
                        <div class="projects_text">
                            <a href="{{url('projectdetails/'.base64_encode($project->id))}}">
                                <h4>{{ Str::limit($project->title, 30, '...')}}</h4>
                            </a>
                            <p>Personal Project</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================ End Portfolio Area =================-->

    <!--================ Start About Area =================-->
    @php
    $about = \App\Model\About::first();
    @endphp
    <section class="about-area section_gap gray-bg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 about-left">
                    <img class="img-fluid" src="{{URL::to($about->about_image)}}" alt="">
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

    <!--================ Start Newsletter Area =================-->
    <section class="section_gap newsletter-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="main-title">
                        <h1>Join Our Newsletter</h1>
                    </div>
                </div>
            </div>
            <div class="row newsletter_form justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="d-flex flex-row">
                        <form class="w-100" novalidate="true" action="{{route('user.subscribe')}}" method="post">
                            @csrf
                            <div class="navbar-form">
                                <div class="input-group add-on">
                                    <input class="form-control" name="email" placeholder="Your email address" onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Your email address'" required="" type="email">
                                    <div class="input-group-btn">
                                        <button type="submit" class="genric-btn text-uppercase">
                                            Subscribe
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="info mt-20"></div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Newsletter Area =================-->
@endsection