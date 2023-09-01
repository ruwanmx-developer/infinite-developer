@extends('admin.layouts.app')
@section('class', 'admin-content')
@section('content')
    <div class="title">Manage Posts</div>
    <a href="{{ route('posts.add') }}" class="btn btn-primary mb-3">Add New Post</a>
    <div class="table-wrap">
        <table class="table table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Card Id</th>
                    <th scope="col">View Id</th>
                    <th scope="col">Page Meta Data</th>
                    <th scope="col">Link Tag</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->card_id }}</td>
                        <td>{{ $post->view_id }}</td>
                        <td>{{ $post->page_meta_data }}</td>
                        <td>{{ $post->link_tag }}</td>
                        <td>
                            <a href="{{ route('posts.edit', ['id' => $post->id]) }}"
                                class="btn btn-warning px-2 py-0">Edit</a>
                            <a href="" class="btn btn-primary px-2 py-0">View</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>
@endsection
