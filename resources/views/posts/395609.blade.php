@extends('layouts.app')
@section('meta_description', $post->page_meta_data)
@section('page_title', 'Infinite Developer | ' . $post->name)
@section('class', 'post')
@section('content')
    <div class="container mt-4">
        @include('partials.post_header')
        <div class="row mb-5">
            <div class="col-12 col-xxl-10 post-cnt">
                <h2 class="title-1">Create A Form To Upload Files</h2>
                <p class="desc">In your page create a form to upload a file. You have to remember when you uploading files
                    you need to add <span>enctype="multipart/form-data"</span> attribute to the form tag.</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;

&lt;body&gt;

    &lt;form action="upload.php" method="POST" enctype="multipart/form-data"&gt;
        Select image to upload:
        &lt;input type="file" name="upload_file"&gt;
        &lt;input type="submit" value="Upload File" &gt;
    &lt;/form&gt;

&lt;/body&gt;

&lt;/html&gt;</code></pre>
                </div>
                <h2 class="title-1">Create Upload.php File To Process File Uploading</h2>
                <p class="desc">Create a php file named <span>upload.php</span> and add this code. In this code we haven't
                    use any validation method to verify the uploaded file. In this file you get the request and process data
                    and upload the file to server.</p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-php">&lt;?php
// this is the path to upload in ther server
$target_dir = "uploads/";
// create the path with the file name
$target_file = $target_dir . basename($_FILES["upload_file"]["name"]);

// upload the file using move_uploaded_file function
if (move_uploaded_file($_FILES["upload_file"]["tmp_name"], $target_file)) {
    // file uploaded successfully
    echo "The file " . htmlspecialchars(basename($_FILES["upload_file"]["name"])) . " has been uploaded.";
} else {
    // file did not uploaded
    echo "Sorry, there was an error uploading your file.";
}</code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection
