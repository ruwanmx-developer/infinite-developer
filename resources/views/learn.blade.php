@extends('layouts.app')
@section('meta_description',
    'Learn Programming through an Incredibly Easy Step-by-Step Method from Scratch. Every step
    has been explained, allowing you to grasp concepts effortlessly and gain comprehensive knowledge.')
@section('page_title', 'Infinite Developer | Learn')
@section('class', 'learn')
@section('content')
    <div class="container x pt-5">
        <div class="row mb-5">
            @foreach ($cards as $card)
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3 col-xxl-3">
                    <div class="learn-card">
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                        <div class="title">{{ $card->name }}</div>
                        <div class="image-wrap">
                            <img src="{{ asset('card_images/' . $card->image) }}" alt="" />
                        </div>
                        <div class="description">
                            {{ $card->description }}
                        </div>
                        <div class="btn-barx">
                            <div>
                                <a class="btn btn-primary w-100" href="{{ $card->link_tag }}">
                                    <i class="bi bi-book-fill"></i>
                                    Learn Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
