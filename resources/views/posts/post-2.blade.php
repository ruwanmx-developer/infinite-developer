@extends('layouts.app')
@section('class', 'post')
@section('content')
    <div class="container mt-5">
        @include('partials.post_header')
        <div class="row  mb-5">
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
                <div class="desc">
                    Here, the <span>{id}</span> parameter captures any value in the URL and passes it to the
                    <span>show</span> method
                    of the <span>UserController</span>.
                </div>
                <div class="title-1">Named Routes</div>
                <div class="desc">Named routes make generating URLs a breeze and enhance code readability:</div>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">Route::get('/profile', 'ProfileController@show')->name('profile');</code></pre>
                </div>
                <div class="desc">With this named route, you can generate the URL anywhere in your app:</div>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">$url = route('profile'); // Returns the URL for the profile route</code></pre>
                </div>
                <div class="title-1">Route Groups</div>
                <div class="desc">Route groups allow you to apply middleware, prefixes, and namespaces to a set of routes.
                    For instance:</div>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', 'AdminController@dashboard');
        Route::get('/settings', 'AdminController@settings');
    })
});</code></pre>
                </div>
                <div class="desc">
                    In the above code, routes under the <span>/admin</span> prefix will use the
                    <span>auth</span> middleware.
                </div>
                <div class="title-1">Middleware</div>
                <div class="desc">
                    Laravel's middleware acts as filters before a route's action is executed. They're great for tasks like
                    authentication, authorization, and more. Applying middleware is simple:
                </div>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">Route::get('/profile', 'ProfileController@show')->middleware('auth');</code></pre>
                </div>
                <div class="desc">
                    Here, the <span>auth</span> middleware ensures only authenticated users can access the
                    <span>/profile</span> route.
                </div>
            </div>
        </div>
    </div>
@endsection
