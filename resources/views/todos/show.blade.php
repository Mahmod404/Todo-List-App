@extends('layout')

@section('content')
<div class="container">
    <h1>Todo Details</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $todo->title }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $todo->description }}</p>
            <p><strong>Status:</strong> {{ ucfirst($todo->status) }}</p>
            <p><strong>Due Date:</strong> {{ $todo->due_date }}</p>
            <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
            <a href="{{ route('todos.index') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i></a>
        </div>
    </div>
</div>
@endsection
