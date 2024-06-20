<x-mail::message>
# Introduction

this is new query:{{$name}}
<br/>
Message:
{{$message}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
