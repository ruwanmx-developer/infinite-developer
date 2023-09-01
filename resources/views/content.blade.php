@extends('layouts.app')
@section('class', 'content')
@section('content')
    <div class="container-fluid">
        <div class="row py-5 px-5">
            <div class="col-3 side">
                <img src="{{ asset('card_images/' . $card->image) }}" alt="">
                <div>
                    <div class="main-title">
                        {{ $card->name }}
                    </div>
                    <div class="description">
                        {{ $card->long_description }}
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-12 mb-3">
                            <a href="{{ $post->link_tag }}" class="link-tag">
                                <div class="content-card">
                                    <div class="sec c1"></div>
                                    <div>
                                        <div class="title">{{ $post->name }}</div>
                                        <div class="desc">{{ $post->description }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 mb-3">
                            <a href="{{ $post->link_tag }}" class="link-tag">
                                <div class="content-card">
                                    <div class="sec c2"></div>
                                    <div>
                                        <div class="title">{{ $post->name }}</div>
                                        <div class="desc">{{ $post->description }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 mb-3">
                            <a href="{{ $post->link_tag }}" class="link-tag">
                                <div class="content-card">
                                    <div class="sec c3"></div>
                                    <div>
                                        <div class="title">{{ $post->name }}</div>
                                        <div class="desc">{{ $post->description }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 mb-3">
                            <a href="{{ $post->link_tag }}" class="link-tag">
                                <div class="content-card">
                                    <div class="sec c4"></div>
                                    <div>
                                        <div class="title">{{ $post->name }}</div>
                                        <div class="desc">{{ $post->description }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 mb-3">
                            <a href="{{ $post->link_tag }}" class="link-tag">
                                <div class="content-card">
                                    <div class="sec c5"></div>
                                    <div>
                                        <div class="title">{{ $post->name }}</div>
                                        <div class="desc">{{ $post->description }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 mb-3">
                            <a href="{{ $post->link_tag }}" class="link-tag">
                                <div class="content-card">
                                    <div class="sec c6"></div>
                                    <div>
                                        <div class="title">{{ $post->name }}</div>
                                        <div class="desc">{{ $post->description }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 mb-3">
                            <a href="{{ $post->link_tag }}" class="link-tag">
                                <div class="content-card">
                                    <div class="sec c7"></div>
                                    <div>
                                        <div class="title">{{ $post->name }}</div>
                                        <div class="desc">{{ $post->description }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 mb-3">
                            <a href="{{ $post->link_tag }}" class="link-tag">
                                <div class="content-card">
                                    <div class="sec c8"></div>
                                    <div>
                                        <div class="title">{{ $post->name }}</div>
                                        <div class="desc">{{ $post->description }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 mb-3">
                            <a href="{{ $post->link_tag }}" class="link-tag">
                                <div class="content-card">
                                    <div class="sec c9"></div>
                                    <div>
                                        <div class="title">{{ $post->name }}</div>
                                        <div class="desc">{{ $post->description }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 mb-3">
                            <a href="{{ $post->link_tag }}" class="link-tag">
                                <div class="content-card">
                                    <div class="sec c10"></div>
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
