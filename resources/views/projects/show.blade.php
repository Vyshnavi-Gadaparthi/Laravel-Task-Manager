@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>{{ $project->name }}</h2>
        <div>
            <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this project?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Delete</button>
            </form>
            <a href="{{ route('projects.index') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
    </div>

    <h4>Tasks</h4>
    @if($project->tasks->isEmpty())
        <div class="alert alert-info">No tasks yet.</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Priority</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($project->tasks as $task)
                <tr>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->priority }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', [$project, $task]) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('tasks.destroy', [$project, $task]) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this task?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>
    <h5>Add New Task</h5>
    <form method="POST" action="{{ route('tasks.store', $project) }}">
        @csrf
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Task name" required>
            </div>
            <div class="col">
                <input type="number" name="priority" class="form-control" placeholder="Priority (e.g. 1, 2, 3)" required min="0">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-success">Add Task</button>
            </div>
        </div>
        @error('name')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
        @error('priority')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </form>
@endsection