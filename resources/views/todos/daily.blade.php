@extends('layout')

@section('content')
    <div class="container mt-4">
        <h1>Your Daily Tasks</h1>
        <form action="{{ route('todos.daily') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control me-4" placeholder="Search daily todos..."
                    value="{{ request('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit"><i
                            class="fa-brands fa-searchengin"></i></button>
                </div>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                    <tr>
                        <td>{{ $todo->title }}</td>
                        <td> <a href="{{ route('todos.show', $todo->id) }}"
                                class="text-decoration-none text-danger">{{ strlen($todo->description) > 50 ? substr($todo->description, 0, 50) . '...' : $todo->description }}
                            </a>
                        </td>
                        <td>{{ $todo->status }}</td>
                        <td>{{ $todo->due_date }}</td>
                        <td>
                            <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
