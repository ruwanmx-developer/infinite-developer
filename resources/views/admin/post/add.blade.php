@extends('admin.layouts.app')
@section('class', 'admin-content')
@section('content')
    <div class="title">Manage Posts</div>
    <a href="{{ url()->previous() }}" class="btn btn-primary mb-3">Back</a>
    <form action="{{ route('posts.create') }}" method="post" class="forms">
        @csrf
        <div class="row gy-3">
            <div class="col-md-6">
                <label id="l_name" for="name" class="form-label mb-0">Post Name</label>
                <input oninput="validate_field(this,'l_name','Post Name')" type="text" class="form-control"
                    id="name" name="name" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="card_id" class="form-label mb-0">Card Id</label>
                <select class="form-select" name="card_id" id="id">
                    @foreach ($cards as $card)
                        <option value="{{ $card->id }}">{{ $card->name }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label id="l_link_tag" for="link_tag" class="form-label mb-0">Post Link Tag</label>
                <input oninput="validate_field(this,'l_link_tag','Post Link Tag')" type="text" class="form-control"
                    id="link_tag" name="link_tag" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label id="l_description" for="description" class="form-label mb-0">Description</label>
                <input oninput="validate_field(this,'l_description','Description')" type="text" class="form-control"
                    id="description" name="description" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label id="l_titles" for="titles" class="form-label mb-0">Titles</label>
                <input type="text" class="form-control" id="titles" name="titles">
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label id="l_tags" for="tags" class="form-label mb-0">Tags</label>
                <input oninput="validate_field(this,'l_tags','Tags')" type="text" class="form-control" id="tags"
                    name="tags">
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="state" class="form-label mb-0">State</label>
                <select class="form-select" name="state" id="state" required>
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>
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
