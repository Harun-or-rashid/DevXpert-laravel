@component('mail::message')
<strong>Name:{{$data['name']}}</strong> <br>
    <strong>From:</strong>{{$data['email']}}

    <strong>Message</strong>
       {{$data['text']}}


    Thank You{{$data['name']}}
@endcomponent
