@extends('public.layout')
@section('content')
    <!--================ Start portfolio Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-right">
                    <h1>My Portfolio</h1>
                    <div class="page_link">
                        <a href="{{url('/')}}">Home</a>
                        <a href="{{route('user.portfolio')}}">Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Portfolio Banner Area =================-->

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
@endsection