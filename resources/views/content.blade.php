@extends('layouts.app')
@section('class', 'content')
@section('content')
    <div class="container mt-5">
        <div class="row main-cnt">
            <div class="col-12 d-flex">
                <div class="img-wrap">
                    <img src="{{ asset('card_images/' . $card->image) }}" alt="">
                </div>
                <div class="ms-4">
                    <div class="title">
                        {{ $card->name }}
                    </div>
                    <div class="desc">
                        {{ $card->long_description }}
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
