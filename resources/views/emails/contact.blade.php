@component('mail::message')

<h1>Form has been submitted</h1>
<p>{{ $name }}</p>
<p>{{ $website }}</p>
<p>{{ $number }}</p>
<p>{{ $email }}</p>
<p>{{ $letter }}</p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent