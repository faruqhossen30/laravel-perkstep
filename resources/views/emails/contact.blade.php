<x-mail::message>
# Introduction

The body of your message.
<h3>First Name: {{$data['name']}}</h3>
<h3>Last Name : {{$data['email']}}</h3>
<h3>Email     : {{$data['phone']}}</h3>
<h3>Phone     : {{$data['company']}}</h3>
<h3>Message   : {{$data['message']}}</h3>
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
