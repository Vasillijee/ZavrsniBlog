@component('mail::message')

<strong>Name: </strong>{{$data['name']}}<br>
<strong>Email: </strong>{{$data['email']}}<br>
<strong>Phone: </strong> {{$data['phone']}} <br>
<strong>Message: </strong><br>{{$data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
