@extends('layouts.app')
@section('meta_description', $post->page_meta_data)
@section('page_title', 'Infinite Developer | ' . $post->name)
@section('class', 'post')
@section('content')
    <div class="container mt-4">
        @include('partials.post_header')
        <div class="row mb-5">
            <div class="col-12 col-xxl-10 post-cnt">
                <h2 class="title-1"></h2>
                <p class="desc"></p>
                <div class="code">
                    <pre class="line-numbers"><code class="language-batch"></code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection
