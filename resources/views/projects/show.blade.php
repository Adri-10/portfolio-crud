@extends('layouts.app')
@section('content')
    <h2>{{ $project->title }}</h2>
    <p><strong>Description:</strong> {{ $project->description }}</p>
    <p><strong>Project URL:</strong> <a href="{{ $project->project_url }}" target="_blank">{{ $project->project_url }}</a></p>
    <p><strong>Status:</strong> {{ $project->status }}</p>
    <img src="{{ asset('storage/' . $project->image) }}" width="300">
    <a href="{{ route('projects.index') }}" class="btn btn-secondary mt-3">Back</a>
@endsection
