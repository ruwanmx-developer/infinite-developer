@extends('layouts.app')
@section('class', 'home')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <div class="w-100">
                    <div class="title">
                        Your Path to Mastering Coding
                    </div>
                    <div class="desc">
                        Welcome to InfiniteDeveloper, your ultimate destination for learning coding from scratch to mastery.
                        Whether
                        you're a complete beginner or looking to expand your programming skills, our comprehensive and
                        easy-to-follow tutorials will guide you through the world of coding.
                        Join our community of passionate
                        learners and embark on a journey to unlock the secrets of programming languages, web development,
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
            <div class="col-6">
                <img class="head-img" src="{{ asset('images/figure_1.png') }}" alt="Image by vectorpouch on Freepik">
            </div>
        </div>
    </div>
@endsection
