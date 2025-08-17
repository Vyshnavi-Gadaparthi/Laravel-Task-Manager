@extends('layouts.app')

@section('content')
    <h2>Edit Task for "{{ $project->name }}"</h2>
    <form method="POST" action="{{ route('tasks.update', [$project, $task]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Task Name</label>
            <input type="text" name="name" class="form-control" id="name" required value="{{ old('name', $task->name) }}">
            @error('name')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="priority" class="form-label">Priority</label>
            <input type="number" name="priority" class="form-control" id="priority" required min="0" value="{{ old('priority', $task->priority) }}">
            @error('priority')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
        <a href="{{ route('projects.show', $project) }}" class="btn btn-secondary">Back</a>
    </form>
@endsection