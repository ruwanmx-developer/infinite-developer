@extends('layouts.app')
@section('meta_description', $post->page_meta_data)
@section('page_title', 'Infinite Developer | ' . $post->name)
@section('class', 'post')
@section('content')
    <div class="container mt-4">
        @include('partials.post_header')
        <div class="row mb-5">
            <div class="col-12 col-xxl-10 post-cnt">
                <h2 class="title-1">Introduction</h2>
                <p class="desc">You can use this <span>Session</span> function in php to handle <span>Authentication</span>
                    or <span>Save data temporarily</span>. It's like a simple storage. Session data last until the user
                    closes the browser. Session variables hold information about one single user, and are available to all
                    pages in one application.</p>
                <h2 class="title-1">Start a Session</h2>
                <p class="desc">Session variables are same as like global variables. You have to add this code to
                    <span>every
                        page beginning</span> that you gonna use <span>Session functions</span>
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">session_start();</code></pre>
                </div>
                <h2 class="title-1">Create Session Data</h2>
                <p class="desc">Now think, Your application wants to save user information temporarily such as <span>User
                        Name, Age, Address</span>. You can save them like this.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">&lt;?php
start_session();
$_SESSION['username'] = "John";
$_SESSION['age'] = 32;
$_SESSION['address'] = "5331 Rexford Court, Montgomery AL 36116";
?></code></pre>
                </div>
                <h2 class="title-1">Update Session Data</h2>
                <p class="desc">Now you can update these data just like a php variable.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">&lt;?php
start_session();

// update the session username
$_SESSION['username'] = "Smith";

// add 10 years to the age
$_SESSION['age'] = $_SESSION['age'] + 10;

?></code></pre>
                </div>
                <h2 class="title-1">Remove Session Data</h2>
                <p class="desc">If you want to remove <span>Session Data</span> you can use these codes to achieve that.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">&lt;?php
start_session();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

// if you want to remove a data from a single variable
unset($_SESSION["age"])
?></code></pre>
                </div>
                <h2 class="title-1">Use Session To Handle Authenication</h2>
                <p class="desc">Whenever user login to the site you can save the <span>user id</span> or a
                    <span>token</span> to save the logged user in the <span>Session</span>. Try this code to understand the
                    logic.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">&lt;?php
start_session();

// get form data from the POST method
$username = $_POST['username'];
$password = $_POST['password'];

// assume that you have a table containing user details named 'users'
// we can check if the user details correct
// $__conn is the database connection. If you don't know about that read the post given below after this code.
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $__conn-&gt;query($sql);

// check if the user details are correct
if(mysqli_num_rows($result) === 1){
    $data = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $data['id'];
    $_SESSION['user_name'] = $data['username'];
    $_SESSION['auth'] = true;
} else {
    // error invalid user information
}

?></code></pre>
                </div>
                <p class="desc">If you want to learn about <span>how to create database connection</span> <a
                        href="create-a-php-crud-application-step-by-step"><span>click here</span></a>.</p>
                <p class="desc">Now think you have a page named <span>dashboard.php</span> and you allow only logged users
                    to view that page. You can use the session variables you saved to achieve that. To use this effectively
                    you have to add this code to the <span>top</span> of you page.
                </p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">&lt;?php
start_session();

// check if the 'auth' variable exists in the session storage
if(array_key_exists('auth', $_SESSION)){
    // user is authenticated and if you wan the user id
    echo $_SESSION['user_id'];
} else {
    // user is not authenticated
    // redirect to login page or any page
    header('location:login.php');
}

?></code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection
