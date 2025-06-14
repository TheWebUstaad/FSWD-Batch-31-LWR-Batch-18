@extends('admin.layouts.layout')
@section('content')

<div class="container mt-4">
    <div class="card shadow rounded">
       
        <div class="card-body">
            <h1 class="card-title">{{ $course->title }}</h1>
            <p class="card-text">{{ $course->description }}</p>

            <ul class="list-group list-group-flush mt-3">
                <li class="list-group-item"><strong>Duration:</strong> {{ $course->duration }}</li>
                <li class="list-group-item"><strong>Mentor:</strong> {{ $course->mentor }}</li>
                <li class="list-group-item"><strong>Fees:</strong> {{ $course->fees }}</li>
            </ul>
        </div>
         @if ($course->image)
            <img src="{{ asset($course->image) }}" class="card-img-top img-fluid" alt="{{ $course->title }}">
        @endif
    </div>
</div>

@endsection
