@extends('layouts.app')
@section('meta_description', 'Infinite Developer | Search')
@section('page_title', 'Infinite Developer | Search')
@section('class', 'content search')
@section('content')
    <div class="container-fluid">
        <div class="row py-5 px-5">
            <div class="col-3 side">

                <div>
                    <div class="search-title">
                        Search Results For "<span>{{ $slug }}</span>"
                    </div>
                    <div class="description">
                        {{ $count }} results found
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
