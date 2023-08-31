@extends('admin.layouts.app')
@section('class', 'admin-content')
@section('content')
    <div class="title">Manage Cards</div>
    <a href="{{ url()->previous() }}" class="btn btn-primary mb-3">Back</a>
    <form action="{{ route('cards.create') }}" method="post" class="forms" enctype="multipart/form-data">
        @csrf
        <div class="row gy-3">
            <div class="col-md-6">
                <label for="name" class="form-label mb-0">Card Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label mb-0">Card Image</label>
                <input type="file" class="form-control" id="image" name="image" accept=".png, .svg" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="s_desc" class="form-label mb-0">Short Description</label>
                <input type="text" class="form-control" id="s_desc" name="s_desc" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="l_desc" class="form-label mb-0">Long Description</label>
                <input type="text" class="form-control" id="l_desc" name="l_desc" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="page_meta_data" class="form-label mb-0">Card Page Meta Data</label>
                <input type="text" class="form-control" id="page_meta_data" name="page_meta_data" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="link_tag" class="form-label mb-0">Card Link Tag</label>
                <input type="text" class="form-control" id="link_tag" name="link_tag" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-end">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </div>
    </form>
@endsection
