@extends('layout.app')
@section('title', 'Edit Task')

@section('content')
<div class="mx-auto" style="max-width: 600px;">
    <h2 class="text-center mb-4">✏️ Edit Task</h2>

    <div class="card bg-secondary p-4 shadow-sm">
        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ $task->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-success w-100">Update Task</button>
        </form>
    </div>
</div>
@endsection
