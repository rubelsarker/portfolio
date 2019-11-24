@component('mail::message')
<strong>Name:</strong>
{{$data['name']}}
<hr>
<strong>Email</strong>
{{$data['email']}}
<hr>
<strong>Subject</strong>
<h5>{{$data['subject']}}</h5>
<hr>
<strong>Message</strong>
<p>{{$data['message']}}</p>



Thanks,<br>
{{ config('app.name') }}
@endcomponent
