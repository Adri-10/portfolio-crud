@extends('layouts.app')
@section('content')
    <h2>Edit Project</h2>
    <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $project->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Project URL</label>
            <input type="url" name="project_url" class="form-control" value="{{ $project->project_url }}">
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ asset('storage/' . $project->image) }}" width="100">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="draft" {{ $project->status == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ $project->status == 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
