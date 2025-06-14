@extends('admin.layouts.layout')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Duration</th>
                    <th>Mentor</th>
                    <th>Fees</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->duration }}</td>
                        <td>{{ $course->mentor }}</td>
                        <td>{{ $course->fees }}</td>
                        <td>
                            @if ($course->image)
                                <img src="{{ asset($course->image) }}" alt="Course Image" width="100" class="img-thumbnail">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('courses.show',$course->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('courses.edit',$course->id) }}" class="btn btn-primary">Edit</a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
