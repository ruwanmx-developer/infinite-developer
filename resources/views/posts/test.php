&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

&lt;!-- CSRF Token --&gt;
&lt;meta name="csrf-token" content="{{ csrf_token() }}"&gt;

&lt;title&gt;{{ config('app.name', 'Laravel') }}&lt;/title&gt;

&lt;!-- Fonts --&gt;
&lt;link rel="dns-prefetch" href="//fonts.bunny.net"&gt;
&lt;link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"&gt;

&lt;!-- Scripts --&gt;
@vite('resources/js/app.js')
&lt;/head&gt;