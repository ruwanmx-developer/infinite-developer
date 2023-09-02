@extends('layouts.guest')
@section('content')
    <div class="wrap">

        <div class="code ">4<span>0</span>4</div>
        <div class="desc mb-3">THE PAGE YOU ARE REQUESTED COULD NOT FOUND</div>
        <div>
            <a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>
        </div>
    </div>
@endsection
@section('styles')
    <style>
        body {
            min-height: 100vh;
            background-image: radial-gradient(#e9e9e9 0.5px, #37475c 0.5px);
            background-size: 10px 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wrap {
            background: #08080844;
            text-align: center;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px -2px #000;
        }

        .code {
            font-size: 100px;
            font-weight: 700;
            color: #fff;
        }

        .code span {
            color: #19a3ff
        }

        .desc {
            font-size: 25px;
            font-weight: 600;
            color: #fff;
        }
    </style>
@endsection
