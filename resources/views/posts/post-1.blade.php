@extends('layouts.app')
@section('class', 'post')
@section('content')
    <div class="container mt-4">
        @include('partials.post_header')
        <div class="row mb-5">
            <div class="col-10 post-cnt">
                <div class="title-1 mt-0">What is routing</div>
                <div class="desc">
                    In the Laravel framework, routing refers to the process of directing incoming HTTP requests to the
                    appropriate controller and action (method) to handle the request. Routing plays a crucial role in
                    defining how your application's URLs are structured and how the application responds to different
                    requests.
                </div>
                <div class="title-1">What is Laravel Routing?</div>
                <div class="desc">
                    Routing is the backbone of any web application. It's the process of matching incoming HTTP requests to
                    specific actions within your application. Laravel's routing system allows you to define how your
                    application responds to different URLs, making it incredibly flexible and organized.
                </div>
                <div class="title-1">Defining Routes</div>
                <div class="desc">
                    To start routing in Laravel, you'll define routes in the <span>routes/web.php</span> (for web routes) or
                    <span>routes/api.php</span> (for API routes) file. The syntax is intuitive and expressive:
                </div>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">use Illuminate\Support\Facades\Route;
Route::get('/welcome', 'HomeController@index');</code></pre>
                </div>
                <div class="desc">
                    In the above example, we're defining a <span>GET</span> route that matches the <span>/welcome</span>
                    URL. When this URL is accessed, it will invoke the <span>index</span> method of the
                    <span>HomeController</span>.
                </div>
                <div class="title-1">Route Parameters</div>
                <div class="desc">
                    Often, you need to work with dynamic values in URLs. Laravel makes this seamless with
                    route parameters:
                </div>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">Route::get('/user/{id}', 'UserController@show');</code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection
