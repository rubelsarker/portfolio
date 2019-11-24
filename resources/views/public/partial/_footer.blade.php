@php
$contact = \App\Model\Contact::first();
@endphp
<footer class="footer_area section_gap">
    <div class="container">
        <div class="row footer_inner justify-content-center">
            <div class="col-lg-6 text-center">
                <aside class="f_widget social_widget">
                    <div class="f_logo">
                        <img src="{{URL::to($contact->logo)}}" alt="">
                    </div>
                    <div class="f_title">
                        <h4>Follow Me</h4>
                    </div>
                    <ul class="list">
                        <li><a target="_blank" href="{{$contact->facebook}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="{{$contact->github}}"><i class="fa fa-github"></i></a></li>
                        <li><a target="_blank" href="{{$contact->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="mailto::{{$contact->gmail}}"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </aside>
                <div class="copyright">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a href="{{$contact->copyright}}" target="_blank">RS</a>. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>