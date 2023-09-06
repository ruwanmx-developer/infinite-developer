@extends('admin.layouts.app')
@section('class', 'admin-content')
@section('content')
    <div class="title">Manage Cards</div>
    <a href="{{ url()->previous() }}" class="btn btn-primary mb-3">Back</a>
    <form action="{{ route('cards.update') }}" method="post" class="forms" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $card->id }}">
        <div class="row gy-3">
            <div class="col-md-6">
                <label id="l_name" for="name" class="form-label mb-0">Card Name</label>
                <input oninput="validate_field(this,'l_name','Card Name')" value="{{ $card->name }}" type="text"
                    class="form-control" id="name" name="name" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label mb-0">Card Image</label>
                <input type="file" class="form-control" id="image" name="image" accept=".png, .svg">
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label id="l_desc" for="description" class="form-label mb-0">Description</label>
                <input oninput="validate_field(this,'l_desc','Description')" value="{{ $card->description }}" type="text"
                    class="form-control" id="description" name="description" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label id="l_link_tag" for="link_tag" class="form-label mb-0">Card Link Tag</label>
                <input oninput="validate_field(this,'l_link_tag','Card Link Tag')" value="{{ $card->link_tag }}"
                    type="text" class="form-control" id="link_tag" name="link_tag" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="state" class="form-label mb-0">State</label>
                <select class="form-select" name="state" id="state" required>
                    <option @selected($card->state == '0') value="0">Inactive</option>
                    <option @selected($card->state == '1') value="1">Active</option>
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
