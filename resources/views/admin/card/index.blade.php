@extends('admin.layouts.app')
@section('class', 'admin-content')
@section('content')
    <div class="title">Manage Cards</div>
    <a href="{{ route('cards.add') }}" class="btn btn-primary mb-3">Add New Card</a>
    <div class="table-wrap">
        <table class="table table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Link Tag</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cards as $card)
                    <tr>
                        <td>{{ $card->id }}</td>
                        <td>{{ $card->name }}</td>
                        <td>{{ $card->image }}</td>
                        <td>{{ $card->link_tag }}</td>
                        <td>
                            <a href="{{ route('cards.edit', ['id' => $card->id]) }}"
                                class="btn btn-warning px-2 py-0">Edit</a>
                            <a href="" class="btn btn-primary px-2 py-0">View</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>
@endsection
