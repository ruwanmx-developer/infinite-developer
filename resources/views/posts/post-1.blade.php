@extends('layouts.app')
@section('class', 'post')
@section('content')
    <div class="container mt-5">
        @include('partials.post_header')
        <div class="row  mb-5">
            <div class="col-10 post-cnt">
                <div class="title-1">Step 1 : Download Laravel 9 Application</div>
                <div class="desc">
                    Open <span>Command Prompt</span> and paste this code to create a laravel 9 application. Change the
                    <span>app-name</span> to your application name without using space.
                </div>
                <div class="code">
                    <pre class="line-numbers"><code class="language-batch">composer create-project --prefer-dist laravel/laravel:^9.0 app-name</code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection
