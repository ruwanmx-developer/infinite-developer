@extends('admin.layouts.app')
@section('class', 'admin-content')
@section('content')
    <div class="title">Manage Posts</div>
    <a href="{{ url()->previous() }}" class="btn btn-primary mb-3">Back</a>
    <form action="{{ route('posts.update') }}" method="post" class="forms" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $post->id }}">
        <div class="row gy-3">
            <div class="col-md-6">
                <label for="name" class="form-label mb-0">Post Title</label>
                <input value="{{ $post->name }}" type="text" class="form-control" id="name" name="name"
                    required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="card_id" class="form-label mb-0">Card Id</label>
                <select class="form-select" name="card_id" id="id">
                    @foreach ($cards as $card)
                        <option @selected($post->id == $card->id) value="{{ $card->id }}">{{ $card->name }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="view_id" class="form-label mb-0">View Id</label>
                <input value="{{ $post->view_id }}" type="text" class="form-control" id="view_id" name="view_id"
                    required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="page_meta_data" class="form-label mb-0">Post Page Meta Data</label>
                <input value="{{ $post->page_meta_data }}" type="text" class="form-control" id="page_meta_data"
                    name="page_meta_data" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="link_tag" class="form-label mb-0">Post Link Tag</label>
                <input value="{{ $post->link_tag }}" type="text" class="form-control" id="link_tag" name="link_tag"
                    required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-end">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </div>
    </form>
@endsection
