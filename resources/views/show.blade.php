@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>{{ $project->title }}</h1>
        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="img-fluid">
        <p>{{ $project->description }}</p>
        @if($project->link)
            <a href="{{ $project->link }}" class="btn btn-primary" target="_blank">Visit Project</a>
        @endif
        <a href="{{ url('/') }}" class="btn btn-secondary">Back to Portfolio</a>
    </div>
@endsection
