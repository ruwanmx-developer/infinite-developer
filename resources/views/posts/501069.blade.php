@extends('layouts.app')
@section('meta_description', $post->page_meta_data)
@section('page_title', 'Infinite Developer | ' . $post->name)
@section('class', 'post')
@section('content')
    <div class="container mt-4">
        @include('partials.post_header')
        <div class="row mb-5">
            <div class="col-12 col-xxl-10 post-cnt">
                <h2 class="title-1">Create Laravel 9 Application</h2>
                <p class="desc">Open your <span>Command Line Tool</span> and paste the code to create a new <span>Laravel 9
                        Application</span>. You can change the <span>app-name</span> to any name as your wish.</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-batch">composer create-project --prefer-dist laravel/laravel:^9.0 app-name</code></pre>
                </div>
                <h2 class="title-1">Add Bootstrap To The Application</h2>
                <p class="desc">Run this command to add <span>Laravel UI</span> package to the application</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-batch">composer require laravel/ui</code></pre>
                </div>
                <p class="desc">If you want to install <span>only bootstrap</span> run this code</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-batch">php artisan ui bootstrap</code></pre>
                </div>
                <p class="desc">If you want to install <span>bootstrap with Auth Scaffolding</span> run this code</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-batch">php artisan ui bootstrap --auth</code></pre>
                </div>
                <p class="desc">Run this code to install npm packages</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-batch">npm install</code></pre>
                </div>
                <h2 class="title-1">Add Vite Package To Application</h2>
                <p class="desc">Run this command to add <span>Vite</span> package to the application</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-batch">npm install --save-dev vite laravel-vite-plugin</code></pre>
                </div>
                <p class="desc">Then update your <span>package.json</span> file as the below code.</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-js">"scripts": {
    // add or replace these 2 scripts to the package.json file
    "dev": "vite",
    "build": "vite build"
}</code></pre>
                </div>
                <p class="desc">Now open <span>vite.config.js</span> file and paste this code into it.</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-js">import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel([
            'resources/js/app.js',
        ]),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});</code></pre>
                </div>
                <p class="desc">Now open <span>bootstrap.js</span> file in the <span>resources/js/bootstrap.js</span> and
                    paste this code into it.</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-js">import loadash from 'lodash'
window._ = loadash

import * as Popper from '@popperjs/core'
window.Popper = Popper

import 'bootstrap'

/**
    * We'll load the axios HTTP library which allows us to easily issue requests
    * to our Laravel back-end. This library automatically handles sending the
    * CSRF token as a header based on the value of the "XSRF" token cookie.
    */

import axios from 'axios'
window.axios = axios

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
    * Echo exposes an expressive API for subscribing to channels and listening
    * for events that are broadcast by Laravel. Echo and event broadcasting
    * allows your team to easily build robust real-time web applications.
    */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });</code></pre>
                </div>
                <p class="desc">Then import the Bootstrap SCSS in Js folder. Open <span>app.js</span> and paste this code
                    into it.</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-js">import './bootstrap';
import '../sass/app.scss'</code></pre>
                </div>
                <p class="desc">Now add <span>&#64;vite Blade Directive</span> to your layout. Paste this code into your
                    <span>&lt;head&gt;</span>
                </p> section.
                <div class="code">
                    <pre class="line-numbers"><code class="language-html">&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="&#123;&#123; csrf_token() &#125;&#125;"&gt;

    &lt;title&gt;&#123;&#123; config('app.name', 'Laravel') &#125;&#125;&lt;/title&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.bunny.net"&gt;
    &lt;link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- &#64;vite Blade Directive --&gt;
    &#64;vite('resources/js/app.js')
&lt;/head&gt;</code></pre>
                </div>
                <p class="desc">Now you can run your application without any error using this code.</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-batch">php artisan serve</code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection
