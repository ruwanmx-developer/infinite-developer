@extends('layouts.app')
@section('class', 'content')
@section('content')
    <div class="container mt-5">
        <div class="row main-cnt">
            <div class="col-12 d-flex align-items-center">
                <div class="img-wrap">
                    <img src="{{ asset('images/laravel.svg') }}" alt="">
                </div>
                <div class="ms-4">
                    <div class="title">
                        Laravel Framework
                    </div>
                    <div class="desc">
                        Laravel, a modern and widely acclaimed PHP framework, is your gateway to crafting sophisticated web
                        applications with ease. At our CodeCrafters blog, we unravel the intricacies of Laravel, offering
                        step-by-step tutorials, insightful tips, and real-world examples. From setting up your development
                        environment to creating robust backends, interactive frontends, and seamless databases, our Laravel
                        guides empower you to build dynamic and scalable web solutions. Join us in mastering this elegant
                        framework and elevate your web development prowess with Laravel.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="page">
                    @foreach ($posts as $post)
                        <div>
                            <a href="{{ $post->link_tag }}">
                                {{ $post->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
