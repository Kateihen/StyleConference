@component('mail::message')
Hello, {{ $visitor->name }}

You have successfully registered to visit Styles Conference!<br>
Number of passes you have bought: {{ $visitor->num_of_passes }}.<br>
The sum you'll need to pay: {{ $visitor->num_of_passes * 30}}&#36;.

@if($visitor->comments)
    We'll take into consideration your comment: {{ $visitor->comments }}
@endif

Style Conference will take place in August 24-26 in Chicago, Illinois.
All the information about the venue and schedule you can find in our Web site.

@component('mail::button', ['url' => '/'])
Visit our Web site.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
