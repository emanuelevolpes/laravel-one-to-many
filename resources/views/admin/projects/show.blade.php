@extends('layouts.app')

@section('content')
    <div class="container text-center p-3">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>
    </div>
@endsection
