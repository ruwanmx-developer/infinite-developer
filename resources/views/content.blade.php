@extends('layouts.app')
@section('meta_description', $card->description)
@section('page_title', 'Infinite Developer | ' . $card->name)
@section('class', 'content')
@section('content')
    <div class="container-fluid x">
        <div class="row p-3 py-md-5 px-md-5">
            <div class="col-12 col-md-4 side mb-3 mb-md-0">
                <img src="{{ asset('card_images/' . $card->image) }}" alt="">
                <div>
                    <div class="main-title">
                        {{ $card->name }}
                    </div>
                    <div class="description">
                        {{ $card->description }}
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="row">
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($posts as $post)
                        <div class="col-12 mb-3 px-0 px-md-3">
                            <a href="{{ $post->link_tag }}" class="link-tag">
                                <div class="content-card">
                                    <div class="sec c{{ $count++ }}"></div>
                                    <div>
                                        <div class="title">{{ $post->name }}</div>
                                        <div class="desc">{{ $post->description }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
