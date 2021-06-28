@component('mail::message')
# Olá!

Você recebeu um novo comentário.

@component('mail::button', ['url' => config('api.url_frontend')])
Clique Aqui e Confira
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
