@extends('public.layout')
@section('content')

    <!--================ Start Contact Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-right">
                    <h1>Contact Me</h1>
                    <div class="page_link">
                        <a href="{{url('/')}}">Home</a>
                        <a href="{{route('user.contact')}}">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Contact Banner Area =================-->

    <!--================Contact Area =================-->
    @php
        $contact = \App\Model\Contact::first();
    @endphp
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            {!! $contact->address !!}
                        </div>
                        <div class="info_item mb-4">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="tel:{{$contact->phone}}">{{$contact->phone}}</a></h6>
                        </div>
                        <div class="info_item mb-4">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="mailto:{{$contact->gmail}}">{{$contact->gmail}}</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="{{route('contact.message')}}" method="post" id="contactForm"
                          novalidate="novalidate">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input value="{{old('name')}}" type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input value="{{old('email')}}" type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input value="{{old('subject')}}" type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message">{{old('message')}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="primary-btn"><span>Send Message</span></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-3">
                {!! $contact->google_map !!}
            </div>

        </div>
    </section>
    <!--================Contact Area =================-->
@endsection