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
                <label id="l_name" for="name" class="form-label mb-0">Post Title</label>
                <input oninput="validate_field(this,'l_name','Post Title')" value="{{ $post->name }}" type="text"
                    class="form-control" id="name" name="name" required>
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
                <label id="l_page_meta_data" for="page_meta_data" class="form-label mb-0">Post Page Meta Data</label>
                <input oninput="validate_field(this,'l_page_meta_data','Post Page Meta Data')"
                    value="{{ $post->page_meta_data }}" type="text" class="form-control" id="page_meta_data"
                    name="page_meta_data" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label id="l_link_tag" for="link_tag" class="form-label mb-0">Post Link Tag</label>
                <input oninput="validate_field(this,'l_link_tag','Post Link Tag')" value="{{ $post->link_tag }}"
                    type="text" class="form-control" id="link_tag" name="link_tag" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label id="l_description" for="description" class="form-label mb-0">Description</label>
                <input oninput="validate_field(this,'l_description','Description')" value="{{ $post->description }}"
                    type="text" class="form-control" id="description" name="description" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-end">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </div>
    </form>
    <script>
        function validate_field(data, label_id, label) {
            document.getElementById(label_id).innerHTML = label + " \(" + data.value.length + "\)";
        }
    </script>
@endsection
