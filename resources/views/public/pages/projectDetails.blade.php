@extends('public.layout')
@section('content')

    <!--================ Start portfolio Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-right">
                    <h1>Portfolio Details</h1>
                    <div class="page_link">
                        <a href="{{url('/')}}">Home</a>
                        <a href="{{route('user.portfolio')}}">Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Portfolio Banner Area =================-->

    <!--================ Start Portfolio Details Area =================-->
    <section class="portfolio_details_area section_gap">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left_img">
                            <img class="img-fluid" src="{{URL::to($project->image)}}" alt="">
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <div class="portfolio_right_text mt-30">
                            <h4>{{$project->title}}</h4>
                            <p class="text-justify">{{Str::limit($project->description,200)}}</p>
                            <ul class="list">
                                <li><span>Rating</span>: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></li>
                                <li><span>Client</span>: {{$project->type}}</li>
                                <li><span>Website</span>: <a style="text-decoration: none; color: inherit" target="_blank" href="{{$project->website_link}}">{{$project->website_link}}</a></li>
                                <li><span>Completed</span>: {{$project->completed_date}}</li>
                            </ul>


                        </div>
                    </div>
                </div>
                <p>{!! $project->description !!}</p>
            </div>
        </div>
    </section>
    <!--================ Start Portfolio Details Area =================-->
@endsection