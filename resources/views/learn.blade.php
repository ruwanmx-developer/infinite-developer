@extends('layouts.app')
@section('class', 'learn')
@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($cards as $card)
                <div class="col-12 col-lg-6 col-xxl-3">
                    <div class="learn-card">
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                        <div class="title">{{ $card->name }}</div>
                        <div class="image-wrap">
                            <img src="{{ asset('images/' . $card->image) }}" alt="" />
                        </div>
                        <div class="description">
                            {{ $card->short_description }}
                        </div>
                        <div class="btn-barx">
                            <div>
                                <a class="btn btn-primary w-100" href="{{ route($card->link_tag) }}">
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
