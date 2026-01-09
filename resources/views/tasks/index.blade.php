@extends('layout.app')
@section('title', 'All Tasks')

@section('content')
<div class="container" style="max-width: 700px;">
    <h2 class="text-center mb-4">📋 All Tasks</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="text-end mb-3">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">➕ Add Task</a>
    </div>

    @if($tasks->count())
        <ul class="list-group">
            @foreach($tasks as $task)
                <li class="list-group-item bg-dark text-light d-flex justify-content-between align-items-center mb-2
                    {{ $task->completed ? 'bg-success text-white' : 'bg-dark text-light'}}">
                    <div>
                        <h5>{{ $task->title }}
                            @if ($task->completed)
                                <span class="text-success ms-2">&#9989;</span>
                            @endif
                        </h5>
                        <p class="mb-1">{{ $task->description }}</p>
                        <small class="text-muted">{{ $task->created_at->diffForHumans() }}</small>
                    </div>
                    <div class="d-flex gap-2">
                        @if (!$task->completed)
                            <form action="{{ route('tasks.complete', $task->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                            <button class="btn btn-sm btn-success">&#9989; Complete</button>
                            </form>
                        @else
                            <form action="{{ route('tasks.undo', $task->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                            <button class="btn btn-sm btn-secondary">&#8617; Undo</button>
                            </form>
                        @endif
    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">
        <i class="bi bi-pencil-square"></i> Edit
    </a>
    
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
            <i class="bi bi-trash"></i> Delete
        </button>
    </form>
</div>

                </li>
            @endforeach
        </ul>
    @else
        <h4 class="text-center text-muted">No tasks yet 😅</h4>
    @endif
</div>
@endsection
