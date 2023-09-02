@extends('layouts.app')
@section('meta_description',
    'Learn Programming through an Incredibly Easy Step-by-Step Method from Scratch. Every step
    has been explained, allowing you to grasp concepts effortlessly and gain comprehensive knowledge.')
@section('page_title', 'Infinite Developer | Home')
@section('class', 'home')
@section('content')
    <div class="body-wrap">
        <div class='air air1'></div>
        <div class='air air2'></div>
        <div class='air air3'></div>
        <div class='air air4'></div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 d-lg-none d-flex justify-content-center">
                    <img class="head-img" src="{{ asset('images/figure_1.png') }}" alt="Image by vectorpouch on Freepik">
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center">
                    <div class="w-100">
                        <div class="title">
                            Your Path to Mastering Coding
                        </div>
                        <div class="desc">
                            Welcome to InfiniteDeveloper, your ultimate destination for learning coding from scratch to
                            mastery.
                            Whether
                            you're a complete beginner or looking to expand your programming skills, our comprehensive and
                            easy-to-follow tutorials will guide you through the world of coding.
                            Join our community of passionate
                            learners and embark on a journey to unlock the secrets of programming languages, web
                            development,
                            app
                            creation, and more. Start your coding adventure with InfiniteDeveloper today and turn your ideas
                            into
                            functional, elegant code.
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <a href="{{ route('learn') }}" class="btn btn-warning">Start Learning</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-none d-lg-block">
                    <img class="head-img" src="{{ asset('images/figure_1.png') }}" alt="Image by vectorpouch on Freepik">
                </div>
            </div>
        </div>
    </div>
@endsection


@section('styles')
    <style>
        .body-wrap {
            min-height: calc(100vh - 58px - 3rem);
            position: relative;
        }

        .air {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url(https://1.bp.blogspot.com/-xQUc-TovqDk/XdxogmMqIRI/AAAAAAAACvI/AizpnE509UMGBcTiLJ58BC6iViPYGYQfQCLcBGAsYHQ/s1600/wave.png);
            background-size: 1000px 100px;
        }

        .air.air1 {
            animation: wave 30s linear infinite;
            z-index: 1000;
            opacity: 1;
            animation-delay: 0s;
            bottom: 0;
        }

        .air.air2 {
            animation: wave2 15s linear infinite;
            z-index: 999;
            opacity: 0.5;
            animation-delay: -5s;
            bottom: 10px;
        }

        .air.air3 {
            animation: wave 30s linear infinite;
            z-index: 998;
            opacity: 0.2;
            animation-delay: -2s;
            bottom: 15px;
        }

        .air.air4 {
            animation: wave2 5s linear infinite;
            z-index: 997;
            opacity: 0.7;
            animation-delay: -5s;
            bottom: 20px;
        }

        @keyframes wave {
            0% {
                background-position-x: 0px;
            }

            100% {
                background-position-x: 1000px;
            }
        }

        @keyframes wave2 {
            0% {
                background-position-x: 0px;
            }

            100% {
                background-position-x: -1000px;
            }
        }
    </style>
@endsection
