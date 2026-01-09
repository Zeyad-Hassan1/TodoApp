@extends('layout.app')
@section('title', 'Add Task')

@section('content')
<div class="mx-auto" style="max-width: 600px;">
    <h2 class="text-center mb-4">📝 Add New Task</h2>

    <div class="card bg-secondary p-4 shadow-sm">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Add Task</button>
        </form>
    </div>
</div>
@endsection
