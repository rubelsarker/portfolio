@php
 $sliders = \App\Model\Slider::where('status',1)->get();
@endphp
<section class="banner-area owl-carousel" id="home">
    @foreach($sliders as $slider)
    <div class="single_slide_banner" style="background-image: url({{URL::to($slider->slider_image)}});">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center">
                <div class="banner-content col-lg-12 justify-content-center">
                    <h1>{{$slider->slider_title}}</h1>
                    <h3>{{$slider->slider_description}}</h3>
                    <a href="{{route('user.contact')}}" class="primary-btn">Hire Me</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>