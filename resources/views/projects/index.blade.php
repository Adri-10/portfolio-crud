@extends('layouts.app')

@section('content')
    <h2>Projects</h2>
    <a href="{{ route('projects.create') }}" class="btn btn-success mb-2">Add New</a>
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->status }}</td>
                <td><img src="{{ asset('storage/' . $project->image) }}" width="100"></td>
                <td>
                    <a href="{{ route('projects.show', $project) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection


