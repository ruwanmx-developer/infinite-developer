@extends('layouts.app')
@section('meta_description', $post->description)
@section('page_title', 'Infinite Developer | ' . $post->name)
@section('class', 'post')
@section('content')
    <div class="container mt-4">
        @include('partials.post_header')
        <div class="row mb-5">
            <div class="col-12 col-xxl-10 post-cnt">
                <h2 class="title-1">Create a HTML form</h2>
                <p class="desc">Create a form with input elements to get user input. In this given example there are common
                    elements that we use frequently.</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Contact Form&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;Contact Form&lt;/h2&gt;
    &lt;form action="submit_form.php" method="post"&gt;
        &lt;label for="full_name"&gt;Full Name:&lt;/label&gt;
        &lt;input type="text" id="full_name" name="full_name" required&gt;&lt;br&gt;&lt;br&gt;

        &lt;label for="email"&gt;Email Address:&lt;/label&gt;
        &lt;input type="email" id="email" name="email" required&gt;&lt;br&gt;&lt;br&gt;

        &lt;label&gt;Subjects:&lt;/label&gt;&lt;br&gt;
        &lt;input type="checkbox" id="maths" name="subjects[]" value="Maths"&gt;
        &lt;label for="maths"&gt;Maths&lt;/label&gt;&lt;br&gt;
        &lt;input type="checkbox" id="science" name="subjects[]" value="Science"&gt;
        &lt;label for="science"&gt;Science&lt;/label&gt;&lt;br&gt;
        &lt;input type="checkbox" id="music" name="subjects[]" value="Music"&gt;
        &lt;label for="music"&gt;Music&lt;/label&gt;&lt;br&gt;
        &lt;input type="checkbox" id="english" name="subjects[]" value="English"&gt;
        &lt;label for="english"&gt;English&lt;/label&gt;&lt;br&gt;
        &lt;input type="checkbox" id="geography" name="subjects[]" value="Geography"&gt;
        &lt;label for="geography"&gt;Geography&lt;/label&gt;&lt;br&gt;&lt;br&gt;

        &lt;label&gt;Medium:&lt;/label&gt;&lt;br&gt;
        &lt;input type="radio" id="sinhala" name="medium" value="Sinhala"&gt;
        &lt;label for="sinhala"&gt;Sinhala&lt;/label&gt;&lt;br&gt;
        &lt;input type="radio" id="english_medium" name="medium" value="English"&gt;
        &lt;label for="english_medium"&gt;English&lt;/label&gt;&lt;br&gt;
        &lt;input type="radio" id="tamil" name="medium" value="Tamil"&gt;
        &lt;label for="tamil"&gt;Tamil&lt;/label&gt;&lt;br&gt;&lt;br&gt;

        &lt;label for="mobile_number"&gt;Mobile Number:&lt;/label&gt;
        &lt;input type="tel" id="mobile_number" name="mobile_number" required&gt;&lt;br&gt;&lt;br&gt;

        &lt;label for="description"&gt;Description:&lt;/label&gt;&lt;br&gt;
        &lt;textarea id="description" name="description" rows="4" cols="50"&gt;&lt;/textarea&gt;&lt;br&gt;&lt;br&gt;

        &lt;input type="submit" value="Submit"&gt;
    &lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection
