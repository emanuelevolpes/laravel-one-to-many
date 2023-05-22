@extends('layouts.app')

@section('content')
    <div class="container text-center p-3">
        <h1>{{ $project->title }}</h1>
        @if ($project->type_id)
            <h2>Type: {{ $project->type->name }}</h2>
        @endif
        <p>{{ $project->description }}</p>
    </div>
@endsection
