@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Projects</h2>
        <a href="{{ route('projects.create') }}" class="btn btn-primary">New Project</a>
    </div>
    @if($projects->isEmpty())
        <div class="alert alert-info">No projects found.</div>
    @else
        <div class="list-group">
            @foreach($projects as $project)
                <a href="{{ route('projects.show', $project) }}" class="list-group-item list-group-item-action">
                    {{ $project->name }}
                    <span class="badge bg-secondary float-end">{{ $project->tasks->count() }} Tasks</span>
                </a>
            @endforeach
        </div>
    @endif
@endsection